<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
     {
        $this->middleware('auth',['except'=>['index','messages','store']]);
     }
    public function index()
    {
        //
        $data  = \DB::table('messages')->paginate(10);
        return view('admin.liuyan',compact('data'));

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
    //用户留言
    public function messages(Request $request)
    {
        if(empty($_POST)){
            $data = \DB::table('messages')->paginate(10);
            return view('liuyan',compact('data'));
        }else{
            $time = date('Y-m-d H:i:s');
            \DB::table('messages')->insert([
                "user_qq"=>133,
                "user_ip"=>$request->getClientIps()[0],
                "user_con"=>make_excerpt($request->content,100),
                "created_at"=>$time
            ]);
            return response()->json([
                "time"=>$time,

            ]);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //删除操作
        if($request->statudel){
            \DB::table('messages')->where('id', $request->statudel)->delete();
        }else if($request->alldel){
            foreach ($request->ids as $id) {
                # code...
                \DB::table('messages')->where('id', $id)->delete();
            }
        }
        //回复操作
        \DB::table('messages')->where('id',$request->id)->update(['replay'=>$request->content,'status'=>1]);
        return response()->json(['status'=>'1']);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
