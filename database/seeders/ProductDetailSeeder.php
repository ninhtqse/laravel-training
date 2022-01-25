<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Module\Products\Models\ProductDetail;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductDetail::truncate();
        DB::statement(
            <<<EOD
            INSERT INTO `product_details` VALUES ('0c3011f3-34e7-4a22-8b30-5812da3acbb1', '366B58C2-6EE6-46DD-BF10-BDC343F21BAE', NULL, 500000.000, 15, 'Áo Phao Màu Xanh Mint', '0c3011f3-34e7-4a22-8b30-5812da3acbb1_image.jpg', NULL, NULL);
            INSERT INTO `product_details` VALUES ('21bb4389-1cd1-4f56-ac4a-ad917b47f92b', 'DDA833AA-6C4F-463E-A741-0744741D07D2', NULL, 40000.000, 6, 'Quần màu trắng', '21bb4389-1cd1-4f56-ac4a-ad917b47f92b_image.jpg', NULL, NULL);
            INSERT INTO `product_details` VALUES ('3a998220-e3f5-49a8-97c7-904807c5c713', '4234D215-7856-4565-B63B-74129B20E50E', NULL, 150000.000, 11, 'Áo Lông Thỏ', '3a998220-e3f5-49a8-97c7-904807c5c713_image.png', NULL, NULL);
            INSERT INTO `product_details` VALUES ('73ae932b-60e0-489f-be9b-87138c3fa097', 'F00BE7CF-5922-4830-BF8A-4DDB2BE31407', NULL, 50000.000, 5, 'Áo màu xám', '73ae932b-60e0-489f-be9b-87138c3fa097_image.jpg', NULL, NULL);
            INSERT INTO `product_details` VALUES ('7415ce2a-b9f3-472d-8125-86c256f63a49', '0C9C5354-BC1C-4868-8BED-C0E020C83F7D', NULL, 50000.000, 8, 'Khẩu trang chất chơi người dơi', '7415ce2a-b9f3-472d-8125-86c256f63a49_image.jpg', NULL, NULL);
            INSERT INTO `product_details` VALUES ('7f680c6c-1a82-4154-93e0-163b883ef8c4', 'F00BE7CF-5922-4830-BF8A-4DDB2BE31407', NULL, 40000.000, 10, 'Áo màu xanh', '7f680c6c-1a82-4154-93e0-163b883ef8c4_image.jpg', NULL, NULL);
            INSERT INTO `product_details` VALUES ('81e29ac3-ca8b-42ec-8f03-fbaeae5351e0', 'DDA833AA-6C4F-463E-A741-0744741D07D2', NULL, 50000.000, 8, 'Quần màu xám', '81e29ac3-ca8b-42ec-8f03-fbaeae5351e0_image.jpg', NULL, NULL);
            INSERT INTO `product_details` VALUES ('983a5598-6e32-4601-9671-1c2dbca7004d', '366B58C2-6EE6-46DD-BF10-BDC343F21BAE', NULL, 400000.000, 13, 'Áo phao này ấm lắm', '983a5598-6e32-4601-9671-1c2dbca7004d_image.jpg', NULL, NULL);
            INSERT INTO `product_details` VALUES ('efb0a7f0-3b6b-4746-a8cb-c19a83eee62f', 'F790ABA4-4B71-4CBF-9CF3-F0AD2550E581', NULL, 123000.000, 11, 'Áo hoddie zip', 'efb0a7f0-3b6b-4746-a8cb-c19a83eee62f_image.jpg', NULL, NULL);
            EOD
        );
        

    }
}
