<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    //
    public function search(){

        //check session
        if (request()->session()->has('lane')) {
            //
            $lane=request()->session()->get('lane');
        }
        else
            return redirect('/');

        //end of check session
        $township=request() -> township;
        $street=request() -> street;
        session(['street' => $street]);
        //return request()->session()->get('street');
        $hno=request() -> hno;
        $result=Http::get('https://api.dpsmap.com/api/?token=aLy1EiehhwJF7SJ10Hb1Vxx7&filter=hn&tsp='.$township.'&street='.$street.'&value='.$hno.'&similar=n');
        $result=json_decode($result);
        if($result->message=='Ok'){
            $info=[
                'township' => $township,
                'street' => $street,
                'hno'   => $hno
            ];
            $result=$result->data;
        }
        else{
            $result=Http::get('https://api.dpsmap.com/api/?token=aLy1EiehhwJF7SJ10Hb1Vxx7&filter=hn&tsp='.$township.'&street='.$street.'&similar=n');
            $result=json_decode($result);
            $info=[
                'township' => $township,
                'street' => $street,
                'hno'   => $hno,
                'similar' => 'yes'
            ];
            $result=$result->data;

        }
        return view('search',compact('result','lane','info'));



    }
}
