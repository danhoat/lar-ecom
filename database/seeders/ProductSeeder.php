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
        $iphone_url = 'https://images-cdn.ubuy.co.in/665210fa08271455c87cf355-restored-apple-iphone-12-5g-smartphone.jpg';
        $iphone_xxx = 'https://cdn2.cellphones.com.vn/x/media/catalog/product/3/_/3_224.jpg';
        $iphone_3 ='https://eplio.com.ua/image/cache/catalog/product_2683_0_image-1000x1000.jpg';
        $oppo = 'https://cdn.tgdd.vn/Products/Images/42/332934/oppo-reno13-5g-blue-thumb-600x600.jpg';

        DB::table('products')->insert([
            'name'          => 'Iphone 11',
            'price'         => '20000000',
            'category'      => 'mobile',
            'description'   => "Iphone 11 pro",
            'gallery'       => $iphone_url,
        ]);
        DB::table('products')->insert([
            'name'          => 'OPPO Reno13 F',
            'price'         => '9990000',
            'category'      => 'mobile',
            'description'   => "Điện thoại OPPO Reno13 F 5G 8GB/256GB",
            'gallery'       => 'https://cdn.tgdd.vn/Products/Images/42/332936/oppo-reno13-f-blue-thumb-600x600.jpg',
        ]);
        DB::table('products')->insert([
            'name'          => 'Điện thoại OPPO Reno13 ',
            'price'         => '15990000',
            'category'      => 'mobile',
            'description'   => 'Điện thoại OPPO Reno13 5G 12GB/256GB',
            'gallery'       => $oppo,
        ]);
         DB::table('products')->insert([
            'name'          => 'Iphone 12',
            'price'         => '28000000',
            'category'      => 'mobile',
            'description'   => 'Iphone 13 pro',
            'gallery'       => $iphone_3,
        ]);
          DB::table('products')->insert([
            'name'          => 'SamSung Galaxy S24 Ultra 5G',
            'price'         => '21990000',
            'category'      => 'mobile',
            'description'   => 'SamSung Galaxy S24 Ultra 5G (12GB|256GB) USA 2 Sim New OpenSeal Fullbox',
            'gallery'       => 'https://viostore.vn/wp-content/uploads/2024/09/1-7-510x510.png',
        ]);
           DB::table('products')->insert([
            'name'          => 'Iphone 16',
            'price'         => '28000000',
            'category'      => 'mobile',
            'description'   => 'Iphone 13 pro',
            'gallery'       => $iphone_url,
        ]);
            DB::table('products')->insert([
            'name'          => 'Iphone 17',
            'price'         => '28000000',
            'category'      => 'mobile',
            'description'   => 'Iphone 13 pro',
            'gallery'       => 'https://www.letemsvetemapplem.eu/wp-content/uploads/2024/12/GTRNuEUbEAANsTf.jpeg',
        ]);
             DB::table('products')->insert([
            'name'          => 'Iphone 15',
            'price'         => '28000000',
            'category'      => 'mobile',
            'description'   => 'Iphone 13 pro',
            'gallery'       => $iphone_url,
        ]);
              DB::table('products')->insert([
            'name'          => 'xiaomi Note',
            'price'         => '28000000',
            'category'      => 'mobile',
            'description'   => 'Iphone 13 pro',
            'gallery'       => $iphone_3,
        ]);
        DB::table('products')->insert([
            'name'          => 'Điện thoại OPPO Reno13 Pro ',
            'price'         => '9990000',
            'category'      => 'mobile',
            'description'   => "Điện thoại OPPO Reno13 Pro 5G 12GB/512GB",
            'gallery'       => 'https://cdn.tgdd.vn/Products/Images/42/332937/oppo-reno13-pro-5g-grey-thumb-600x600.jpg',
        ]);
               DB::table('products')->insert([
            'name'          => 'Điện thoại OPPO Reno13  2025',
            'price'         => '28000000',
            'category'      => 'mobile',
            'description'   => 'Oppo 2025',
            'gallery'       => 'https://cdn.tgdd.vn/Products/Images/42/332937/oppo-reno13-pro-5g-grey-thumb-600x600.jpg',
        ]);
                DB::table('products')->insert([
            'name'          => 'Samung Galaxy 2025',
            'price'         => '28000000',
            'category'      => 'mobile',
            'description'   => 'Samung Galaxy 2025',
            'gallery'       => 'https://cdn.xtmobile.vn/vnt_upload/product/07_2023/thumbs/600_s10_5g_black_800x800_min_1.jpg'
        ]);
    }
}
