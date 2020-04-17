<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Cate;
use DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;
class ArticleController extends Controller
{
    //归档
    public function files()
    {
      
        $dates = ['2020-04'];      
        $articles=DB::table('articles')->select('id','title','created_at')->where('status',1)->limit(10)->get();
       
        return view('guidang',compact('articles','dates'));

    }
    //点赞
    public function zan(Article $article ,Request $request)
    {
        $flag=1;
        if($request->code){
            $article->find($request->articleid)->increment('zan');
            //点赞存储文章id
            $cookie = cookie('article', $request->articleid, 60);
            $value = Cookie::get('article');
            if($value==$request->articleid)$flag=0;
            return response()->json(['status'=>$flag,'value'=>$value])->cookie($cookie);


        }
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
        $uparticle = Article::where('id',$article->id-1)->select('title')->get();
        $downarticle = Article::where('id',$article->id+1)->select('title')->get();
        //评论展示
        $data = $article->comment()->get()->toArray();
        $comment = $this->getSubTree($data , 0 );
        return view('content',compact('article','uparticle','downarticle','comment'));
    }

    //对评论递归取出
    private function getSubTree($data , $id = 0 ) {
            static $son = array();
            foreach($data as  $value) {
                if($value['parent_id'] == $id) {
                    $son[] = $value;
                   $this->getSubTree($data , $value['id']);
                }
            }
            return $son;
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
