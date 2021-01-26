<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search($table)
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

        return view('search')->with('headers', $headers)->with('table', $table);
    }

    public function find($table, Request $request)
    {
        switch ($table) {
            case '1':
                $table_name = 'competition';
                break;
            case '2':
                $table_name = 'country';
                break;
            case '3':
                $table_name = 'result';
                break;
            case '4':
                $table_name = 'sportsmen';
                break;
            case '5':
                $table_name = 'sports_ground';
                break;
            case '6':
                $table_name = 'sport_type';
                break;
        }

        $select = 'SELECT * from ' . $table_name . ' where';
        $loop = 0;

        foreach ($request->all() as $key => $value) {
            $loop++;
            if ($loop == 1) {
                $select = $select . ' ' . $key . '=\'' . $value . '\'';
            } else {
                $select = $select . ' and ' . $key . '=\'' . $value . '\'';
            }
        }

        Log::info($select);
        $res = DB::select($select);
        Log::info($res);

        $returnHTML = view('search-results', ['res' => $res, 'table' => $table])->render(); // or method that you prefere to return data + RENDER is the key here
        return response()->json(array('success' => true, 'html' => $returnHTML));
    }

}
