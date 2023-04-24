<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $type = ['drink','lunch', 'dinner'];
    public function run()
    {
        $faker = Faker::create();
        for($i =1; $i<10; $i++){
            $id =\DB::table('menu')->insertGetId([
                'nameMenu'=>$faker->word,
                'descMenu'=>$faker->word,
                'imageMenu'=>'img-'.$i.'.jpg',
                'altMenu'=>$faker->word,
                'price'=>rand(3,30),
                'type'=>array_random($this->type),
                'visible'=> true
            ]);
            \DB::table('category_menu')->insert([
                'idMenu' => $id,
                'idCategory' => rand(1,3)
            ]);
        }
    }
}
