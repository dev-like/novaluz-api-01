<?php

namespace App\Http\Controllers;

use App\Models\Product;
// use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CController extends Controller
{
    function index(): View
    {
        return view('welcome');
    }

    function dd()
    {
        try {
            $prods = Product::all();
            // $prods = DB::table('produtosweb')->get();
            // $string = strtr(rtrim(base64_encode(pack('H*', sprintf('%u', CRC32($prods[0]->foto))))));
            $string = base64_encode($prods[0]->foto);
            echo '<img src="data:image/jpg;base64,' . $string . '" />';
            dd($prods);
        } catch (\Throwable $th) {
            //throw $th;
            echo $th;
        }
    }
}
