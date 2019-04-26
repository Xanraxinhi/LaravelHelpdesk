<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Article;
use App\Errlist;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $faker = Faker\Factory::create();

     //    for($i = 0; $i < 10; ++$i) {
     //    	User::create([
     //    		 'name' => $faker->sentence,
     //    		'email' => $faker->sentence
     //    	]);
     //    }
        $this->call(ProductTableSeeder::class);
    }
}
// class usersSeeder extends Seeder
// {
//     public function run()
//     {
//         DB::table('users')->insert([
//             ['name'=>'Tuấn','email'=>str_random(3).'@gmail.com','password'=>bcrypt('123123'), 'level'=>'1','phonenumber'=>'integer_random(11)'],
//             ['name'=>'Tân','email'=>str_random(3).'@gmail.com','password'=>bcrypt('123123'), 'level'=>'0','phonenumber'=>'integer_random(11)'],
//             ['name'=>'Tấn','email'=>str_random(3).'@gmail.com','password'=>bcrypt('123123'), 'level'=>'0','phonenumber'=>'integer_random(11)'],
//             ['name'=>'Kiệt','email'=>str_random(3).'@gmail.com','password'=>bcrypt('123123'), 'level'=>'0','phonenumber'=>'integer_random(11)'],
//             ['name'=>'Tăng','email'=>str_random(3).'@gmail.com','password'=>bcrypt('123123'), 'level'=>'0','phonenumber'=>'integerrandom(11)'],
//             ['name'=>'Đạt','email'=>str_random(3).'@gmail.com','password'=>bcrypt('123123'), 'level'=>'0','phonenumber'=>'integer_random(11)'],

//         ]);
//     }

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
           [
               'name_product'=>'iPhone',
           ],
           [
               'name_product'=>'Samsung',
           ],
           [
               'name_product'=>'HTC',
           ],
           [
               'name_product'=>'Huawei',
           ],
           [
               'name_product'=>'Oppo',
           ],
       ];
       DB::table('products')->insert($data);
   }  
}