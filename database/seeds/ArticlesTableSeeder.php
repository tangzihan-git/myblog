<?php

use Illuminate\Database\Seeder;
use App\Cate;
use App\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//图片数据
    	 $avatars = [
            'https://cdn.learnku.com/uploads/images/201710/14/1/s5ehp11z6s.png',
            'https://cdn.learnku.com/uploads/images/201710/14/1/Lhd1SHqu86.png',
            'https://cdn.learnku.com/uploads/images/201710/14/1/LOnMrqbHJn.png',
            'https://cdn.learnku.com/uploads/images/201710/14/1/xAuDMxteQy.png',
            'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png',
            'https://cdn.learnku.com/uploads/images/201710/14/1/NDnzMutoxX.png',
        ];
        //获取所有栏目id
        $cate_id = Cate::all()->pluck('id')->toArray();
        //获取faker实例
        $faker = app(Faker\Generator::class);
        $articles = factory(Article::class)
        			->times(30)
        			->make()
        			->each(function($article,$index) use ($cate_id,$faker,$avatars)
        			{
        				//从栏目id 随机取出一个
        				$article->cate_id = $faker->randomElement($cate_id);
        				$article->img = $faker->randomElement($avatars);
        			});
        		//将数据集合转换为数组插入到数据库
        		Article::insert($articles->toArray());


    }
}
