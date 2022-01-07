<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Api\Locations\Models\Locations;
use File;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Locations::truncate();
        $data = json_decode(file_get_contents(base_path('database/data/db.json')),true);
            $arrayProvince = $data['province'];
            $arrayDistrict = $data['district'];
            $arrayCommune = $data['commune'];
            $array = [];
            $array1 = [];
            $array2 = [];
            $array3 = [];
            $array4 = [];
            foreach ($arrayProvince as $province) {
                $array1[] = [
                    'name' => $province['name'],
                    'code' => $province['idProvince'],
                ];
                
            }
            \DB::table('locations')->insert($array1);
            foreach ($arrayDistrict as $district) {
                // $parentId = $array[$district['idProvince']];
                $array2[] = [
                    'name' => $district['name'],
                    'code' => $district['idDistrict'],
                    'parent_code' => $district['idProvince'],
                ];
                
            }
            \DB::table('locations')->insert($array2);
            foreach ($arrayCommune as $commune) {
                // $parentId = $array3[$commune['idDistrict']];
                $array4[] = [
                    'name' => $commune['name'],
                    'code' => $commune['idCommune'],
                    'parent_code' => $commune['idDistrict'],
                ];
            }
            foreach (array_chunk($array4, 3000) as $item){
                \DB::table('locations')->insert($item);
            }
  
        
        // // $json = File::get("database/data/db.json");
        // // $locations = json_decode($json);

        // // if($locations->province){
        // //     foreach($locations->province as $value){
        // //         Locations::create([
        // //             "code" => $value->idProvince,
        // //             "name" => $value->name
        // //         ]);
        // //     }
        // // }if($locations->district){
        // //     foreach($locations->district as $value){
        // //         Locations::create([
        // //             "code" => $value->idDistrict,
        // //             "name" => $value->name,
        // //             "parent_code" => $value->idProvince
        // //         ]);
        // //     }
        // // }
        // if($locations->commune){
        //     // dd(array_chunk($locations->commune, 3000));
        //     foreach(array_chunk($locations->commune, 3000) as $value){
        //         dd($value['idCommune']);
        //         Locations::create([
        //             "code" => $value->idCommune,
        //             "name" => $value->name,
        //             "parent_code" => $value->idDistrict
        //         ]);
        //     }
        // }


    }
}
