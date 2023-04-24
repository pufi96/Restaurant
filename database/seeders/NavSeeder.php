<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $names = ['Home', 'Menu', 'Reservation', 'Contact'];
    private $routes = ['home', 'menu', 'reservation', 'contact'];

    public function run()
    {
        for($i = 0; $i < count($this->names); $i++) {
            \DB::table('nav')->insert([
                'nameNav' => $this->names[$i],
                'route' => $this->routes[$i],
                'order' => $i
            ]);
        }
    }
}
