<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArmamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonData = '
        [
    {
        "id": 1,
        "title": "Turbo Laser"
    },
    {
        "id": 2,
        "title": "Tractor Beam"
    },
    {
        "id": 3,
        "title": "HR-0C Slingshot slug railgun"
    },
    {
        "id": 4,
        "title": "Ax-108 blaster cannon"
    },
    {
        "id": 5,
        "title": "AIon Cannons"
    }
]
        ';

        $dataArray = json_decode($jsonData);
        foreach ($dataArray as $data){
            DB::table('armaments')->insert([
                'id' => $data->id,
                'name' => $data->title,
            ]);
        }
    }
}
