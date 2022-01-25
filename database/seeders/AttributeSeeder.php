<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Module\Products\Models\Attribute;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attribute::truncate();
        DB::statement(
            <<<EOD
            INSERT INTO `attributes` VALUES ('1', 'Color', '2022-01-17 01:45:29', NULL);
            INSERT INTO `attributes` VALUES ('3', 'Size', '2022-01-17 01:46:00', NULL);
            EOD
        );
        

    }
}
