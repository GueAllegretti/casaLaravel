<nav class="navbar navbar-expand-lg navbar-dark fixed-top cg-navbar cg-navbar-scroll">
  <div class="container-fluid">
    <a class="navbar-brand tx-style logo-nav" href="{{route('index')}}">
      <img src="/img/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{(Route::currentRouteName() == 'index') ? 'active nav-color-active' : ''}}" href="{{route('index')}}" href="{{route('index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{(Route::currentRouteName() == 'about') ? 'active nav-color-active' : ''}}" href="{{route('about')}}">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{(Route::currentRouteName() == 'work') ? 'active nav-color-active' : ''}}" href="{{route('work')}}">Lavori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{(Route::currentRouteName() == 'service') ? 'active nav-color-active' : ''}}" href="{{route('service')}}">Servizi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>