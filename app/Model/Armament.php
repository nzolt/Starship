<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Armament extends Model
{
    use SoftDeletes;

    protected $table = 'armaments';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $connection = 'mysql';
    protected $fillable = [
        'name',
    ];

    public function armamentStarship()
    {
        return $this->belongsToMany(ArmamentStarship::class, 'armament_starships');
    }
}
