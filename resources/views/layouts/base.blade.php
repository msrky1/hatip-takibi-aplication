<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title> WEB HATİM UYGULAMASI </title>
    <!-- SVG Türkiye Haritası -->
    <link href="{{asset('assets')}}/css/svg-turkiye-haritasi.css" rel="stylesheet" />
    <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Uygulama</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{asset('assets/site')}}/images/favicon.png" type="images/x-icon">

  
  <!-- gulp:css -->
  <link rel="stylesheet" href="{{asset('assets/site')}}/css/app.min.css">
  @livewireStyles
  </head>
  <body>
   
    <div class="preloader">
      <div class="lds-preloader">
        <div></div>
        <div></div>
        <div></div>   
        <div></div>
      </div> 
    </div>
    <header class="header-area">
      <div class="header-top bg-light bg-image-pattern px-xl-8 py-2">
        <div class="container">
          <div class="header-top-wrapper">
            <ul class="navbar-address list-inline m-0">
              <li class="list-inline-item"><span class="icon"><img src="{{asset('assets/site')}}/images/location-icon.svg" alt="title"></span>İstanbul - TÜRKİYE</li>
              <li class="list-inline-item"><span class="icon"><img src="{{asset('assets/site')}}/images/phone-icon.svg" alt="title"></span> ------
              </li>
            </ul>
            <ul class="navbar-social list-inline m-0">
              <li class="list-inline-item"><a href="/"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="/"><i class="fab fa-instagram"></i></a></li>
          
            </ul>
          </div>
        </div>
      </div>
      <div class="header-bottom bg-white px-xl-8">
        <nav class="container">
          <div class="header-navbar navbar navbar-expand-lg">
        <a class="navbar-brand" href="/"></a>  
            <div class="collapse navbar-collapse" id="navbar-menu">
              <nav class="navbar-meanmenu">
                <ul class="navbar-nav">
             
                  <li class="nav-item"> <a class="nav-link" href="/">ANASAYFA</a></li>
                  
                  <li class="nav-item"> <a class="nav-link" href="{{route('hatim.sorgula')}}">CÜZLERİNİ GÖRÜNTÜLE</a></li>
                 
                            
                 
                </ul>
              </nav>
          <!--    <ul class="navbar-nav align-items-center ms-auto">
                <li class="nav-item"> <a class="nav-link me-4" href="/">BAĞIŞ YAP</a></li>
              
              </ul> -->
            </div>
          </div>
        </nav>
      </div>
    </header>

                 {{$slot}}


                 
  <!--  ====================== Footer Area =============================  -->
  <footer class="footer-area">
    <div class="footer-top   bg-image-pattern  py-lg-8 py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-lg-4">
            <div class="footer-widget my-4 me-md-4">
            
              </p>
            </div>
          </div>
          <div class="col-md-7 col-lg-8">
            <div class="row">
              <div class="col-lg-3 col-6">
                <div class="footer-widget my-3">
                  <h4 class="mb-3 text-white">Sayfalar</h4>
                  <ul class="footer-list list-inline">
                
                    <li><a href="{{route('hatim.sorgula')}}">Cüzlerim</a></li>
                  </ul>
                </div>
              </div>
              
              
              <div class="col-lg-3 col-6">
                <div class="footer-widget my-3">
                 
                  <ul class="footer-social m-0 mt-4 list-inline" data-aos="slide-up">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom py-4 bg-secondary">
      <div class="container">
       <!-- <p class="text-center m-0 text-white">&copy;
          <span id="spanYear"></span> Mahmut Sarıkaya <i class="far fa-heart text-success"></i> by <a class="text-primary" href="index-3.htm">themeix</a>.
        </p> -->
      </div>
    </div>
  </footer>
    <!-- SVG Türkiye Haritası -->
  
    <script src="{{asset('assets')}}/js/svg-turkiye-haritasi.js"></script>
    <script>
      svgturkiyeharitasi();
    </script>


<script src="{{asset('assets/site')}}/js/build.min.js"></script>
<!-- endgulp -->
 

@livewireScripts
  </body>
</html>
