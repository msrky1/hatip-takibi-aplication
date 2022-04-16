<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title> GENÇLİK KURAN OKUYOR</title>
    <!-- SVG Türkiye Haritası -->
    <link href="{{ asset('assets') }}/css/svg-turkiye-haritasi.css" rel="stylesheet" />
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="Gençlik Kuran Okuyor Web Üzerinde Toplu Cüz Okuma Uygulaması">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/site') }}/images/favicon.png" type="images/x-icon">

    <meta name="google-site-verification" content="j6iNNZ8v8pBHjwhQP0BrcQK-Qi6zeuGisPoiChA1ovc" />
    <!-- gulp:css -->
    <link rel="stylesheet" href="{{ asset('assets/site') }}/css/app.min.css">
    @livewireStyles
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PGXQSLC');</script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6D85TXJ8X4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6D85TXJ8X4');
</script>

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGXQSLC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
                        <li class="list-inline-item"><span class="icon"><img
                                    src="{{ asset('assets/site') }}/images/location-icon.svg"
                                    alt="title"></span>İstanbul - TÜRKİYE</li>
                        <!-- <li class="list-inline-item"><span class="icon"><img src="{{ asset('assets/site') }}/images/phone-icon.svg" alt="title"></span> -->
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
                    <a class="navbar-brand" href="/"><img src="{{ asset('assets/site') }}/images/favicon.png"
                            alt="images"></a>
                    <div class="collapse navbar-collapse" id="navbar-menu">

                        <nav class="navbar-meanmenu">
                            <ul class="navbar-nav">

                                <li class="nav-item"> <a class="nav-link" href="/">GENÇLİK KURAN OKUYOR</a>
                                </li>


                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('hatim.sorgula') }}">CÜZLERİNİ GÖRÜNTÜLE</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="/yardim">NASIL KULLANILIR?</a></li>



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

    {{ $slot }}



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

                                        <li><a href="{{ route('hatim.sorgula') }}">Cüzlerim</a></li>
                                    </ul>
                                </div>
                            </div>


                            <div class="col-lg-3 col-6">
                                <div class="footer-widget my-3">

                                    <ul class="footer-social m-0 mt-4 list-inline" data-aos="slide-up">
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
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

    <script src="{{ asset('assets') }}/js/svg-turkiye-haritasi.js"></script>
    <script>
        svgturkiyeharitasi();
    </script>

@livewireScripts
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="{{ asset('assets/site') }}/js/build.min.js"></script>
    <!-- endgulp -->


 

</body>

</html>
