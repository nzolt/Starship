<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArmamentStarshipSeeder extends Seeder
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
        "ship_id": 1,
        "armament_id": 1,
        "quantity": 60
    },
    {
        "ship_id": 1,
        "armament_id": 2,
        "quantity": 20
    },
    {
        "ship_id": 1,
        "armament_id": 5,
        "quantity": 10
    },
    {
        "ship_id": 2,
        "armament_id": 1,
        "quantity": 120
    },
    {
        "ship_id": 2,
        "armament_id": 2,
        "quantity": 20
    },
    {
        "ship_id": 3,
        "armament_id": 1,
        "quantity": 120
    },
    {
        "ship_id": 3,
        "armament_id": 3,
        "quantity": 16
    },
    {
        "ship_id": 3,
        "armament_id": 5,
        "quantity": 60
    },
    {
        "ship_id": 4,
        "armament_id": 1,
        "quantity": 120
    },
    {
        "ship_id": 4,
        "armament_id": 4,
        "quantity": 24
    },
    {
        "ship_id": 5,
        "armament_id": 1,
        "quantity": 160
    },
    {
        "ship_id": 5,
        "armament_id": 4,
        "quantity": 20
    },
    {
        "ship_id": 5,
        "armament_id": 5,
        "quantity": 14
    },
    {
        "ship_id": 6,
        "armament_id": 1,
        "quantity": 160
    },
    {
        "ship_id": 6,
        "armament_id": 3,
        "quantity": 20
    },
    {
        "ship_id": 6,
        "armament_id": 4,
        "quantity": 40
    }
]
        ';

        $dataArray = json_decode($jsonData);
        foreach ($dataArray as $data){
            DB::table('armament_starships')->insert([
                'ship_id' => $data->ship_id,
                'armament_id' => $data->armament_id,
                'quantity' => $data->quantity,
            ]);
        }
    }
}
