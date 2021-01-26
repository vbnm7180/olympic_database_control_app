<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function request($id)
    {

        switch ($id) {
            case '1':
                $res=DB::select('SELECT COUNT(result.position) AS \'Число медалей\', country.country_name FROM result JOIN sportsmen ON result.sportsmen_id=sportsmen.sportsmen_id JOIN country ON sportsmen.country_id=country.country_id WHERE result.position=1 or 2 or 3 GROUP BY country.country_id');
                break;
            case '2':
                $res=DB::select('SELECT sportsmen.sportsmen_name, sportsmen.birthday, sportsmen.sex, country.country_name, sport_type.sport_name,result.result,result.position FROM result JOIN sportsmen ON result.sportsmen_id=sportsmen.sportsmen_id JOIN country ON sportsmen.country_id=country.country_id JOIN sport_type ON sportsmen.sport_type_id=sport_type.sport_type_id ORDER BY sport_type.sport_type_id,result.position');
                break;
            case '3':
                $res= DB::select('SELECT AVG(DATEDIFF(CURRENT_DATE, sportsmen.birthday)/365) AS \'Средний возраст\', country.country_name FROM sportsmen JOIN country ON sportsmen.country_id=country.country_id GROUP BY country.country_id');
                break;
        }

        return view('request-results')->with('res',$res);

    }
}
