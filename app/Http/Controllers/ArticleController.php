<?php
namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use App\Cate;
use App\Tag;
use App\Handle\ImageUpload;
use DB;
use Cache;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Arr;
use  Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;
class ArticleController extends Controller
{
    
     public function __construct()
     {
        $this->middleware('auth',['except'=>['zan','index','show','getSubTree','files']]);
        $this->middleware('visit',['only'=>'show']);
     }
    //归档
    public function files(Article $article)
    {
        $newdata = $article->getAllfiles();
        asort($newdata);
        return view('guidang',compact('newdata'));

    }
    //点赞
    public function zan(Article $article ,Request $request)
    {
        $flag=1;
        if($request->code){
            //点赞存储文章id
            $cookie = cookie('article', $request->articleid, 60);
            $value = Cookie::get('article');
            if($value==$request->articleid)$flag=0;
            if($flag){
                $article->find($request->articleid)->increment('zan');
            }
            
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
                        ->with(['cate','user','tag'])
                        ->paginate(10);

        
        return view('admin.article',compact('data','cates','catename','startdate','enddate','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Article $article)
    {
        //
        $cates = Cate::get();
        $tags = Tag::get();
        return view('admin.articlemand',compact('cates','tags','article'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,Article $article ,Tag $tag)
    {
        //
            // // 1.封面图上传
            $img='';
            if($request->article_pic)$img = ImageUpload::save($request->article_pic,'article_img','article_img','250')['path'];
            //2.文章存储
            //执行事务
            DB::transaction(function() use($request,$article,$tag,$img){
                $article->title = $request->article_title;
                $article->body = $request->article_con;
                $article->cate_id = $request->article_cate;
                $article->desc = $request->article_part;
                $article->allow_com = $request->comment;
                $article->reco = $request->tuijian;
                $article->img = $img?:'';
                $article->user_id = \Auth::id();
                $article->save();
                //如果有自定义标签
                $tags = $request->article_tag?:[];
                if($request->article_self_tag){
                    $strs = explode(",",$request->article_self_tag);
                    foreach ($strs as $value) {
                        //将标签添加到标签表
                        if($res = $tag->where('tag_name',$value)->get()->toArray()){
                            // dump($res);
                            $tags[] = $res[0]['id'];//如果自定义标签重复 省去插入标签操作 并将第一个重复的标签作为文章的标签
                        }else{
                            $tagid = $tag->insertGetId(["tag_name"=>$value,"tag_color"=>randomcolor(),"created_at"=>date('Y-m-d H:i:s',time())]);
                            $tags[] = $tagid;
                        }        
                    }
                }
       
                //3.插入文章标签分类（中间表）
                foreach ($tags as $value) {
                    \DB::table('tag_article')->insert(["tag_id"=>$value,"article_id"=>$article->id,"created_at"=>date('Y-m-d H:i:s',time())]);
                }
            });
            return redirect()->to(route('articles.show',$article->id));
    }
    //文章图片上传
    public function upimg(Request $request)
    {
        $path = ImageUpload::save($request->articleimg,'article_con','article_con','1024')['path'];
        return $path;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {   
        $article->recordVisit($article->id);
        // dump($article->id);
        $updownarticle = Article::whereIn('id',[$article->id-1,$article->id+1])->select('id','title')->get();
        //评论展示
        $data = $article->comment()->orderby('created_at','asc')->get()->toArray();
        $comment = $this->getSubTree($data , 0 );
        return view('content',compact('article','updownarticle','comment'));
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
        $cates = Cate::get();
        $tags = Tag::get();
        return view('admin.articlemand',compact('cates','tags','article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function updated(Request $request, Article $article ,Tag $tag)
    {
        //上架与下架
        if($request->change){
            $article->status=$request->status;
            $article->save();
         
        }else{
            // // 1.封面图上传
            $img='';
            if($request->article_pic)$img = ImageUpload::save($request->article_pic,'article_img','article_img','250')['path'];
            //2.文章存储
            //执行事务
            DB::transaction(function() use($request,$article,$tag,$img){
                $article->title = $request->article_title;
                $article->body = $request->article_con;
                $article->cate_id = $request->article_cate;
                $article->desc = $request->article_part;
                $article->allow_com = $request->comment;
                $article->reco = $request->tuijian;
                $article->img = $img?:'';
                $article->user_id = \Auth::id();
                $article->save();
                //如果有自定义标签
                $tags = $request->article_tag?:[];
                if($request->article_self_tag){
                    $strs = explode(",",$request->article_self_tag);
                    foreach ($strs as $value) {
                        //将标签添加到标签表
                        if($res = $tag->where('tag_name',$value)->get()->toArray()){
                            // dump($res);
                            $tags[] = $res[0]['id'];//如果自定义标签重复 省去插入标签操作 并将第一个重复的标签作为文章的标签
                        }else{
                            $tagid = $tag->insertGetId(["tag_name"=>$value,"tag_color"=>randomcolor(),"created_at"=>date('Y-m-d H:i:s',time())]);
                            $tags[] = $tagid;
                        }        
                    }
                }
       
                //3.插入文章标签分类（中间表）
                foreach ($tags as $value) {
                    \DB::table('tag_article')->insert(["tag_id"=>$value,"article_id"=>$article->id,"created_at"=>date('Y-m-d H:i:s',time())]);
                }
            });
             return redirect()->to(route('articles.show',$article->id));

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
      
}