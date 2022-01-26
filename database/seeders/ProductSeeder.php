<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Module\Products\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        DB::statement(
            <<<EOD
                INSERT INTO `products` VALUES ('0C9C5354-BC1C-4868-8BED-C0E020C83F7D', 'd2a1af71-17d0-4901-8224-7d43de875825', 'Khẩu Trang', '2022-01-25 07:36:55', '2022-01-25 07:39:52');
                INSERT INTO `products` VALUES ('366B58C2-6EE6-46DD-BF10-BDC343F21BAE', 'a8d36cde-afa9-40d2-8de9-82e0629fb6d7', 'Áo Đại Hàn', '2022-01-25 07:29:18', '2022-01-25 07:29:18');
                INSERT INTO `products` VALUES ('4234D215-7856-4565-B63B-74129B20E50E', 'd2a1af71-17d0-4901-8224-7d43de875825', 'Áo Caro', '2022-01-25 07:32:43', '2022-01-25 07:33:53');
                INSERT INTO `products` VALUES ('DDA833AA-6C4F-463E-A741-0744741D07D2', 'a8d36cde-afa9-40d2-8de9-82e0629fb6d7', 'Quần Suông', '2022-01-25 07:19:35', '2022-01-25 07:34:18');
                INSERT INTO `products` VALUES ('F00BE7CF-5922-4830-BF8A-4DDB2BE31407', 'a8d36cde-afa9-40d2-8de9-82e0629fb6d7', 'Áo Nỉ', '2022-01-25 07:06:56', '2022-01-25 07:34:45');
                INSERT INTO `products` VALUES ('F790ABA4-4B71-4CBF-9CF3-F0AD2550E581', 'd2a1af71-17d0-4901-8224-7d43de875825', 'hoddie', '2022-01-25 07:38:36', '2022-01-25 07:38:36');
            EOD
        );
        

    }
}
