<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
           'name'=>'super_admin',
           'email'=>'admin@app.com',
           'password'=>bcrypt('password'),
           'type'=>'super_admin'
        ]);

        $user->attachRole('super_admin');
    }
}
