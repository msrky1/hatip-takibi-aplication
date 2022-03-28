<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>SVG Türkiye Haritası</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
    <!-- SVG Türkiye Haritası -->
    <link href="{{asset('assets')}}/css/svg-turkiye-haritasi.css" rel="stylesheet" />
  </head>
  <body>
   

                 {{$slot}}
    <!-- SVG Türkiye Haritası -->
    <script src="{{asset('assets')}}/js/svg-turkiye-haritasi.js"></script>
    <script>
      svgturkiyeharitasi();
    </script>
  </body>
</html>
