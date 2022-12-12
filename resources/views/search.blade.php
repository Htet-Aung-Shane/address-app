@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-12">
        <br>
        <figure class="text-center">
            <blockquote class="blockquote">
              <h2>Select The Township, Select The street</h2>
            </blockquote>
            <figcaption class="blockquote-footer">
              Type the house number, <cite title="Source Title">and click search</cite>
            </figcaption>
        </figure>
        <form method="get">
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <select class="form-select" id="township" name="township" aria-label="Floating label select example">
                            <option value="Thaketa">Thaketa (သာကေတ) </option>
                            <option value="Insein">Insein (အင်းစိန်) </option>
                            <option value="Bahan">Bahan (ဗဟန်း) </option>
                            <option value="Botahtaung">Botahtaung(ဗိုလ်တထောင်)</option>
                            <option value="Dagon Myothit East"> Dagon Myothit East (ဒဂုံမြို့သစ်အရှေ့ပိုင်း) </option>
                            <option value="Dagon Myothit North">Dagon Myothit North (ဒဂုံမြို့သစ်မြောက်ပိုင်း) </option>
                            <option value="Kyauktada">Kyauktada (ကျောက်တံတား) </option>
                            <option value="Dawbon">Dawbon (ဒေါပုံ)</option>
                            <option value="Kamaryut">Kamaryut (ကမာရွတ်) </option>
                            <option value="Kyeemyindaing">Kyeemyindaing (ကြည့်မြင်တိုင်) </option>
                            <option value="Lanmadaw">Lanmadaw (လမ်းမတော်) </option>
                            <option value="Latha">Latha (လသာ) </option>
                            <option value="Mayangone">Mayangone (မရမ်းကုန်း) </option>
                            <option value="Mingaladon">Mingaladon (မင်္ဂလာဒုံ) </option>
                            <option value="Mingalar Taung Nyunt">Mingalar Taung Nyunt (မင်္ဂလာတောင်ညွန့်) </option>
                            <option value="North Okkalapa">North Okkalapa (မြောက်ဥက္ကလာပ) </option>
                            <option value="Pabedan">Pabedan (ပန်းဘဲတန်း) </option>
                            <option value="Pazundaung">Pazundaung (ပုဇွန်တောင်) </option>
                            <option value="Shwepyithar">Shwepyithar (ရွှေပြည်သာ) </option>
                            <option value="Seikgyikanaungto">Seikgyikanaungto (ဆိပ်ကြီးခနောင်တို)</option>
                            <option value="Sanchaung">Sanchaung (စမ်းချောင်း)</option>
                            <option value="Dagon Myothit Seikkan">Dagon Myothit Seikkan (ဒဂုံမြို့သစ်ဆိပ်ကမ်း) </option>
                            <option value="Dagon Myothit South">Dagon Myothit South(ဒဂုံမြို့သစ်တောင်ပိုင်း) </option>
                            <option value="Dagon">Dagon (ဒဂုံ) </option>
                            <option value="Dala">Dala(ဒလ) </option>
                            <option value="Hlaing Thar Yar">Hlaing Thar Yar(လှိုင်သာယာ)</option>
                            <option value="Hlaing">Hlaing ( လှိုင်) </option>
                            <option value="Thingangyun">Thingangyun (သင်္ဃန်းကျွန်း) </option>
                            <option value="Thongwa">Thongwa (သုံးခွ) </option>
                            <option value="Yankin">Yankin (ရန်ကင်း) </option>
                            <option value="Kawhum">Kawhmu (ကော့မှုး) </option>
                            <option value="Kayan"> Kayan (ခရမ်း) </option>
                            <option value="Kungyangon"> Kungyangon (ကွမ်းခြံကုန်း) </option>
                            <option value="Kyauktan">Kyauktan (ကျောက်တန်း) </option>
                            <option value="South Okkalapa">South Okkalapa (တောင်ဥက္ကလာပ) </option>
                            <option value="Tarmwe">Tarmwe (တာမွေ) </option>
                            <option value="Thanlyin">Thanlyin (သန်လျင်) </option>
                            <option value="Twantay">Twantay (တွံ့တေး) </option>
                        </select>
                        <label for="township">Select Township</label>
                      </div>
                </div>
                <div class="col-md">
                  <div class="form-floating">
                    <select class="form-select" id="street" name="street" aria-label="Floating label select example">
                        @foreach ($thaketa->Thaketa as $data)
                            <option value="{{ $data->st_eng }}">{{ $data->st_eng }} ({{ $data->st_myn }}) </option>
                        @endforeach
                    </select>
                    <label for="street">Select Street</label>
                  </div>
                </div>

                <div class="col-md">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="hno" name="hno" placeholder="eg. 55" required>
                      <label for="hno">Type the house no. </label>
                    </div>
                </div>

                  <div class="col-md">
                    <div class="form-control">
                        <button type="submit" class="btn btn-outline-dark btn-lg">Search
                            <svg class="bi" width="24" height="24"><use xlink:href="#search"></use></svg></button>
                    </div>
                  </div>
              </div>
        </form>
    </div>

    <div class="col-12">
        @if($info['similar'] ?? '')
            <div class="card" id="desc">
                <blockquote class="blockquote">
                    <p><svg class="bi" width="24" height="24"><use xlink:href="#info"></use></svg>
                    ဝမ်းနည်းပါတယ်။ မိတ်ဆွေရှာဖွေနေသာ လိပ်စာအချက်အလက်ကို ရှာမတွေ့ပါ။ ရှာဖွေနေသော မြို့နယ်နှင့်လမ်း အနီးတွင်ရှိသော လိပ်စာများကို အောက်တွင်ဖော်ပြလိုက်ပါသည်။<u> View Detail </u> ခလုတ်ကိုနှိပ်ကာ ထို လိပ်စာကို ကြည့်ရှူနိုင်ပါသည်။
                    </p>
                </blockquote>
            </div>
        @else
            <div class="card" id="desc">
                <blockquote class="blockquote">
                    <p><svg class="bi" width="24" height="24"><use xlink:href="#info"></use></svg>
                        လူကြီးမင်း ရှာဖွေနေသော လိပ်စာအချက်အလက်ကို တွေ့ရှိပါသည်။ <u> မြေပုံတွင်ကြည့်ရန် </u> ခလုတ်လေးကိုနှိပ်ကာ ထိုလိပ်စာကို မြေပုံတွင်ကြည့်ရှုနိုင်ပါသည်။</p>
                </blockquote>
            </div>
        @endif
    </div>
    <div class="col-12">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th> House No (အိမ်နံပါတ်) </th>
                <th> Street No(လမ်းနံပါတ်) </th>
                <th> Township(မြို့နယ်) </th>
                <th> Districtt(ခရိုင်) </th>
                <th> Click Here (နှိပ်ပါ) </th>
              </tr>
            </thead>
            <tbody>
            @foreach ($result as $r_data )

            @if($info['similar'] ?? '')
                @php
                    $url = '/search?township='.$r_data->Tsp_N_Eng.'&street='.$info['street'].'&hno='.$r_data->HN_Eng;
                @endphp

                <tr>
                    <th>{{ $r_data->HN_Eng}}( {{ $r_data->HN_Myn }} )</th>
                    <th> {{$info['street']}} </th>
                    <th>{{ $r_data->Tsp_N_Eng}}( {{ $r_data->Tsp_N_Myn }} )</th>
                    <th>{{ $r_data->Dist_N_Eng}}( {{ $r_data->Dist_N_Myn }} )</th>
                    <td> <button type="button" class="btn btn-light"><a href='{{$url}}'>
                            View Detail </a>
                            <svg class="bi" width="24" height="24"><use xlink:href="#arrow"></use></svg>
                        </button>
                    </td>
                </tr>
            @else
                @php
                    $url = 'https://www.google.com/maps/search/'.$r_data->Longitude.'E,'.$r_data->Latitude.'N';
                @endphp

                <tr>
                    <th>{{ $r_data->HN_Eng}}( {{ $r_data->HN_Myn }} )</th>
                    <th> {{$info['street']}} </th>
                    <th>{{ $r_data->Tsp_N_Eng}}( {{ $r_data->Tsp_N_Myn }} )</th>
                    <th>{{ $r_data->Dist_N_Eng}}( {{ $r_data->Dist_N_Myn }} )</th>
                    <td> <button type="button" class="btn btn-light"><a href='{{$url}}' target="_blank">
                        မြေပုံတွင် ကြည့်ရန် </a>
                        <svg class="bi" width="24" height="24"><use xlink:href="#arrow"></use></svg>
                        </button>
                    </td>
                </tr>
            @break
            @endif
            @endforeach
            </tbody>
        </table>

    </div>

</div>
@endsection
