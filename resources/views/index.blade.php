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
        <form action="search" method="get">
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
        <div class="card" id="desc">
            <blockquote class="blockquote">
                <p><svg class="bi" width="24" height="24"><use xlink:href="#info"></use></svg>
                    Tips: ယခုစာမျက်နှာသည် မိမိသိလိုသော လိပ်စာကို ရှာဖွေနိုင်သော စာမျက်နှာဖြစ်သည်။ ပထမဦးစွာ မိမိရှာချင်သော လိပ်စာမှ မြို့နယ်ကိုရွေးချယ်ပါ။ ထို့နောက် မိမိရှာလိုသောလမ်းနာမည်ကို ရွေးချယ်ပါ။ နောက်ဆုံးတွင် အိမ်နံပါတ်ကိုသာရိုက်ထည့်ပါ။(ဥပမာ -555)။ ထိုအခါ ထိုအချက်အလက်နှင့်ပက်သက်သော Data အသေးစိတ်ကိုပြပေးပါမည်။ ထို Data အသေးစိတ်ကို မြေပုံတွင်လဲတိုက်ရိုက်ကြည့်ရှုနိုင်ပါတယ်ခင်ဗျာ။</p>
            </blockquote>
        </div>

        <br>

    </div>
    <div class="col-12">
        <figure class="text-center">
            <blockquote class="blockquote">
              <h2><u>Testimonail</u></h2>
            </blockquote>
        </figure>
    </div>
    <div class="col-12">
        <div class="card">
            <iframe src="https://www.youtube.com/embed/yozQbYw-IAg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" class="card-img-top"></iframe>
            <div class="card-body">
              <h5 class="card-title"><svg class="bi" width="24" height="24"><use xlink:href="#people1"></use></svg>
                San Win Aung <span> | Graphic Designer </span>
              </h5>
              <p class="card-text">It helps me. I can find my address.Thanks.</p>
            </div>
        </div>
        <br>
        <div class="card">
            <iframe src="https://www.youtube.com/embed/yozQbYw-IAg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" class="card-img-top"></iframe>
            <div class="card-body">
              <h5 class="card-title"><svg class="bi" width="24" height="24"><use xlink:href="#people2"></use></svg>
                Htet Aung Shane <span> | Web Developer </span>
              </h5>
              <p class="card-text">I found my address. It is ok. Nice program.</p>
            </div>
        </div>
        <br>
        <div class="card">
            <iframe src="https://www.youtube.com/embed/CHUiC8Gui4s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" class="card-img-top"></iframe>
            <div class="card-body">
              <h5 class="card-title"><svg class="bi" width="24" height="24"><use xlink:href="#people3"></use></svg>
                Phyo Ko Ko San <span> | Internet User </span>
              </h5>
              <p class="card-text">I am searching an address. It is found with my phone, but not with my laptop.</p>
            </div>
        </div>
        <br>
        <div class="card">
            <iframe src="https://www.youtube.com/embed/FgF_n-oW1XA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" class="card-img-top"></iframe>
            <div class="card-body">
              <h5 class="card-title"><svg class="bi" width="24" height="24"><use xlink:href="#people1"></use></svg>
                Kalyar Oo <span> | Map Expert </span>
              </h5>
              <p class="card-text">I am searching my house number and it is not found.</p>
            </div>
        </div>
    </div>
</div>
@endsection
