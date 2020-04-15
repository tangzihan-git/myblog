<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Cate;
use DB;
class ArticleController extends Controller
{
    public function test(Article $article)
    {
      dump($article->getHotArticle());
      // Cache::put
        // dump(123);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Cate $cate)
    {
        // dump($cate::find(1)->article);/
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
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        // $downid = $id-1;
        // $upid = $id+1;
        
        // $article = Article::selectRaw('*')
        //                     ->whereRaw("id in($upid,$downid,$id)")
        //                     ->get();
        // dd($article);
       
        $uparticle = Article::where('id',$article->id-1)->select('title')->get();
        $downarticle = Article::where('id',$article->id+1)->select('title')->get();
        return view('content',compact('article','uparticle','downarticle'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
