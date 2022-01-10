<?php

    namespace Database\Seeders;

    use Api\Locations\Models\Location;
    use Illuminate\Database\Seeder;

    class LocationsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $data = json_decode(file_get_contents(base_path('config/Locations/db.json')),true);
            $arrayProvince = $data['province'];
            $arrayDistrict = $data['district'];
            $arrayCommune = $data['commune'];
            $i = 1;
            $array = [];
            $array1 = [];
            $array2 = [];
            $array3 = [];
            $array4 = [];
            foreach ($arrayProvince as $province) {
                $array1[] = [
                    'id' => $i,
                    'name' => $province['name'],
                    'type' => 1,
                    'code' => $province['idProvince'],
                ];
                $array[$province['idProvince']] = $i;
                $i++;
            }
            \DB::table('locations')->insert($array1);
            foreach ($arrayDistrict as $district) {
                $parentId = $array[$district['idProvince']];
                $array2[] = [
                    'id' => $i,
                    'name' => $district['name'],
                    'type' => 2,
                    'code' => $district['idDistrict'],
                    'parent_id' => $parentId,
                ];
                $array3[$district['idDistrict']] = $i;
                $i++;
            }
            \DB::table('locations')->insert($array2);
            foreach ($arrayCommune as $commune) {
                $parentId = $array3[$commune['idDistrict']];
                $array4[] = [
                    'id' => $i,
                    'name' => $commune['name'],
                    'type' => 3,
                    'code' => $commune['idCommune'],
                    'parent_id' => $parentId,
                ];
                $i++;
            }
            foreach (array_chunk($array4, 3000) as $item){
                \DB::table('locations')->insert($item);
            }
        }
    }
