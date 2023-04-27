<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function (Request $request) {
    $args = collect($request->except('_token'))->implode(' ');
    $directory = 'python3 ' . __DIR__ . '/../scripts/anu.py ' . $args;

    exec($directory, $output, $return_var);

    return view('welcome', [
        'output' => $output,
    ]);
});
