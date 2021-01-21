<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportsmenModel extends Model
{
    use HasFactory;

    protected $table='sportsmen'; 
    protected $primaryKey='sportsmen_id'; 
    
    public $timestamps=false;

    protected $fillable = [
        'sportsmen_id','sportsmen_name', 'birthday','sex','country_id','sport_type_id'
    ];
}
