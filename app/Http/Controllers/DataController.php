<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function index(){

        //check session
        if (request()->session()->has('thaketa')) {
            //
            $thaketa=request()->session()->get('thaketa');
        }
        //if session not exits
        else{
            $thaketa=Storage::get('json/thaketa.json');
            $thaketa=json_decode($thaketa);
            session(['thaketa' => $thaketa]);
        }

        return view('index',[
            'thaketa' => $thaketa
        ]);
    }
}
