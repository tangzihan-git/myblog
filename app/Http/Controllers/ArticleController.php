<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Cate;
use App\Tag;
use App\Handle\ImageUpload;
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
    public function index(Request $request)
    {
         $cates = Cate::all();
       
        $catename = $request->catename?:1;
        $startdate = $request->startdate?:'2020-1-1';
        $enddate = $request->enddate?:'2060-12-31';
        $title = $request->search?:'';
        $data = Article::where('cate_id',$catename)
                        ->where('title','like','%'.$title.'%')
                        ->wherebetween('articles.created_at',[$startdate,$enddate])
                        ->paginate(10);

        
        return view('admin.article',compact('data','cates','catename','startdate','enddate','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cates = Cate::get();
        $tags = Tag::get();
        return view('admin.articlemand',compact('cates','tags'));
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
        dump($request);
    }
    //文章图片上传
    public function upimg(Request $request)
    {
        $path = ImageUpload::save($request->articleimg,'article_con','article_con','1024')['path'];
        return response()->json(['path'=>$path]);
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
        //访问次数加一
        $article->increment('visit_num');
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
        if($request->change){
            $article->status=$request->status;
            $article->save();
         
        }
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
        $article->delete();
    }

    public function desmany(Request $request){
        if($request->alldel){
            // foreach ($request->ids as $id) {
            //     # code...
            //     Article::where('id', $id)->delete();
            // }
            Article::destroy($request->ids);

            return response()->json(['123'=>$request->ids]);

    }
}