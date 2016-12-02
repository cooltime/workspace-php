<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/test', function () {
    $servers = DB::table('server_info')->simplePaginate(15);
    return $servers;
//    return 'Hello World';
});
Route::match(['get', 'post'], '/test/server/{server}', function (Cooltime\Models\ServerInfo $server) {
    return json_encode($server);
});

Route::resource('res', 'ResController');

Route::match(['get', 'post'], '/test1', 'Controller@test1');
Route::match(['get', 'post'], '/redis', 'Controller@redis');
Route::match(['get', 'post'], '/cache', 'Controller@cache');
