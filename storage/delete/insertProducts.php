<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Str;
use Arr;
class insertProducts extends Seeder
{
    public function run(): void
    {
        // $A1 = ['11', '12', '13', '14', '15'];
        $AN = ['Pro', 'Pro Max', 'Plus', 'Mini', ''];
        $SN = ['A14 5G', 'A23 5G', 'A33 5G', 'A34 5G', 'A53 5G', 'A54 5G', 'A73 5G', 'S22', 'S22+', 'S22 Ultra', 'S23', 'S23+', 'S23 Ultra'];
        $HN1 = ['Mate', 'Enjoy', 'Nova', ''];
        $HN2 = ['10', '30', '40', 'P40', '50', 'P60'];
        $HN3 = ['Pro', ''];
        $XN1 = ['Redmi','Redmi Note', 'Poco', 'Mi'];
        $XN2 = ['10','10 Pro', '11','11 Pro', '12', '12 Pro'];
        $ON1 = ['K11', 'K13', 'F21', 'A72', 'A74', 'A76', 'A92', 'A94', 'A96'];
        $ON2 = ['Pro', ''];
        $MN = ['E10','E20','E30','E40','G21', 'G31', 'G51', 'G71', 'G200', 'G400'];
        $colors = ['Đen', 'Trắng', 'Tím', 'Xanh', 'Hồng'];
        $storageOptions = ['64GB', '128GB', '256GB', '512GB'];
        $screenSize =
        for ($i=0; $i<50; $i++) {
            $HN = Arr::random($HN1). ' ' .Arr::random($HN2). ' ' .Arr::random($HN3); //Random tên Huawei
            $XN = Arr::random($XN1). ' ' .Arr::random($XN2); //Random tên Xiaomi
            $ON = Arr::random($ON1). ' ' .Arr::random($ON2); //Random tên Oppo
            
            product::upsert([[
                'name' => 'Apple'.' '.mt_rand(11, 15).' '.Arr::random($AN),
                'image' => 'apple'.mt_rand(1, 5).'.png',
                'priceSale' => mt_rand(20000000, 24999999),
                'price' => mt_rand(25000000, 30000000),
                'quantity' => mt_rand(10000, 20000),
                'view' => mt_rand(5000, 20000),
                'dateSubmitted' => now(),
                'idCategory' => 1
            ],[
                'name' => 'Samsung Galaxy'.' '.Arr::random($SN),
                'image' => 'samsung'.mt_rand(1, 5).'.png',
                'priceSale' => mt_rand(20000000, 24999999),
                'price' => mt_rand(25000000, 30000000),
                'quantity' => mt_rand(10000, 20000),
                'view' => mt_rand(5000, 20000),
                'dateSubmitted' => now(),
                'idCategory' => 2
            ],[
                'name' => 'Huawei'.' '.$HN,
                'image' => 'huawei'.mt_rand(1, 5).'.png',
                'priceSale' => mt_rand(20000000, 24999999),
                'price' => mt_rand(25000000, 30000000),
                'quantity' => mt_rand(10000, 20000),
                'view' => mt_rand(5000, 20000),
                'dateSubmitted' => now(),
                'idCategory' => 3
            ],[
                'name' => 'Xiaomi'.' '.$XN,
                'image' => 'xiaomi'.mt_rand(1, 5).'.png',
                'priceSale' => mt_rand(20000000, 24999999),
                'price' => mt_rand(25000000, 30000000),
                'quantity' => mt_rand(10000, 20000),
                'view' => mt_rand(5000, 20000),
                'dateSubmitted' => now(),
                'idCategory' => 4
            ],[
                'name' => 'Oppo'.' '.$ON,
                'image' => 'oppo'.mt_rand(1, 5).'.png',
                'priceSale' => mt_rand(20000000, 24999999),
                'price' => mt_rand(25000000, 30000000),
                'quantity' => mt_rand(10000, 20000),
                'view' => mt_rand(5000, 20000),
                'dateSubmitted' => now(),
                'idCategory' => 5
            ],[
                'name' => 'Vivo Y'.mt_rand(83, 95).' '.Arr::random($ON2),
                'image' => 'vivo'.mt_rand(1, 5).'.png',
                'priceSale' => mt_rand(20000000, 24999999),
                'price' => mt_rand(25000000, 30000000),
                'quantity' => mt_rand(10000, 20000),
                'view' => mt_rand(5000, 20000),
                'dateSubmitted' => now(),
                'idCategory' => 6
            ],[
                'name' => 'Motorola Moto'.' '.Arr::random($MN),
                'image' => 'motorola'.mt_rand(1, 5).'.png',
                'priceSale' => mt_rand(20000000, 24999999),
                'price' => mt_rand(25000000, 30000000),
                'quantity' => mt_rand(10000, 20000),
                'view' => mt_rand(5000, 20000),
                'dateSubmitted' => now(),
                'idCategory' => 7
            ]
        ], ['name'], ['image', 'price', 'quantity', 'view', 'dateSubmitted', 'idCategory']);
        }
    }
}
