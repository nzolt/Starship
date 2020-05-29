<?php


namespace App\Resource;

use App\Model\Starship;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class StarshipResource
{
    /**
     * @param int $id
     * @return array
     */
    public static function getStarship(int $id): array
    {
        try{
            $starShip = Starship::findOrFail($id);
        } catch (ModelNotFoundException $e){
            return []; // If not found return empty array with 200
        }
        $starShip->__toArray();
        return $starShip->__toArray();
    }
}
