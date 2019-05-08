@extends('layouts.web')
@section('content')
<section>
  <div class="caja-fondo-gallery">
    <img class="img-slider"  src="img/gallery/fondo_gallery.jpg" alt="">
    <img class="img-slider-responsive"  src="img/gallery/fondo_gallery_responsive.jpg" alt="">
    <p class="we">We</p>
    <p class="sweeten">sweeten</p>
    <p class="moments">yours moments</p>
  </div>
</section>

<section>
  <div class="container-fluid">

      <gallery-component></gallery-component>

  </div>
</section>

@include('layouts.footer')
@endsection
