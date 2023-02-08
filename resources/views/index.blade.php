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
            <!-- autocomplete script -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
            <script type="text/javascript">
                var path = "{{ route('autocomplete') }}";

                $(document).on("change", '#township', function() {
                    //console.log(this.value);
                    $.get(path, {
                            option: $(this).val()
                        },
                        function(data) {
                            console.log(data);
                            var model = $('#street');
                            model.empty();
                            $.each(data, function(index, value) {
                                model.append("<option value='" + value.st_eng + "'>" + value.st_eng +
                                    "</option>");
                            });
                        }
                    );

                });
            </script>

            <form action="search" method="get">
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" id="township" name="township"
                                aria-label="Floating label select example">
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
                                <option value="Kawhmu">Kawhmu (ကော့မှုး) </option>
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
                            <select class="form-select" id="street" name="street"
                                aria-label="Floating label select example">
                                @foreach ($lane as $data)
                                    <option value="{{ $data->st_eng }}">{{ $data->st_eng }} ({{ $data->st_myn }}) </option>
                                @endforeach
                            </select>
                            <label for="street">Select Street</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="hno" name="hno" placeholder="eg. 55"
                                required>
                            <label for="hno">Type the house no. </label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-control">
                            <button type="submit" class="btn btn-outline-dark btn-lg">Search
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#search"></use>
                                </svg></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-12">
            <div class="card" id="desc">
                <blockquote class="blockquote">
                    <p><svg class="bi" width="24" height="24">
                            <use xlink:href="#info"></use>
                        </svg>
                        Tips: ယခုစာမျက်နှာသည် မိမိသိလိုသော လိပ်စာကို ရှာဖွေနိုင်သော စာမျက်နှာဖြစ်သည်။ ပထမဦးစွာ
                        မိမိရှာချင်သော လိပ်စာမှ မြို့နယ်ကိုရွေးချယ်ပါ။ ထို့နောက် မိမိရှာလိုသောလမ်းနာမည်ကို ရွေးချယ်ပါ။
                        နောက်ဆုံးတွင် အိမ်နံပါတ်ကိုသာရိုက်ထည့်ပါ။(ဥပမာ -555)။ ထိုအခါ ထိုအချက်အလက်နှင့်ပက်သက်သော Data
                        အသေးစိတ်ကိုပြပေးပါမည်။ ထို Data အသေးစိတ်ကို မြေပုံတွင်လဲတိုက်ရိုက်ကြည့်ရှုနိုင်ပါတယ်ခင်ဗျာ။</p>
                </blockquote>
            </div>

            <div class="card" id="desc">
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <h2>Business List</h2>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        BusinessList ရဲ့ Database ထဲတွင် Data ပေါင်း <cite title="Source Title">၄သောင်းခန့် ရှိပါသည်။</cite>
                    </figcaption>
                </figure>

                <form action="thanks" method="get">
                    <div class="row g-2">
                        <div class="col-md-8">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="bno" name="bno"
                                    placeholder="eg. 55" required>
                                <label for="hno">Type The Business Name. </label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-control">
                                <button type="submit" class="btn btn-outline-dark btn-lg">Search
                                    <svg class="bi" width="24" height="24">
                                        <use xlink:href="#search"></use>
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                </form><br>
                <div class="card-footer">
                    <blockquote class="blockquote">
                        <p><svg class="bi" width="24" height="24">
                                <use xlink:href="#info"></use>
                            </svg>
                            BusinessListဆိုသည်မှာ ရန်ကုန်မြို့ရှိ ဈေးဆိုင်များ၊စားသောက်ဆိုင်များ၊ဆေးဆိုင်များ အစရှိသော data
                            များကို တစ်စုတစည်းတည်းစုဆောင်းထားသော Database တစ်ခုဖြစ်ပါသည်။

                            လူကြီးမင်းတို့အနေနှင့် ရှာဖွေလိုသော လုပ်ငန်းများ၊စားသောက်ဆိုင်များ၊စေ◌ျးဆိုင်များ၊ဆေးဆိုင်များ
                            အစရှိသည်တို့၏ နာမည်ကို အောက်တွင်ရှိသော search bar တွင် ရိုက်ရှာလိုက်ရုံဖြင့် Database ထဲတွင်
                            ရှိပါက
                            မြို့နယ်၊ခရိုင်၊လမ်း၊Longitude၊Latitude အစရှိသည်တို့ကို ဖော်ပြပေးပါသည်။
                    </blockquote>
                </div>
            </div>

            <br>
            <!-- testimonial -->
            <div class="container my-5 py-5 shadow text-center slider-custom">
                <h2>What our app users say</h2>
                <p class="lead">Here is the review from our valuable users</p>
                <!-- carousel slider starts  -->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!-- under div contents 1 -->
                            <div class="items">
                                <img src="{{ asset('img/male_avater.jpg') }}" alt="Dyay Marketing" class="shadow">
                                <h4 class="mt-3">San Win Aung</h4>
                                <p class="lead">Graphic Designer</p>
                                <q class="mt-2">
                                    It helps me. I can find my address.Thanks.
                                </q>
                                <iframe src="https://www.youtube.com/embed/yozQbYw-IAg" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen="" class="card-img-top"></iframe>
                            </div>
                        </div>

                        <!-- under div contents 2 -->

                        <div class="carousel-item">
                            <div class="items">
                                <img src="{{ asset('img/male_avater.jpg') }}" alt="Dyay Marketing" class="shadow">
                                <h4 class="mt-3">Htet Aung Shane </h4>
                                <p class="lead">Web Devloper</p>
                                <q class="mt-2">
                                    I found my address. It is ok. Nice program.
                                </q>
                                <div class="card">
                                    <iframe src="https://www.youtube.com/embed/CHUiC8Gui4s" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen="" class="card-img-top"></iframe>
                                </div>
                            </div>
                        </div>

                        <!-- under div contents 3 -->

                        <div class="carousel-item">
                            <div class="items">
                                <img src="{{ asset('img/male_avater.jpg') }}" alt="Dyay Marketing" class="shadow">
                                <h4 class="mt-3">Phyo Ko Ko San</h4>
                                <p class="lead">Internet User </p>
                                <q class="mt-2">I am searching an address. It is found with my phone, but not with my
                                    laptop.

                                </q>
                                <div class="card">
                                    <iframe src="https://www.youtube.com/embed/FgF_n-oW1XA" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen="" class="card-img-top"></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="items">
                                <img src="{{ asset('img/female.png') }}" alt="Dyay Marketing" class="shadow">
                                <h4 class="mt-3"> Kalyar Oo </h4>
                                <p class="lead">Map Expert</p>
                                <q class="mt-2">
                                    I am searching my house number and it is not found.

                                </q>
                                <div class="card">
                                    <iframe src="https://www.youtube.com/embed/FgF_n-oW1XA" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen="" class="card-img-top"></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- carousel bottom indicators  -->
                    <div class="carousel-indicators mt-4">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-label="Slide 1" aria-current="true"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2" class=""></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3" class=""></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 3" class=""></button>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- End Testimonial -->
            <br>

        </div>
    </div>
@endsection
