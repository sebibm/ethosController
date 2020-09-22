<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EthosController extends Controller
{
    public function recibirEthos(Request $request){
        dd($request->all());
    }
}
