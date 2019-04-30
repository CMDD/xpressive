@extends('layouts.web')
@section('content')

<!-- Slider -->
<section>
  <div class="swiper-container">
    <div class="swiper-wrapper ">
      <div class="swiper-slide">
        <div class="contenedor">
        <img class="img-slider"  src="img/slider1.jpg" alt="">
        <img class="img-slider-responsive"  src="img/uno_responsive.jpg" alt="">
        <p class="xpressive-designs">xpressive designs</p>
        <p class="we-create" >We create exquisite things!</p>
        <button type="button" name="button">VIEW OUR SWEETS & PARTIES</button>
        </div>
      </div>
      <div class="swiper-slide">
        <img class="img-slider"  src="img/slider1.jpg" alt="">
        <img class="img-slider-responsive"  src="img/uno_responsive.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <img class="img-slider"  src="img/slider1.jpg" alt="">
        <img class="img-slider-responsive"  src="img/uno_responsive.jpg" alt="">
      </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
<!-- End Slider -->

<!-- Seccion 2 -->
<section id="seccion2">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-6">
      <img class="fondo_seccion2" src="img/fondo_seccion2.jpg" alt="">
      <img class="img_seccion2" src="img/img_seccion2.png" alt="">
    </div>
    <div class="col-md-6 text-center">
      <img class="logo2" src="img/logo.png" alt="">
      <p class="titulo_seccion2">ABOUT US</p>
      <p class="parrafo_seccion2" >Thank you for stopping by! I’m Ximena the mother, baker, designer, horse and dog lover and so much more. I’m an Interior Designer with a hobby that started with cake pops for my daughters parties and one day BOOM it blossomed into a full-blown business that keeps me really busy. From creating cakes and sweets to decorating kids parties and everything in between. Everything I do is just a stress release and I love the happy little faces when they see their cakes and decor for their special day.

When I’m not in the kitchen you will find me spending endless hours watching my daughter ice skate or with my family on a cruise or vacationing somewhere exciting.
      </p>
    </div>
    </div>
  </div>
</section>
<!-- End Seccion 2 -->

<!-- Seccion 3 -->
<section id="seccion3">
  <img class="fondo_seccion3" src="img/fondo_seccion3.jpg" alt="">
  <p class="titulo-seccion3" >WHAT MAKES OUR CAKES SO</p>
  <p class="especial" >special</p>
  <p class="parrafo-seccion3" >Being an Interior Designer gives me the ability to apply color theory, balance and design to everything I create and keeping all this within budget.
  </p>
</section>
<!-- End Seccion 3 -->

<!-- Seccion 4 -->
<section id="seccion4" >
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-4">
    <img class="fondo_seccion4" src="img/fondo_seccion4.png" alt="">
    <p class="titulo-seccion4" >View Ours</p>
    <p class="delicious" >Delicious</p>
    <p class="products">Products</p>
    </div>
    <div class="col-md-8">
      <carrousel-component></carrousel-component>
    </div>
    </div>
  </div>
</section>
<!-- End Seccion 4 -->
@include('layouts.footer')
@endsection
