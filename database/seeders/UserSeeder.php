<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'      => 'abc',
            'email'     => 'abc@gmail.com',
            'password'  => Hash::make('12345'),
        ]);
        // DB::table('users')->insert([
        //     'name'      => 'WordPress',
        //     'email'     => 'wpcodev@gmail.com',
        //     'password'  => Hash::make('12345'),
        // ]);
    }
}
