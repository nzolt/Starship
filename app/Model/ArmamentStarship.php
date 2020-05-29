<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArmamentStarship extends Model
{
    use SoftDeletes;

    protected $table = 'armament_starships';
    public $timestamps = true;
    protected $connection = 'mysql';
    protected $fillable = [
        'ship_id',
        'armament_id',
    ];

    public function shipArmament()
    {
        return $this->belongsTo(Armament::class, 'armament_id', 'id');
    }

    /**
     * Save the relation if both keys [ShipId and ArmamentId] are set
     *
     * @param array $options
     * @return bool
     * @throws \Exception
     */
    public function save(array $options = [])
    {
        if(!$this->ship_id || !$this->armamment_id){
            throw new \Exception(); // TODO: Define own Exception and handle in ArmamentController@add
        }
        return parent::save($options);
    }
}
