<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class DataController extends Controller
{
  //
  public function index()
  {

    //check session
    if (request()->session()->has('lane')) {
      //
      $lane = request()->session()->get('lane');
    }
    //if session not exits
    else {
      $lane = Storage::get('json/thaketa.json');
      $lane = json_decode($lane);
      session(['lane' => $lane]);
    }

    return view('index', [
      'lane' => $lane
    ]);
  }

  public function autocomplete(Request $request)
  {
    
    $option = $request->option;
    if ($option == 'Thaketa')
      $data = Storage::get('json/thaketa.json');
    elseif ($option == 'Insein')
      $data = Storage::get('json/insein.json');
    elseif ($option == 'Bahan')
      $data = Storage::get('json/bahan.json');
    elseif ($option == 'Botahtaung')
      $data = Storage::get('json/botahtaung.json');
    elseif ($option == 'Dagon Myothit East')
      $data = Storage::get('json/dagon_myothit_east.json');
    elseif ($option == 'Dagon Myothit North')
      $data = Storage::get('json/dagon_myothit_north.json');
    elseif ($option == 'Kyauktada')
      $data = Storage::get('json/kyauktada.json');
    elseif ($option == 'Dawbon')
      $data = Storage::get('json/dawbon.json');
    elseif ($option == 'Kamaryut')
      $data = Storage::get('json/kamaryut.json');
    elseif ($option == 'Kyeemyindaing')
      $data = Storage::get('json/kyeemyindaing.json');
    elseif ($option == 'Lanmadaw')
      $data = Storage::get('json/lamadaw.json');
    elseif ($option == 'Latha')
      $data = Storage::get('json/latha.json');
    elseif ($option == 'Mayangone')
      $data = Storage::get('json/mayagone.json');
    elseif ($option == 'Mingaladon')
      $data = Storage::get('json/mingladon.json');
    elseif ($option == 'Mingalar Taung Nyunt')
      $data = Storage::get('json/mingalartaungnyunt.json');
    elseif ($option == 'North Okkalapa')
      $data = Storage::get('json/northoakalapa.json');
    elseif ($option == 'Pabedan')
      $data = Storage::get('json/pabedan.json');
    elseif ($option == 'Pazundaung')
      $data = Storage::get('json/pazundaung.json');
    elseif ($option == 'Shwepyithar')
      $data = Storage::get('json/shwepyithar.json');
    elseif ($option == 'Seikgyikanaungto')
      $data = Storage::get('json/seigyikanaungto.json');
    elseif ($option == 'Sanchaung')
      $data = Storage::get('json/sanchaung.json');
    elseif ($option == 'Dagon Myothit Seikkan')
      $data = Storage::get('json/dagon_myothit_seikkan.json');
    elseif ($option == 'Dagon Myothit South')
      $data = Storage::get('json/dagon_myothit_south.json');
    elseif ($option == 'Dagon')
      $data = Storage::get('json/dagon.json');
    elseif ($option == 'Dala')
      $data = Storage::get('json/dala.json');
    elseif ($option == 'Hlaing Thar Yar')
      $data = Storage::get('json/hlaingtharyar.json');
    elseif ($option == 'Hlaing')
      $data = Storage::get('json/hlaing.json');
    elseif ($option == 'Thingangyun')
      $data = Storage::get('json/thingangyun.json');
    elseif ($option == 'Thongwa')
      $data = Storage::get('json/thongwa.json');
    elseif ($option == 'Yankin')
      $data = Storage::get('json/yankin.json');
    elseif ($option == 'Kawhmu')
      $data = Storage::get('json/kawhmu.json');
    elseif ($option == 'Kayan')
      $data = Storage::get('json/kayan.json');
    elseif ($option == 'Kungyangon')
      $data = Storage::get('json/kungyangon.json');
    elseif ($option == 'Kyauktan')
      $data = Storage::get('json/kyauktan.json');
    elseif ($option == 'South Okkalapa')
      $data = Storage::get('json/southoakalapa.json');
    elseif ($option == 'Tarmwe')
      $data = Storage::get('json/tarmwe.json');
    elseif ($option == 'Thanlyin')
      $data = Storage::get('json/thanlyin.json');
    elseif ($option == 'Twantay')
      $data = Storage::get('json/twantay.json');

    $data = json_decode($data);
    session(['township' => $option]);
    session(['lane' => $data]);
    return $data;
  }
}