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

    public function autocomplete(Request $request){
        //return $request;
        switch ($request) {
            case 'South Okkalapa':
              return 'json/southoakalapa.json';
              break;
            case 'Hlaing Thar Yar':
              return 'json/hlaingtharyar.json';
              break;
            case 'Botahtaung':
              return 'json/botahtaung.json';
              break;
            case 'Thaketa':
              return 'json/thaketa.json';
              break;
            case 'Dawbon':
              return 'json/dawbon.json';
              break;
    
            case 'Bahan':
              return 'json/bahan.json';
              break;
    
            case 'Dagon Myothit East':
              return 'json/dagon_myothit_east.json';
              break;
    
            case 'Dagon Myothit North':
              return 'json/dagon_myothit_north.json';
              break;
    
            case 'Dagon Myothit South':
              return 'json/dagon_myothit_south.json';
              break;
    
            case 'Dagon Myothit Seikkan':
              return 'json/dagon_myothit_seikkan.json';
              break;
    
            case 'Tarmwe':
              return 'json/tarmwe.json';
              break;
    
            case 'Thingangyun':
              return 'json/thingangyun.json';
              break;
    
            case 'Yankin':
              return 'json/yankin.json';
              break;
    
            case 'Dagon':
              return 'json/dagon.json';
              break;
    
            case 'Dala':
              return 'json/dala.json';
              break;
    
            case 'Hlaing':
              return 'json/hlaing.json';
              break;
    
            case 'Insein':
              return 'json/insein.json';
              break;
    
            case 'Kamaryut':
              return 'json/kamaryut.json';
              break;
    
            case 'Kawhmu':
              return 'json/kawhmu.json';
              break;
    
            case ' Kayan':
              return 'json/kayan.json';
              break;
    
            case 'Kyauktan':
              return 'json/kyauktan.json';
              break;
    
            case 'Kyeemyindaing':
              return 'json/kyeemyindaing.json';
              break;
    
            case ' Kungyangon':
              return 'json/kungyangon.json';
              break;
    
            case 'Kyauktada':
              return 'json/kyauktada.json';
              break;
    
            case 'Lanmadaw':
              return 'json/lamadaw.json';
              break;
    
            case 'Latha':
              return 'json/latha.json';
              break;
    
            case 'Mayangone':
              return 'json/mayagone.json';
              break;
    
            case 'Mingaladon':
              return 'json/mingladon.json';
              break;
    
            case 'Mingalar Taung Nyunt':
              return 'json/mingalartaungnyunt.json';
              break;
    
            case 'North Okkalapa':
              return 'json/northoakalapa.json';
              break;
    
            case 'Pabedan':
              return 'json/pabedan.json';
              break;
    
            case 'Pazundaung':
              return 'json/pazundaung.json';
              break;
    
            case 'Shwepyithar':
              return 'json/shwepyithar.json';
              break;
    
            case 'Seikgyikanaungto':
              return 'json/seigyikanaungto.json';
              break;
    
            case 'Sanchaung':
              return 'json/sanchaung.json';
              break;
    
            case 'Thanlyin':
              return 'json/thanlyin.json';
              break;
    
            case 'Thongwa':
              return 'json/thongwa.json';
              break;
    
            case 'Twantay':
              return 'json/twantay.json';
              break;
    
            default:
              return null;
              break;
          }
        $data=Storage::get('json/thaketa.json');
        
        return $data;
    }
}
