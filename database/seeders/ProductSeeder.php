<?php

namespace Database\Seeders;

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
        DB::table('products')->insert([
            [
                'name'=>'Oppo Reno8',
                "price"=>"12000",
                "description"=>"8gb RAM, 128gb Internal Storage, Snapdragon 888, 64mp front camera",
                "category"=>"Mobile Phone",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Panasonic TH-43JX750',
                "price"=>"10000",
                "description"=>"IPS LED | Vivd Digital Pro | Dot Noise Reduction",
                "category"=>"Tv",
                "gallery"=>"https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg"
            ],
            [
                'name'=>'Sony A80J | BRAVIA XR',
                "price"=>"500",
                "description"=>"OLED | 4K Ultra HD | High Dynamic Range (HDR) | Smart TV (Google TV)",
                "category"=>"TV",
                "gallery"=>"https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
            ],
            [
                'name'=>'boAt Rockerz 255',
                "price"=>"800",
                "description"=>"IPX5 | 10mm Dynamic Drivers | 8hrs Battery",
                "category"=>"Wireless Earphones",
                "gallery"=>"https://cdn.shopify.com/s/files/1/0057/8938/4802/products/4a9082ec-d2a5-49b5-9daa-58ee52ec5d12_540x.png?v=1625046507"
            ],
            [
                'name'=>'LG GL-B201',
                "price"=>"5000",
                "description"=>"a simple refrigerator",
                "category"=>"refrigerator and coolants",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU"
             ]
        ]);
    }
}
