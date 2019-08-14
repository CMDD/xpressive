@extends('layouts.web')
@section('content')
<section>
    <div class="caja-contact">
        <img class="img-slider" src="img/fondo_contact.jpg" alt="">
        <img class="img-slider-responsive" src="img/fondo_contact_responsive.jpg" alt="">
        <p class="plan">Plan your</p>
        <p class="party">Party</p>
        <p class="with-us">with us!</p>
    </div>
</section>
<section>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 ">
                <p class="contact-us">CONTACT US</p>
            </div>
            <div class=" col-sm-4 col-lg-4 caja-contact-info">
                <p class="email">Email</p>
                <p>designs.xpressive@gmail.com</p>
            </div>
            <div class=" col-sm-4 col-lg-4 ">
                <p class="email">Phone</p>
                <p>+1 (561) 906 9434</p>
            </div>
            <div class=" col-sm-4 col-lg-4">
                <p class="email">Hours</p>
                <p>Monday - Friday: 9:00 - 17:00 <br>
                    Saturday: 9:00 - 12:00 <br>
                    Sunday: Closed
                </p>
            </div>

        </div>
    </div>
</section>
<section id="seccion-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="form-title">We’d love to hear from you!</p>
                <p class="form-text">If you have any questions or need more information, please fill out the form below.</p>
            </div>
            <div class="col-md-6 caja-form">
                <div class="form-group">
                    <input type="text" class="form-input-contact" placeholder="Name *">
                </div>
                <div class="form-group">
                    <input type="text" class="form-input-contact" placeholder="E-mail*">
                </div>
                <div class="form-group">
                    <input type="text" class="form-input-contact" placeholder="Cell/Phone">
                </div>
            </div>
            <div class="col-md-6 caja-form  ">
                <div class="form-group">
                    <textarea name="name" class="form-textarea" rows="5" cols="80" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                    <button type="button" class="btn-send" name="button">SEND</button>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
@endsection
