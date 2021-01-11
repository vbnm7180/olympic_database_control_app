<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportTypeModel extends Model
{
    use HasFactory;

    protected $table='sport_type'; 
    protected $primaryKey='sport_type_id'; 
    
    public $timestamps=false;

    protected $fillable = [
        'sport_name', 'sport_category'
    ];
}
