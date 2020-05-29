<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StarshipSeeder extends Seeder
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
        "name": "Devastator",
        "class": "Star Destroyer",
        "crew": 35000,
        "image": "url.to.image",
        "value": 1999.99,
        "status": "operational",
        "armament": [
            {
                "title": "Turbo Laser",
                "qty": "60"
            },
            {
                "title": "Ion Cannons",
                "qty": "20"
            },
            {
                "title": "Tractor Beam",
                "qty": "10"
            }
        ]
    },
    {
        "id": 2,
        "name": "EF76 Nebulon-B escort frigate",
        "class": "Eclipse",
        "crew": 8000,
        "image": "url.to.image",
        "value": 78000.00,
        "status": "operational",
        "armament": [
            {
                "title": "Turbo Laser",
                "qty": "120"
            },
            {
                "title": "Tractor Beam",
                "qty": "20"
            }
        ]
    },
    {
        "id": 3,
        "name": "Calamari Cruiser",
        "class": "Nebula",
        "crew": 5400,
        "image": "url.to.image",
        "value": 96000.00,
        "status": "operational",
        "armament": [
            {
                "title": "Turbo Laser",
                "qty": "120"
            },
            {
                "title": "HR-0C Slingshot slug railgun",
                "qty": "16"
            },
            {
                "title": "Ion Cannons",
                "qty": "60"
            }
        ]
    },
    {
        "id": 4,
        "name": "Trade Federation cruiser",
        "class": "Unknown",
        "crew": 4800,
        "image": "url.to.image",
        "value": 85000.00,
        "status": "operational",
        "armament": [
            {
                "title": "Turbo Laser",
                "qty": "120"
            },
            {
                "title": "Ax-108 blaster cannon",
                "qty": "24"
            }
        ]
    },
    {
        "id": 5,
        "name": "Republic attack cruiser",
        "class": "Senator",
        "crew": 6200,
        "image": "url.to.image",
        "value": 115000.00,
        "status": "operational",
        "armament": [
            {
                "title": "Turbo Laser",
                "qty": "160"
            },
            {
                "title": "Ax-108 blaster cannon",
                "qty": "20"
            },
            {
                "title": "AIon Cannons",
                "qty": "14"
            }
        ]
    },
    {
        "id": 6,
        "name": "Republic attack cruiser",
        "class": "Resurgent",
        "crew": 5600,
        "image": "url.to.image",
        "value": 130000.00,
        "status": "operational",
        "armament": [
            {
                "title": "Turbo Laser",
                "qty": "160"
            },
            {
                "title": "Ax-108 blaster cannon",
                "qty": "20"
            },
            {
                "title": "HR-0C Slingshot slug railgun",
                "qty": "40"
            }
        ]
    }
]
        ';

        $dataArray = json_decode($jsonData);
        foreach ($dataArray as $data){
            DB::table('starship')->insert([
                'id' => $data->id,
                'name' => $data->name,
                'class' => $data->class,
                'crew' => $data->crew,
                'image' => $data->image,
                'value' => $data->value,
                'status' => $data->status,
            ]);
        }
    }
}
