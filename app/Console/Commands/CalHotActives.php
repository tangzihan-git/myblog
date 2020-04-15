<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Article;
class CalHotActives extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:cal-hot-articles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '生成热门文章';

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
        //该命令的逻辑
        $this->info('正在计算...');
        $article->calAndCacheHotArticles();
        $this->info('成功生成！');
    }
}
