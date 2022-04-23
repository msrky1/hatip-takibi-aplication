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



                @if (Session::has('flash-message'))
                    <div class="alert alert-danger">
                        <strong>{{ Session::get('flash-message') }}</strong> <a style="color: red"
                            href="{{ route('hatim.sorgula') }}"> Şimdi Görüntüleyin!</a>
                    </div>
                @endif
                @if (Session::has('getHatimMessage'))
                    <div class="alert alert-danger">
                        <strong>{{ Session::get('getHatimMessage') }}</strong>
                    </div>
                @endif
        </div>

    </div>

</div>
<!--  ====================== Service Area =============================  -->

<div class="service-area py-lg-8 py-6">
    <div class="container">
        <div class="row">
            <div class="service-item my-3">
                <div class="service-wrapper bg-white">
                    <div class="service-icon">
                        <img src="{{ asset('assets/site') }}/images/service-icon.png" alt="title">
                    </div>
                    <div class="service-content mt-4">
                        <h4 class="mb-3">{{ $country->name }}
                            </h5>

                            <ul class="entry-tags list-inline">
                                <li class="list-inline-item">

                                <li class="list-inline-item">

                                    @if (count($delete) == 3)
                                        <a href="#"> {{ count($delete) }}/30 Tamamlandı! </a>
                                    
                                       
                                    @else
                                        <a href="#">Alınan Cüz: {{ count($delete) }} </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Kalan: {{ count($parts) - count($delete) }} </a>
                                </li>
                                @endif

                           




                            </ul>

                            <a href="/" class="text-primary">Anasayfa <i class="fas fa-angle-right ms-2"></i></a>
                    </div>
                </div>
            </div>


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
                                  
                                    @if (count($delete) >= 30)
                            
                            
                            
                                
                                    {{   $person->delete();}}

                               

   
                             <script>
                                    setTimeout(function(){
                                        window.location.reload(1);
                                     }, 2);
                             </script>
                                   
                              @endif
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




                                </a>
                                <form class="call-to-action-form m-auto" action="{{ route('add.person') }} "
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

                                    <a data-bs-toggle="modal" data-bs-target="#service1" href="#" class="text-primary">
                                        <button class="btn btn-success" type="submit">Seçtiğim Cüzleri Al</button> <i
                                            class="fas fa-angle-right ms-2"></i><br>



                            </div>
                            <div class="service-modal modal fade" id="service2">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Yükümlülük</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p style="color: red;">"Hatmi aldığınızda okuyacağınız kabul edilmiş olacak ve
                                                Hatim Geri iade edilemeyecektir. Sorumluluğu sizlere aittir." </p>


                                        </div>

                                    </div>
                                </div>
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






                                </a>

                                <input type="checkbox" name="part_id[]" value="{{ $item->id }}">

                                
                            </div>
                            <h5 class="mb-3">
                            @if (count($delete) == 29)
                                      
                                       <h5 style="color:red;"> Son Cüzü Alarak  Hatimi<br></h5> <h4 style="color:green;"> Tamamlayabilirsin </h4>                                  
                                @endif
                            </h5>
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
                                    <p style="color: red;">"Cüzü aldığınızda okuyacağınız kabul edilmiş olacak ve cüz
                                        geri
                                        iade edilemeyecektir. Sorumluluğu sizlere aittir." </p>

                                    <button onclick="clickMe()" class="btn btn-success" type="submit">Seçtiğim Cüzleri
                                        Al</button>
                                </div>
                             

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            </form>



            @once
                <div class="col-sm-6 col-lg-4">


                    <div class="service-item my-3">
                        <div class="service-wrapper m-0 bg-white">

                            <div class="service-image">
                                <img src="{{ asset('assets/site') }}/images/hatim.jpg" alt="title">
                            </div>
                            <div class="service-content mt-3">
                                <h5 class="mb-3">
                                    Bütün Hatim Alın
                                </h5>






                                </a>
                                <form class="call-to-action-form m-auto" action="{{ route('hatim.al.toplu') }}"
                                    enctype="multipart/form-data" method="POST">
                                    @csrf


                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" placeholder="Adınız Soyadınız"
                                            required> <br>
                                        <input type="text" class="form-control" name="email"
                                            placeholder="E-Mail Adresiniz" required>


                                    </div>


                                    <input type="hidden" name="country_id" value="{{ $country->id }}" required>


                                    <br>



                                    <button class="btn btn-success" type="submit">Hatim Al</button>


                            </div>
                        </div>
                    </div>

                    <div class="service-modal modal fade" id="service24">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Yükümlülük</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p style="color: red;">"Hatmi aldığınızda okuyacağınız kabul edilmiş olacak ve
                                        Hatim Geri iade edilemeyecektir. Sorumluluğu sizlere aittir." </p>



                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            @endonce

        </div>

    </div>
</div>
<script>
    const clickMe = () => {
        setTimeout(function(){
   window.location.reload(1);
}, 3000);
    }


 
</script>