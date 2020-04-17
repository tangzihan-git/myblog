<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Handle\CountCommentNum;
class CountComment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:count-comment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '统计评论数量';

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
    public function handle(CountCommentNum $countCommentNum)
    {
        //
        $this->info('生成评论数量');
        $countCommentNum->countComment();
        $this->info('评论数量生成成功');
    }
}
