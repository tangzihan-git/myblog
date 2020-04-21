<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
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
        $data = Tag::paginate(10);
        return view('admin.tags',compact('data'));
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
            Tag::insert([
                "tag_name"=>$request->tag_name,
                "tag_color"=>$request->tag_color,
                "created_at"=>date('Y-m-d :H:i:s',time())
            ]);
        }
        return redirect()->back();
    }

    public function store(Request $request)
    {
       
        //删除操作
        if($request->statudel){
            Tag::where('id', $request->statudel)->delete();
        }else if($request->alldel){
            foreach ($request->ids as $id) {
                # code...
                 Tag::where('id', $id)->delete();
            }
        }
        //更新颜色
         if($request->color){
             Tag::where('id',$request->id)->update(['tag_color'=>$request->color,"updated_at"=>date('Y-m-d H:i:s')]);
        }//更新名称
        if($request->content){
            Tag::where('id',$request->id)->update(['tag_name'=>$request->content,"updated_at"=>date('Y-m-d H:i:s')]);
        
        }
        //下架&上架
        if($request->change){
            Tag::where('id',$request->id)->update(['tag_status'=>$request->status,"updated_at"=>date('Y-m-d H:i:s')]);
        
        }
        return response()->json(['status'=>'1']);
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        
        // dd($tag);
        $tag=$tag->article()->with(['user','cate'])->paginate(10);
        return view('list',compact('tag'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
