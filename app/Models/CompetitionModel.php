<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionModel extends Model
{
    use HasFactory;

    protected $table='competition'; 
    protected $primaryKey='competition_id'; 
    
    public $timestamps=false;

    protected $fillable = [
        'competition_date','competition_time','sport_type_id','sports_ground_id'
    ];

}
