<?php

namespace App\Http\Controllers;

use App\Cate;
use Illuminate\Http\Request;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
     }
    public function index()
    {
        //
        $data = Cate::paginate(10);
        return view('admin.cate',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function add(Request $request)
    {
         //添加操作
        if($request->statuadd){
            Cate::insert([
                "cate_name"=>$request->cate_name,
                "cate_desc"=>$request->cate_desc,
                "created_at"=>date('Y-m-d :H:i:s',time())
            ]);
        }
        return redirect()->back();
    }

    public function store(Request $request)
    {
       
        //删除操作
        if($request->statudel){
            Cate::where('id', $request->statudel)->delete();
        }else if($request->alldel){
            foreach ($request->ids as $id) {
                # code...
                 Cate::where('id', $id)->delete();
            }
        }
        //更新名称
        if($request->content){
            Cate::where('id',$request->id)->update(['cate_name'=>$request->content,"updated_at"=>date('Y-m-d H:i:s')]);
        
        }
        //下架&上架
        if($request->change){
            Cate::where('id',$request->id)->update(['cate_status'=>$request->status,"updated_at"=>date('Y-m-d H:i:s')]);
        
        }
        return response()->json(['status'=>'1']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function show(Cate $cate)
    {
      
      switch($cate->cate_name){
        case '心情随笔':
            $cate=$cate->article()->with(['user','cate'])->paginate(15);
            return view('shuibi',compact('cate'));
        break;
        case '美文':
            $cate=$cate->article()->with(['user','cate'])->paginate(10);
            return view('beau',compact('cate'));
        break;
        default:
            $cate=$cate->article()->with(['user','cate'])->paginate(10);
            return view('list',compact('cate'));
        break;

      }


            
        
    }
    public function updated(Request $request, Cate $cate)
    {
        //
      
        $cate->where('id',$request->cate_id)->update(['cate_name'=>$request->cate_name,"cate_desc"=>$request->cate_desc]);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function edit(Cate $cate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cate $cate)
    {
        //
    }
}
