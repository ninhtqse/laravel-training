<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Module\Products\Models\AttributeProduct;

class AttributeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AttributeProduct::truncate();
        DB::statement(
            <<<EOD
            INSERT INTO `attribute_products` VALUES ('02fa64b5-32cc-47ff-b3d5-a40f9204022a', '1', 'Xám', 'efb0a7f0-3b6b-4746-a8cb-c19a83eee62f', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('173e592b-76c6-4d93-9351-e597a18b6736', '3', 'S', '73ae932b-60e0-489f-be9b-87138c3fa097', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('1e38628a-6a5e-4bb0-bf38-3df7131b6ac7', '3', 'All size', '7415ce2a-b9f3-472d-8125-86c256f63a49', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('21ef3883-8697-46b5-9072-04ccb3dbd1b0', '1', 'Trắng', '21bb4389-1cd1-4f56-ac4a-ad917b47f92b', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('27f18a68-cdb3-4e9b-9ba6-892fd9e13164', '3', 'L', '7f680c6c-1a82-4154-93e0-163b883ef8c4', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('2cd4e93d-1b90-4574-8ad6-919a0fcdaa43', '3', 'S', '3a998220-e3f5-49a8-97c7-904807c5c713', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('3a554c61-8b9d-4499-9dd8-4d8e51ebb875', '1', 'Xanh Mint', '0c3011f3-34e7-4a22-8b30-5812da3acbb1', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('5b27c443-9dbd-44e6-9a47-e75338901a6f', '1', 'Đen', '983a5598-6e32-4601-9671-1c2dbca7004d', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('642a5b31-ce05-4911-b0a5-91134b52c386', '3', 'M', '983a5598-6e32-4601-9671-1c2dbca7004d', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('74637818-4cc3-400e-b200-255d119c90ba', '1', 'Đen', '7415ce2a-b9f3-472d-8125-86c256f63a49', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('76a0ae65-337c-4781-8230-ff941211f0c9', '3', 'L', 'efb0a7f0-3b6b-4746-a8cb-c19a83eee62f', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('7df15d86-3eda-4ecd-8734-9b7a443c97c2', '3', 'L', '21bb4389-1cd1-4f56-ac4a-ad917b47f92b', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('9ef98022-94a4-411b-9f6a-34bf6b748bc1', '1', 'Xám', '73ae932b-60e0-489f-be9b-87138c3fa097', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('a9aaa662-4b98-464f-8a5d-95754a5bad1d', '1', 'Xanh', '7f680c6c-1a82-4154-93e0-163b883ef8c4', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('b5307670-82e8-4fd5-a855-9df6056f9e26', '3', 'S', '81e29ac3-ca8b-42ec-8f03-fbaeae5351e0', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('c5edbac3-7086-48fc-8acc-79540b02fd15', '3', 'S', '0c3011f3-34e7-4a22-8b30-5812da3acbb1', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('ed636cfb-3974-467d-b02c-023e73dde6fc', '1', 'Xám', '81e29ac3-ca8b-42ec-8f03-fbaeae5351e0', NULL, NULL);
            INSERT INTO `attribute_products` VALUES ('f448f50a-ca79-485c-99e4-ab5dd16ab56c', '1', 'Đen Trắng', '3a998220-e3f5-49a8-97c7-904807c5c713', NULL, NULL);
            EOD
        );
        

    }
}
