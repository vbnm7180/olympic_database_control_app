<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class CRUDController extends Controller
{
    //Выбор всех данных таблицы
    public function select($table)
    {
        switch ($table) {
            case '1':
                $res = DB::select('SELECT * FROM competition');
                return view('select', ['res' => $res, 'table' => $table]);
                break;
            case '2':
                $res = DB::select('SELECT * FROM country');
                return view('select', ['res' => $res, 'table' => $table]);
                break;
            case '3':
                $res = DB::select('SELECT * FROM result');
                return view('select', ['res' => $res, 'table' => $table]);
                break;
            case '4':
                $res = DB::select('SELECT * FROM sportsmen');
                return view('select', ['res' => $res, 'table' => $table]);
                break;
            case '5':
                $res = DB::select('SELECT * FROM sports_ground');
                return view('select', ['res' => $res, 'table' => $table]);
                break;
            case '6':
                $res = DB::select('SELECT * FROM sport_type');
                return view('select', ['res' => $res, 'table' => $table]);
                break;
        }
    }

    //Удаление строки из таблицы
    public function delete($table, $string)
    {
        switch ($table) {
            case '1':
                DB::delete('DELETE FROM competition WHERE competition_id=' . $string);
                return back();
                break;
            case '2':
                DB::delete('DELETE FROM country WHERE country_id=' . $string);
                return back();
                break;
            case '3':
                DB::delete('DELETE FROM result WHERE result_id=' . $string);
                return back();
                break;
            case '4':
                DB::delete('DELETE FROM sportsmen WHERE sportsmen_id=' . $string);
                return back();
                break;
            case '5':
                DB::delete('DELETE FROM sports_ground WHERE sports_ground_id=' . $string);
                return back();
                break;
            case '6':
                DB::delete('DELETE FROM sport_type WHERE sport_type_id=' . $string);
                return back();
                break;
        }
    }

    //Переход на форму изменения данных строки таблицы
    public function change($table, $string)
    {
        switch ($table) {
            case '1':
                $string = DB::select('SELECT * FROM competition WHERE competition_id=' . $string);
                break;
            case '2':
                $string = DB::select('SELECT * FROM country WHERE country_id=' . $string);
                break;
            case '3':
                $string = DB::select('SELECT * FROM result WHERE result_id=' . $string);
                break;
            case '4':
                $string = DB::select('SELECT * FROM sportsmen WHERE sportsmen_id=' . $string);
                break;
            case '5':
                $string = DB::select('SELECT * FROM sports_ground WHERE sports_ground_id=' . $string);
                break;
            case '6':
                $string = DB::select('SELECT * FROM sport_type WHERE sport_type_id=' . $string);
                break;
        }
        return view('update')->with('table', $table)->with('string', $string);
    }

    //Изменение данных строки таблицы
    public function update($table, $string, Request $request)
    {
        switch ($table) {
            case '1':
                DB::update('UPDATE competition SET competition_date=?,competition_time=?,sport_type_id=?,sports_ground_id=? WHERE competition_id=?', [$request->input('competition_date'), $request->input('competition_time'), $request->input('sport_type_id'), $request->input('sports_ground_id'), $request->input('competition_id')]);
                break;
            case '2':
                DB::update('UPDATE country SET country_name=? WHERE country_id=?', [$request->input('country_name'), $request->input('country_id')]);
                break;
            case '3':
                DB::update('UPDATE result SET result=?,position=?,competition_id=?,sportsmen_id=? WHERE result_id=?', [$request->input('result'), $request->input('position'), $request->input('competition_id'), $request->input('sportsmen_id'), $request->input('result_id')]);
                break;
            case '4':
                DB::update('UPDATE sportsmen SET sportsmen_name=?,birthday=?, sex=?,country_id=?,sport_type_id=? WHERE sportsmen_id=?', [$request->input('sportsmen_name'), $request->input('birthday'), $request->input('sex'), $request->input('country_id'), $request->input('sport_type_id'), $request->input('sportsmen_id')]);
                break;
            case '5':
                DB::update('UPDATE sports_ground SET sports_ground_name=?,sports_ground_address=?,sport_type_id=? WHERE sports_ground_id=?', [$request->input('sports_ground_name'), $request->input('sports_ground_address'), $request->input('sport_type_id'), $request->input('sports_ground_id')]);
                break;
            case '6':
                DB::update('UPDATE sport_type SET sport_name= ?, sport_category=? WHERE sport_type_id=?', [$request->input('sport_name'), $request->input('sport_category'), $request->input('sport_type_id')]);
                break;
        }
    }

    //Переход на форму добавления новой строки таблицы
    public function add($table)
    {
        switch ($table) {
            case '1':
                $headers = ['competition_id', 'competition_date', 'competition_time', 'sport_type_id', 'sports_ground_id'];
                break;
            case '2':
                $headers = ['country_id', 'country_name'];
                break;
            case '3':
                $headers = ['result_id', 'result', 'position', 'competition_id', 'sportsmen_id'];
                break;
            case '4':
                $headers = ['sportsmen_id', 'sportsmen_name', 'birthday', 'sex', 'country_id', 'sport_type_id'];
                break;
            case '5':
                $headers = ['sports_ground_id', 'sports_ground_name', 'sports_ground_address', 'sport_type_id'];
                break;
            case '6':
                $headers = ['sport_type_id', 'sport_name', 'sport_category'];
                break;
        }

        return view('create')->with('headers', $headers)->with('table', $table);
    }

    //Добавление новой строки в таблицу
    public function create($table, Request $request)
    {
        switch ($table) {
            case '1':
                DB::insert('INSERT INTO competition (competition_date,competition_time,sport_type_id,sports_ground_id) VALUES (?,?,?,?)', [$request->input('competition_date'), $request->input('competition_time'), $request->input('sport_type_id'), $request->input('sports_ground_id')]);
                break;
            case '2':
                DB::insert('INSERT INTO country (country_name) VALUES (?)', [$request->input('country_name')]);
                break;
            case '3':
                DB::insert('INSERT INTO result (result,position,competition_id,sportsmen_id) VALUES (?,?,?,?)', [$request->input('result'), $request->input('position'), $request->input('competition_id'), $request->input('sportsmen_id')]);
                break;
            case '4':
                DB::insert('INSERT INTO sportsmen (sportsmen_name,birthday, sex,country_id,sport_type_id) VALUES (?,?,?,?,?)', [$request->input('sportsmen_name'), $request->input('birthday'), $request->input('sex'), $request->input('country_id'), $request->input('sport_type_id')]);
                break;
            case '5':
                DB::insert('INSERT INTO sports_ground (sports_ground_name,sports_ground_address,sport_type_id) VALUES (?,?,?)', [$request->input('sports_ground_name'), $request->input('sports_ground_address'), $request->input('sport_type_id')]);
                break;
            case '6':
                DB::insert('INSERT INTO sport_type (sport_name, sport_category) VALUES (?,?)', [$request->input('sport_name'), $request->input('sport_category')]);
                break;
        }
    }
}
