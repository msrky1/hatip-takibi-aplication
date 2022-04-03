<div class="page-title-area py-lg-6 py-5 bg-image-pattern">
    <div class="container">
        <div class="page-title-wrapper text-center">
            <h1 class="text-white mb-2">{{ $country->name }}</h1>
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Cüzler</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="call-to-action-area py-lg-5 py-5 bg-image-pattern bg-primary">
    <div class="container">
        <div class="mb-4 text-center">
            <h2 class="h1 text-white">Almak İstediğiniz Cüzü Seçin</h2>
            <p class="text-white">ve Formu Eksiksiz Doldurun
            <h5 class="mb-3"> </h5>
            </p>
         
        </div>

    </div>
</div>
<!--  ====================== Service Area =============================  -->
<div class="service-area py-lg-8 py-6">
    <div class="container">
        <div class="row">




            @foreach ($country->getPerson ?? [] as $person)
                @if ($country->id == $person->country_id)
                    <div class="col-sm-6 col-lg-4">

                        <div class="service-item my-3">
                            <div class="service-wrapper m-0 bg-white">

                                <div class="service-image">
                                    <img src="{{ asset('assets/site') }}/images/tik.png" alt="title">
                                </div>
                                <div class="service-content mt-3">

                                    {{ $country->name }} İlinde
                                    <h5 class="mb-3"> {{ $person->part_id }}. Cüz </h5>
                                    <h2> Alındı! </h2>
                                    </h5>




                                </div>
                            </div>
                        </div>



                    </div>
                @endif
            @endforeach








            @foreach ($parts as $item)
                @if (in_Array($item->id, $delete))
                    @continue
                @endif

                @once
                    <div class="col-sm-6 col-lg-4">

                        <div class="service-item my-3">
                            <div class="service-wrapper m-0 bg-white">

                                <form class="call-to-action-form m-auto" action="{{ route('add.person') }}"
                                    enctype="multipart/form-data" method="POST">
                                    @csrf


                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" placeholder="Adınız Soyadınız"
                                            required> <br>
                                        <input type="text" class="form-control" name="email"
                                            placeholder="E-Mail Adresiniz" required>




                                    </div>


                                    <input type="hidden" name="country_id" value="{{ $country->id }}" required>
                                    <input type="hidden" name="country_name" value="{{ $country->name }}" required>

                                    <br>
                                    <button class="btn btn-success" type="submit">Seçtiğin Cüzleri Al</button>



                            </div>
                            @if (Session::has('getMessage'))
                                <div class="alert alert-danger">
                                    <strong>{{ Session::get('getMessage') }}</strong> <a style="color: red"
                                        href="{{ route('hatim.sorgula') }}"></a>
                                </div>
                            @endif
                            @if (Session::has('message'))
                            <div class="alert alert-success">
                                <strong>{{ Session::get('message') }}</strong> <a style="color: red"
                                    href="{{ route('hatim.sorgula') }}"> Şimdi Görüntüleyin!</a>
                            </div>
                        @endif
                        </div>
                    </div>
                @endonce
                <div class="col-sm-6 col-lg-4">

                    <div class="service-item my-3">
                        <div class="service-wrapper m-0 bg-white">

                            <div class="service-image">
                                <img src="{{ asset('assets/site') }}/images/news/kuran.png" alt="title">
                            </div>
                            <div class="service-content mt-3">
                                <h5 class="mb-3"> {{ $item->name }}
                                </h5>



                                <a data-bs-toggle="modal" data-bs-target="#service1" href="#" class="text-primary">
                                    Dikkat! <i class="fas fa-angle-right ms-2"></i><br>


                                </a>

                                <input type="checkbox" name="part_id[]" value="{{ $item->id }}">



                            </div>
                        </div>
                    </div>


                    <div class="service-modal modal fade" id="service1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Yükümlülük</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Cüz, kelimesi Arapçada "parça", "bölüm", "kısım" anlamına gelir. "Kur'an" ile
                                        ilgili bir
                                        terim olarak bu kelime, Kur'an'ın eşit uzunlukta bölümlere ayrılmış
                                        parçalarından birisini ifade eder.</p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach






        </div>


    </div>
</div>
</form>
