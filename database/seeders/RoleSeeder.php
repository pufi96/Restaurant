<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $roles = ['user', 'admin'];
    public function run()
    {
        for($i = 0; $i < count($this->roles); $i++) {
            \DB::table('role')->insert([
                'nameRole' => $this->roles[$i]
            ]);
        }
    }
}
