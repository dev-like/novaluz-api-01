<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CController extends Controller
{
    function index(): View
    {
        return view('welcome');
    }

    function dd()
    {
        $prods = DB::table('produtosweb')->get();
        dd($prods);
    }

    function return()
    {
        $prods = DB::table('produtosweb')->get();
        return $prods;
        // return mb_convert_encoding($prods, 'ISO-8859-1', 'UTF-8');
        // return mb_convert_encoding($prods, 'UTF-8', 'UTF-8');
        // return mb_convert_encoding($prods, "UTF-8", "auto");
        // return mb_convert_encoding($prods, "auto", "UTF-8");
        // return response()->json(mb_convert_encoding($prods, "ISO-8859-1", "UTF-8"));

    }
}
