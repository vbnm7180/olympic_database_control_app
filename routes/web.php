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
/*
Route::get('/', function(){
    $res = DB::select('select * from competition');
    return view('crud')->with('res', $res);
});
*/

Route::get('/', function(){
    $res = DB::select('select * from competition');
    return view('crud',['res'=> $res,'table'=>1]);
});


Route::get('/select/{table}', [ CRUDController::class, 'select']);

Route::get('/delete/{table}-{string}', [ CRUDController::class, 'delete']);

Route::get('/change/{table}-{string}', function (){
    return view ('update');
});
