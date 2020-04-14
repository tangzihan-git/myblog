<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //获取Faker实例
    	$faker = app(Faker\Generator::class);
       //头像假数据
        $avatars = [
            'https://cdn.learnku.com/uploads/images/201710/14/1/s5ehp11z6s.png',
            'https://cdn.learnku.com/uploads/images/201710/14/1/Lhd1SHqu86.png',
            'https://cdn.learnku.com/uploads/images/201710/14/1/LOnMrqbHJn.png',
            'https://cdn.learnku.com/uploads/images/201710/14/1/xAuDMxteQy.png',
            'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png',
            'https://cdn.learnku.com/uploads/images/201710/14/1/NDnzMutoxX.png',
        ];
        //生成数据集合
        $users = factory(User::class)
        	   ->times(10)
        	   ->make()
        	   ->each(function($user,$index) use($faker,$avatars)
        	   {
        	   	//从头像数组中随机获取一个并且赋值
        	   	$user->headers = $faker->randomElement($avatars);
        	   });
        	   //使隐藏的字段可见 并将数据集合转换为数组
        	   $user_array = $users->makeVisible(['password','remember_token'])->toArray();
        //插入值到数据库
        User::insert($user_array);
        //单独处理第一个数据
        $user = User::find(1);
        $user->name = 'TangZiHan';
        $user->email = '2197486242@qq.com';
        $user->ip = '127.0.0.1';
        $user->save();

    }
}
