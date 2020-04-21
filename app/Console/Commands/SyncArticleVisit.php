<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Article;
class SyncArticleVisit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:sync-article-visit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取访问数量';

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
        $this->info('正在收集');
        $article->syncVisitArticle();
        $this->info('收集成功');
    }
}
