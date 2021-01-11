<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportsGroundModel extends Model
{
    use HasFactory;

    protected $table='sports_ground'; 
    protected $primaryKey='sports_ground_id'; 
    
    public $timestamps=false;

    protected $fillable = [
        'sports_ground_name', 'sports_ground_address','sport_type_id'
    ];

}
