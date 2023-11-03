<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $prods = DB::table('produtosweb')->get();
    dd($prods);
    // return view('welcome');
});
