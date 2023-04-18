@section('meta_keywords','elettricista, assistenza, manutenzione, impianti elettrici, antintrusione, fotovoltaico, videosorveglianza, cancello elettrico, telecamere per interno e esterno, serrande, smart, domotico')
@section('meta_description', 'Realizzazione di impianti di automazioni, impianti di rilevazione fumi, impianti di TVCC e antintrusione, impianti fotovoltaici, assistenza e manutenzione di impianti esistenti')

<x-layout>
  <x-slot name="title">Servizi</x-slot>

  <div class="container-fluid page-header py-5">
    <div class="container py-5">
        <h1 class="display-3 text-light mb-3 mt-5 animate__animated animate__slideInDown">Servizi</h1>
        <nav aria-label="breadcrumb animate__animated animate__slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-light" href="/">Home</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Servizi</li>
            </ol>
        </nav>
    </div>
  </div>
  
 
 <div class="container-xxl py-5">
  <div class="container">
      <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
          <div class="cg-text mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
          <h1 class="display-5 mb-5">I nostri servizi</h1>
      </div>
      <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
        <h4 class="fw-lighter mb-5"><strong>Impianti Elettrici di Giovanni Casamassima</strong> è un'azienda di servizi a 360°, gestiamo la progettazione e la realizzazione di impianti su misura per soddisfare le esigenze dei nostri clienti</h4>
      </div>

      <div class="row g-4 portfolio-container">
        @foreach($services as $service)

        <x-card
          id="{{$service['id']}}"
          name="{{$service['name']}}"
          img="{{$service['img']}}"
        />

      @endforeach
      </div>
  </div>
</div>



</x-layout>