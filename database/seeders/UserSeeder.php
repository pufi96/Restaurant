<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $fillable = ['nameUser' ,'surnameUser' ,'email' ,'password' ,'active' ,'idRole'];
    private $name = ['Pera', 'Mika', 'Bojan'];
    private $surname = ['Peric', 'Mikic', 'Stojkovic'];
    private $email = ['pera@peric.rs', 'mika@mikic.rs',  'bojan.stojkovic.29.19@ict.edu.rs'];
    private $password = ['Pera12345.', 'Mika12345.', 'Admin12345.'];
    private $idRole = ['1', '1', '2'];
    public function run()
    {
        for($i = 0; $i < count($this->name); $i++) {
            \DB::table('user')->insert([
                'nameUser' => $this->name[$i],
                'surnameUser' => $this->surname[$i],
                'email' => $this->email[$i],
                'password' => md5($this->password[$i]),
                'active' => true,
                'idRole' => $this->idRole[$i]
            ]);
        }
    }
}
