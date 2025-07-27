<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class insertCategory extends Seeder
{
    public function run(): void
    {
        category::insert([
            ['name'=>'Apple', 'image'=>'logo-apple.png', 'thuTu'=>'1'],
            ['name'=>'Sam Sung', 'image'=>'logo-samsung.png', 'thuTu'=>'2'],
            ['name'=>'Huawei', 'image'=>'logo-huawei.png', 'thuTu'=>'3'],
            ['name'=>'Xiaomi', 'image'=>'logo-xiaomi.png', 'thuTu'=>'4'],
            ['name'=>'Oppo', 'image'=>'logo-oppo.png', 'thuTu'=>'5'],
            ['name'=>'Vivo', 'image'=>'logo-vivo.png', 'thuTu'=>'6'],
            ['name'=>'Motorola', 'image'=>'logo-motorola.png', 'thuTu'=>'7']
        ]);
    }
}