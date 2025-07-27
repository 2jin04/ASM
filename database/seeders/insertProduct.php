<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Str;
use Arr;
use DB;

class insertProduct extends Seeder
{
    public function run(): void
    {
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
        $screenSize = ['6.1 inch', '6.3 inch', '6.5 inch', '6.7 inch'];
        $battery = ['3,240 mAh', '4,323 mAh', '5,000 mAh'];

        for ($i=0; $i<50; $i++) {
            $HN = Arr::random($HN1) . ' ' . Arr::random($HN2) . ' ' . Arr::random($HN3);
            $XN = Arr::random($XN1) . ' ' . Arr::random($XN2);
            $ON = Arr::random($ON1) . ' ' . Arr::random($ON2);

            $price = mt_rand(23000000, 30000000);
            $priceSale = mt_rand(15000000, 22999999);
            $label = 0; 
            if ($price >= 25000000) $label = 3; 
            else if ($price - $priceSale >= 5000000) $label = 2;
            else if ($price <= 17000000) $label = 1; 
            else $label = 0;

            $randtime = mt_rand(2023, 2024) . '-' . mt_rand(1, 12) . '-' . mt_rand(1, 28) . " 23:59:59";

            $products = [
                ['name' => 'Apple ' . mt_rand(11, 15) . ' ' . Arr::random($AN), 'image' => 'apple' . mt_rand(1, 5) . '.png', 'idCategory' => 1],
                ['name' => 'Samsung Galaxy ' . Arr::random($SN), 'image' => 'samsung' . mt_rand(1, 5) . '.png', 'idCategory' => 2],
                ['name' => 'Huawei ' . $HN, 'image' => 'huawei' . mt_rand(1, 5) . '.png', 'idCategory' => 3],
                ['name' => 'Xiaomi ' . $XN, 'image' => 'xiaomi' . mt_rand(1, 5) . '.png', 'idCategory' => 4],
                ['name' => 'Oppo ' . $ON, 'image' => 'oppo' . mt_rand(1, 5) . '.png', 'idCategory' => 5],
                ['name' => 'Vivo Y' . mt_rand(83, 95) . ' ' . Arr::random($ON2), 'image' => 'vivo' . mt_rand(1, 5) . '.png', 'idCategory' => 6],
                ['name' => 'Motorola Moto ' . Arr::random($MN), 'image' => 'motorola' . mt_rand(1, 5) . '.png', 'idCategory' => 7]
            ];

            foreach ($products as $product) {
                $product['price'] = $price;
                $product['priceSale'] = $priceSale;
                $product['quantity'] = mt_rand(10000, 20000);
                $product['sold'] = mt_rand(5000, 20000);
                $product['hot'] = (Arr::random([0,1,2,3,4,5,6,7,8,9,10]) %3==0)?1:0;
                $product['view'] = mt_rand(5000, 20000);
                $product['label'] = $label;
                $product['dateSubmitted'] = $randtime;

                $newProduct = Product::create($product);

                $slug = Str::slug($newProduct->name) . "-" . $newProduct->id;
                product::where('id', $newProduct->id)->update(['slug' => $slug]);

                DB::table('properties')->insert([
                    'idProduct' => $newProduct->id,
                    'colors' => Arr::random($colors),
                    'storageOptions' => Arr::random($storageOptions),
                    'screenSize' => Arr::random($screenSize),
                    'battery' => Arr::random($battery)
                ]);
            }
        }
    }
}
