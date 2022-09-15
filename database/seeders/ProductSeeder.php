<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name'          => 'Iphone 11',
            'price'         => '20000000',
            'category'      => 'mobile',
            'description'   => "Iphone 11 pro",
            'gallery'       => 'https://fptshop.com.vn/Uploads/Originals/2022/4/25/637864944636979062_iphone-13-xanhla-1.jpg'
        ]);
        DB::table('products')->insert([
            'name'          => 'Iphone 12',
            'price'         => '23000000',
            'category'      => 'mobile',
            'description'   => "Iphone 12 ",
            'gallery'       => 'https://fptshop.com.vn/Uploads/Originals/2022/4/25/637864944636979062_iphone-13-xanhla-1.jpg'
        ]);
        DB::table('products')->insert([
            'name'          => 'Iphone 13',
            'price'         => '28000000',
            'category'      => 'mobile',
            'description'   => 'Iphone 13 pro',
            'gallery'       => 'https://fptshop.com.vn/Uploads/Originals/2022/4/25/637864944636979062_iphone-13-xanhla-1.jpg'
        ]);
    }
}
