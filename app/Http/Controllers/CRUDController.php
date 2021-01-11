<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CompetitionModel;
use App\Models\CountryModel;
use App\Models\ResultModel;
use App\Models\SportsGroundModel;
use App\Models\SportsmenModel;
use App\Models\SportTypeModel;

class CRUDController extends Controller
{
    public function select($table)
    {
        switch ($table) {
            case '1':
                $res = DB::select('select * from competition');
                Log::info($res);
                return view('crud')->with('res', $res);
                break;
            case '2':
                $res = DB::select('select * from country');
                return view('crud')->with('res', $res);
                break;
            case '3':
                $res = DB::select('select * from result');
                return view('crud')->with('res', $res);
                break;
            case '4':
                $res = DB::select('select * from sportsmen');
                return view('crud')->with('res', $res);
                break;
            case '5':
                $res = DB::select('select * from sports_ground');
                return view('crud')->with('res', $res);
                break;
            case '6':
                $res = DB::select('select * from sport_type');
                return view('crud')->with('res', $res);
                break;
        }
    }
}
