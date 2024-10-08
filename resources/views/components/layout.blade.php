<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="@yield('meta_keywords','Elettricista, impianti elettrici, antintrusione, impianti domotici, antincendio, tvcc, videosorveglianza, cancelli, serrande elettriche, automazione, fotovoltaico, videocitofoni')">
    <meta name="description" content="@yield('meta_description','Realizzazione di impianti domotici di ogni tipo, in ambienti pubblici e privati. Realizzazione di impianti di sicurezza quali antincendio, antintrusione, videosorveglianza, automazione')">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="{{asset('css/app.css')}}">

<title>{{isset($title) ? $title:'Impianti Elettrici Giovanni Casamassima'}}</title>


</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-89EX06WJ5L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-89EX06WJ5L');
</script>

<body>
<x-nav/>
<div class="icon-bar">
    <a href="https://www.facebook.com/profile.php?id=100063644015165" class="facebook secondary-icone-social d-flex justify-content-center align-items-center" style="outline: none"><i class="fab fa-facebook-f"></i></a>
    {{-- <a href="tel:+393801814128" target="blank" class="secondary-icone-social text-center d-flex justify-content-center align-items-center"><i class="fa-solid fa-phone"></i></a> --}}
    <a href="http://api.whatsapp.com/send?phone=+393801814128&text=Buonasera, vorrei avere maggiori informazioni" target="blank" class="secondary-icone-social text-center d-flex justify-content-center align-items-center"><i class="fa-brands fa-whatsapp"></i></a>
    <a href="mailto:info@cgimpiantielettrici.it?subject=Richiesta informazioni" class="mail secondary-icone-social d-flex justify-content-center align-items-center"><i class="fa-regular fa-envelope"></i></a>
</div>


    {{$slot}}
    @include('cookie-consent::index')
     
     <x-footer/>
    <!-- Glide.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js"
    integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- JavaScript -->
    <script src="{{asset('js/app.js')}}"></script>

  </body>
  </html>