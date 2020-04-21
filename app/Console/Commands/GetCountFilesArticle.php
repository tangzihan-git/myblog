<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Article;
class GetCountFilesArticle extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:get-count-files-article';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取归档数据';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Article $article)
    {
        //
        $this->info('正在生成归档数据');
        $article->cachefilesArticle();
        $this->info('归档数据生成成功');
    }
}
