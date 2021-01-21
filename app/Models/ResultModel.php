<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultModel extends Model
{
    use HasFactory;

    protected $table='result'; 
    protected $primaryKey='result_id'; 
    
    public $timestamps=false;

    protected $fillable = [
        'result_id','result', 'position','competition_id','sportsmen_id'
    ];

}
