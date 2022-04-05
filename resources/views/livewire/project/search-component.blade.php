<main>
<div class="page-title-area py-lg-6 py-5 bg-image-pattern">
    <div class="container">
        <div class="page-title-wrapper text-center">
            <h1 class="text-white mb-2">Seçtiğiniz Cüzü Görün</h1>
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">



                </ol>
                <form class="call-to-action-form m-auto" method="GET">
                    @csrf


                    <div class="input-group">

                        <input type="email" class="form-control" name="search" wire:model.debounce.3000ms ="query"
                            placeholder="E-Mail Adresiniz" required> <br>
                           

                    </div>
                    
                </form>
            </nav>
        </div>
    </div>
</div>
<!--  ====================== About Area =============================  -->
<div class="service-area py-lg-8 py-6">
    <div class="container">
        <div class="row"> <h3> Hatimleriniz </h3>
            <div wire:loading>
                <img width= "250px" src="{{ asset('assets/site') }}/images/loading.gif" > 
            </div>
            
            @if (!empty($query))

                @if (!empty($persons))
                    @foreach ($persons as $item)
                        <div class="col-sm-6 col-lg-4">




                            <div class="service-item my-3">
                                <div class="service-wrapper m-0 bg-white">
                                    <div class="service-image">
                                        <img src="{{ asset('assets/site') }}/images/news/kuran.gif" alt="title">
                                    </div>
                                    <div class="service-content mt-3">
                                 <h4>        {{$item['country_name']}} iline Ait </h4>
                                        <h5 style="color: green"> {{ $item['part_id'] }}. Cüzü Okumaktasınız
                                        </h5>
                                           
                                     <p style="color: red">   Allah Kabul Etsin </p>
                                    
                                    <!--      <button class="btn btn-success" type="submit" > Tamamladım </button> -->
                                    </div>
                                </div>
                            </div>



                        </div>
                    @endforeach
                @else
                    <div class="col-sm-6 col-lg-4">




                        <div class="service-item my-3">
                            <div class="service-wrapper m-0 bg-white">
                               
                                Sonuç Bulunamadı
                           
                            </div>
                        </div>



                    </div>
                @endif
            @endif

        </div>

    </div>
</div>

</main>

