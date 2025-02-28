<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


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
            'password'  => Hash::make('abc'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('admin'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // DB::table('users')->insert([
        //     'name'      => 'WordPress',
        //     'email'     => 'wpcodev@gmail.com',
        //     'password'  => Hash::make('12345'),
        // ]);
    }
}
