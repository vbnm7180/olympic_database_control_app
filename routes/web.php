<?php

use App\Http\Controllers\CRUDController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    $res = DB::select('select * from competition');
    return view('select',['res'=> $res,'table'=>1]);
});

Route::get('/select/{table}', [ CRUDController::class, 'select']);

Route::get('/delete/{table}-{string}', [ CRUDController::class, 'delete']);

Route::get('/change/{table}-{string}', [ CRUDController::class, 'change']);

Route::get('/update/{table}-{string}', [ CRUDController::class, 'update']);

Route::get('/add/{table}', [ CRUDController::class, 'add']);

Route::get('/create/{table}', [ CRUDController::class, 'create']);

Route::get('/search', function(){
    return view('search',['table'=>1,'headers'=>['competition_id','competition_date','competition_time','sport_type_id','sports_ground_id']]);
});

Route::get('/search/{table}', [ SearchController::class, 'search']);

Route::get('/find/{table}', [ SearchController::class, 'find']);

Route::get('/requests', function(){return view('requests');});

Route::get('/request/{id}', [ RequestController::class, 'request']);
