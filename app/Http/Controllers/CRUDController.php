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
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class CRUDController extends Controller
{
    public function select($table)
    {
        switch ($table) {
            case '1':
                $res = DB::select('select * from competition');
                session()->put('current_table',$res);
                /*
                $res = array_map(function ($val) {
                    return (array)$val;
                }, $res);
                Log::info($res);
                */
                return view('crud',['res'=> $res,'table'=>$table]);
                break;
            case '2':
                $res = DB::select('select * from country');
                session()->put('current_table',$res);
                /*
                $res = array_map(function ($val) {
                    return (array)$val;
                }, $res);
                */
                return view('crud',['res'=> $res,'table'=>$table]);
                break;
            case '3':
                $res = DB::select('select * from result');
                session()->put('current_table',$res);
                return view('crud',['res'=> $res,'table'=>$table]);
                break;
            case '4':
                $res = DB::select('select * from sportsmen');
                session()->put('current_table',$res);
                return view('crud',['res'=> $res,'table'=>$table]);
                break;
            case '5':
                $res = DB::select('select * from sports_ground');
                session()->put('current_table',$res);
                return view('crud',['res'=> $res,'table'=>$table]);
                break;
            case '6':
                $res = DB::select('select * from sport_type');
                session()->put('current_table',$res);
                //var_dump(session()->get('current_table'));
                return view('crud',['res'=> $res,'table'=>$table]);
                break;
        }
    }

    public function delete($table,$string){
        switch ($table) {
            case '1':
                DB::delete('delete from competition where competition_id='.$string );
                return back();
                break;
            case '2':
                DB::delete('delete from country where country_id='.$string);
                return back();
                break;
            case '3':
                DB::delete('delete from result where result_id='.$string);
                return back();
                break;
            case '4':
                DB::delete('delete from sportsmen where sportsmen_id='.$string);
                return back();
                break;
            case '5':
                DB::delete('delete from sports_ground where sports_ground_id='.$string);
                return back();
                break;
            case '6':
                DB::delete('delete from sport_type where sport_type_id='.$string);
                return back();
                break;
        }
        
    }

    public function update($table,$string, Request $request){

        Log::info($request);
        switch ($table) {
            case '1':
                DB::update('update competition set competition_date=?,competition_time=?,sport_type_id=?,sports_ground_id=? where competition_id=?',[$request->input('competition_date'),$request->input('competition_time'),$request->input('sport_type_id'),$request->input('sports_ground_id'),$request->input('competition_id')]);
                break;
            case '2':
                DB::update('update country set country_name=? where country_id=?',[$request->input('country_name'),$request->input('country_id')]);
                break;
            case '3':
                DB::update('update result set result=?,position=?,competition_id=?,sportsmen_id=? where result_id=?',[$request->input('result'),$request->input('position'),$request->input('competition_id'),$request->input('sportsmen_id'),$request->input('result_id')]);
                break;
            case '4':
                DB::update('update sportsmen set sportsmen_name=?,birthday=?, sex=?,country_id=?,sport_type_id=? where sportsmen_id=?',[$request->input('sportsmen_name'),$request->input('birthday'),$request->input('sex'),$request->input('country_id'),$request->input('sport_type_id'),$request->input('sportsmen_id')]);
                break;
            case '5':
                DB::update('update sports_ground set sports_ground_name=?,sports_ground_address=?,sport_type_id=? where sports_ground_id=?',[$request->input('sports_ground_name'),$request->input('sports_ground_address'),$request->input('sport_type_id'),$request->input('sports_ground_id')]);
                break;
            case '6':
                DB::update('update sport_type set sport_name= ?, sport_category=? where sport_type_id=?',[$request->input('sport_name'),$request->input('sport_category'),$request->input('sport_type_id')]);
                break;
        }

    }

    public function change($table,$string){
        return view('update')->with('table',$table)->with('string',$string);

    }
}
