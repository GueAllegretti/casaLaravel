@section('meta_keywords','elettricista matera, assistenza, manutenzione, impianti elettrici, impianti allarme, impianti di automazioni, impianti di rilevazione fumi, impianti di TVCC, antintrusione, impianti fotovoltaici, assistenza, impianti antincendio, cablaggio strutturato, manutenzione di impianti esistenti, impianti domotici')
@section('meta_description', 'Azienda con sede a Matera, professionisti in impianti elettrici, illuminotecnici e domotici. Installazione di impianti antincendio e videosorveglianza, pannelli fotovoltaici, automazioni civili e industriali')

<x-layout>
  <x-slot name="title">Impianti Elettrici Giovanni Casamassima</x-slot>

<!-- Banner start-->
<div id="carouselExampleCaptions" class="carousel slide mt-2" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/banner-5.jpg" class="d-block w-100 img-fluid" alt="impianto domotico">
      <div class="carousel-caption">
        <h2>Illuminazione e Domotica</h2>
        <a href="{{route('service')}}" class="btn btn-green py-md-3 px-md-5 me-3 animate__animated animate__slideInLeft">Scopri di più</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/banner-6.jpg" class="d-block w-100 img-fluid" alt="cancello elettrico">
      <div class="carousel-caption">
        <h2>Automazione</h2>
        <a href="{{route('service')}}" class="btn btn-green py-md-3 px-md-5 me-3 animate__animated animate__slideInLeft">Scopri di più</a>
      </div>
    </div>
    <div class="carousel-item h-100">
      <img src="/img/banner-5.jpg" class="d-block w-100 img-fluid" alt="pannelli fotovoltaici">
      <div class="carousel-caption">
        <h2>Impianti Fotovoltaici</h2>
        <a href="{{route('service')}}" class="btn btn-green py-md-3 px-md-5 me-3 animate__animated animate__slideInLeft">Scopri di più</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Banner end-->

<!-- Facts Start -->
<section id="servizi">
  <div class="container-xxl py-5">
    <div class="container servizi text-lg-start text-center">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay="0.1s">
                <div class="h-100 p-4 p-xl-5 cg-bg-primary">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="btn-square rounded-circle" style="width: 64px; height: 64px; background: #000000;">
                            <img class="img-fluid" src="img/icon/icon-3.png" alt="impianti civili">
                        </div>
                        <h1 class="display-1 mb-0" id="customerActive" style="color: #000000;">0</h1>
                    </div>
                    <h5 class="text-white">Impianti Civili</h5>
                    <hr class="w-25 mx-auto mx-lg-0">
                    <span>Impianti elettrici, domotici e tecnologici in abitazioni e attività commerciali, dalla progettazione alla realizzazione.</span>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay="0.3s">
                <div class="h-100 p-4 p-xl-5 cg-bg-primary">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="btn-square rounded-circle" style="width: 64px; height: 64px; background: #000000;">
                            <img class="img-fluid" src="img/icon/icon-4.png" alt="impianti industriali">
                        </div>
                        <h1 class="display-1 mb-0" id="insertedAnn" style="color: #000000;">0</h1>
                    </div>
                    <h5 class="text-white">Impianti industriali</h5>
                    <hr class="w-25 mx-auto mx-lg-0">
                    <span>Cablaggi, impianti fotovoltaici e impianti per l'automazione industriale, dalla messa in opera al collaudo e certificazione.</span>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay="0.5s">
                <div class="h-100 p-4 p-xl-5 cg-bg-primary">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="btn-square rounded-circle" style="width: 64px; height: 64px; background: #000000;">
                            <img class="img-fluid" src="img/icon/icon-2.png" alt="assistenza e manutenzione">
                        </div>
                        <h1 class="display-1 mb-0" id="completedAnn" style="color: #000000;">0</h1>
                    </div>
                    <h5 class="text-white">Assistenza e Manutenzione</h5>
                    <hr class="w-25 mx-auto mx-lg-0">
                    <span>Assistenza in fase di progettazione e realizzazione di nuovi impianti elettrici, manuntenzione su impianti tecnologici e domotici esistenti.</span>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
<!-- Facts Start -->

    <!-- About Start -->
<section class="cg-bg-primary-light pt-5 pb-5 about" id="About">
    <div class="container-fluid overflow-hidden my-5 px-lg-0 about" id="About">
      <div class="container about px-lg-0">
          <div class="row g-0 mx-lg-0">
              <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                  <div class="position-relative h-100">
                      <img class="position-absolute img-fluid w-100 h-100" src="./img/about-2.jpg" style="object-fit: contain;" alt="azienda">
                  </div>
              </div>
              <div class="col-lg-6 about-text py-5">
                  <div class="p-lg-5 pe-lg-0">
                    <div class="cg-text mb-3 mx-auto mx-lg-0" style="width: 60px; height: 2px;"></div>
                      <h1 class="display-5 mb-4 text-lg-start text-center">Su di noi</h1>
                        <p class="mb-4 pb-2 text-lg-start text-center">Siamo fermamente convinti che, per la riuscita di un lavoro, la soddisfazione del cliente sia fondamentale. È per questo che ogni giorno lavoriamo ponendo al primo posto le necessità dei nostri clienti, consigliandogli le migliori soluzioni.
                        </p>
                      <div class="row g-4 mb-4 pb-3">
                          <div class="col-sm-6">
                              <div class="d-flex align-items-center justify-content-center">
                                  <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                      <img class="img-fluid" src="img/icon/icon-1.png" alt="Icon">
                                  </div>
                                  <div class="ms-4">
                                      <h2 class="mb-1" id="customer" data-toggle="counter-up">0</h2>
                                      <p class="fw-medium mb-0">Clienti soddisfatti</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="d-flex align-items-center justify-content-center">
                                  <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                      <img class="img-fluid" src="img/icon/icon-5.png" alt="Icon">
                                  </div>
                                  <div class="ms-4">
                                      <h2 class="mb-1" id="work" data-toggle="counter-up">0</h2>
                                      <p class="fw-medium mb-0">Lavori completati</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="{{route('about')}}"><button class="masthead-btn-dark">Scopri di più</button></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

  <!-- categorie cg -->
<section class="cg-bg-primary pt-5 pb-5" id="Categories"> 
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col-12 text-center">
        <div class="cg-text mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
        <h2 class="display-5 mb-3">SERVIZI</h2>
        <p>
          Qualunque siano le tue esigenze, grazie alla nostra prepazione e competenza, 
          <br>
          siamo in grado di realizzare il tuo progetto in ogni sua parte.
        </p>
      </div>
    </div>
    <div class="row mb-5">
      <div id="firstWrapperCategories" class="col-12 col-lg-4">
        
      </div>
      <div id="secondWrapperCategories" class="col-12 col-lg-4">
        
      </div>
      <div id="thirdWrapperCategories" class="col-12 col-lg-4">
        
      </div>
    </div>
  </div>
</section>
  
<!-- Feature Start -->
<div class="container d-none d-lg-block cg-bg-primary-light overflow-hidden my-5 px-lg-0 d-none d-lg-block">
  <div class="container feature px-lg-0">
      <div class="row g-0 mx-lg-0">
        <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
          <div class="position-relative h-100">
              <img class="position-absolute img-fluid w-100 h-100 p-5" src="img/feature.jpg" style="object-fit: cover;" alt="progettazione">
          </div>
        </div>
          <div class="col-lg-6 feature-text py-5">
              <div class="p-lg-5 ps-lg-0">
                  <div class="cg-text mb-3" style="width: 60px; height: 2px;"></div>
                  <h1 class="display-5 mb-5">Perchè scegliere noi</h1>
                  <p class="mb-4 pb-2">Seguiamo i nostri clienti dalla fase di progettazione fino alla realizzazione degli impianti. 
                  <br>  
                  Utiliziamo solo prodotti di alta qualità destinati a durare nel tempo. </p>
                  <a href="{{route('service')}}"><button class="masthead-btn-dark">Scopri di più</button></a>
              </div>
          </div>
      </div>
  </div>
</div>
  <!-- Feature End -->

  <!-- section contatti -->
<section id="contatti">
  <div class="container-xxl py-5">
    <div class="container text-lg-start text-center">
        <div class="row g-4">
            <div class="col-md-6 col-lg-6">
                <div class="h-100 p-4 p-xl-5 cg-bg-primary">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <i class="fa-solid fa-location-dot fa-3x cg-icone-secondary"></i>
                    </div>
                    <h5 class="text-white">CONTATTACI</h5>
                    <hr class="w-25 mx-auto">
                  <span>Contattaci per preventivo, sopralluogo, progettazione e assistenza</span>
                    <div class="row g-4 mb-2 pb-2 mt-2">
                      <div class="col-sm-6">
                          <div class="d-flex align-items-center justify-content-center">
                              <div>
                                  <a href="tel:+393801814128" class="fw-medium mb-0 link-cg"><i class="fa-solid fa-phone me-0 fa-2x me-xl-2 mb-3 mb-xl-0 me-2 cg-icone-secondary"></i>+39 3801814128</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="d-flex align-items-center justify-content-center">
                              <div>
                                <a href="mailto:info@cgimpiantielettrici.it?subject=Richiesta informazioni" class="fw-medium mb-0 link-cg"><i class="fa-regular fa-envelope fa-2x me-0 me-xl-2 mb-3 mb-xl-0 me-2 cg-icone-secondary"></i>info@cgimpiantielettrici.it</a>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="container-fluid">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.451471165273!2d16.57916881509729!3d40.68605354713998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13477f310b1a61c3%3A0x69588aed6f7fa828!2sCasamassima%20Giovanni%20Impianti%20Elettrici!5e0!3m2!1sit!2sit!4v1665084147207!5m2!1sit!2sit" width="100%" height="355" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

 <!-- annunci importati cg -->
 <section class="section-glide cg-bg-primary-light py-5">
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col-12">
        <div class="">
          <div class="cg-text mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
          <h2 class="display-5 mb-3">I NOSTRI LAVORI</h2>
        </div>
      </div>
      <div class="col-12">
        <div class="glide">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
             
            </ul>
            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left cg-glide-control" data-glide-dir="<"><i class="fas fa-chevron-left fa-2x"></i></button>
              <button class="glide__arrow glide__arrow--right cg-glide-control" data-glide-dir=">"><i class="fas fa-chevron-right fa-2x"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="/js/counter.js"></script>
  </x-layout>