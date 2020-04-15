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
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
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
            $cate=$cate->article()->paginate(15);
            return view('shuibi',compact('cate'));
        break;
        case '美文':
            $cate=$cate->article()->paginate(10);
            return view('beau',compact('cate'));
        break;
        default:
            $cate=$cate->article()->paginate(10);
            return view('list',compact('cate'));
        break;

      }


            
        
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
    public function update(Request $request, Cate $cate)
    {
        //
    }

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
