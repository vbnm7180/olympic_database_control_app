<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use App\Models\CompetitionModel;
use App\Models\CountryModel;
use App\Models\ResultModel;
use App\Models\SportsGroundModel;
use App\Models\SportsmenModel;
use App\Models\SportTypeModel;

class CRUDController extends Controller
{
    public function Select(Request $request)
    {
        $table = $request->input('table');
        switch ($table) {
            case 'competition':
                $res = CompetitionModel::select('select * from competition');
                Log::info($res);
                return view('crud')->with('res', $res);
                break;
            case 'country':
                $res = CountryModel::select('select * from country');
                return view('crud')->with('res', $res);
                break;
            case 'result':
                $res = ResultModel::select('select * from result');
                return view('crud')->with('res', $res);
                break;
            case 'sportsmen':
                $res = SportsmenModel::select('select * from sportsmen');
                return view('crud')->with('res', $res);
                break;
            case 'sports_ground':
                $res = SportsGroundModel::select('select * from sports_ground');
                return view('crud')->with('res', $res);
                break;
            case 'sport_type':
                $res = SportTypeModel::select('select * from sport_type');
                return view('crud')->with('res', $res);
                break;
        }
    }
}
