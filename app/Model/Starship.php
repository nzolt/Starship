<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Starship extends Model
{
    use SoftDeletes;

    protected $table = 'starship';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $connection = 'mysql';
    protected $fillable = [
        'name',
        'class',
        'crew',
        'image',
        'value',
        'status',
    ];

    public function armaments()
    {
        return $this->belongsToMany(ArmamentStarship::class, 'armament_starships');
    }

    public function __toArray()
    {
        /*foreach ($this->armaments() as $armament){
            $this->armamentSet[]['title'] = $armament->name;
            $this->armamentSet[]['qty'] = $armament->quantity;
        }*/
        $armaments = ArmamentStarship::where('ship_id', '=', $this->id)->get();
        foreach ($armaments as $armament){
            $shipArmament[] = [
                'name' => $armament->shipArmament->name,
                'qty' => $armament->quantity
            ];
        }

        // TODO: Add DTO and call for transform to expected array
        return [
            'id' => $this->id,
            'name' => $this->name,
            'class' => $this->class,
            'crew' => $this->crew,
            'image' => $this->image,
            'value' => $this->value,
            'status' => $this->status,
            'armament' => $shipArmament,
        ]; // Return Starship data array
    }
}
