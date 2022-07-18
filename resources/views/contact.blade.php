@extends('base')

@section('link_css')
	@if ( config('app.locale') == 'fr' )
		<link rel="stylesheet" type="text/css" href="/css/contact.css">
	@else 
		<link rel="stylesheet" type="text/css" href="/css/contact1.css">
	@endif

@endsection
@section('titel')
	laravel 
@endsection

@section('content')
	<!--Section: Contact v.2-->
	<section class="mb-4">

	    <!--Section heading-->
	    <h2 class="h1-rsesponsive font-weight-bold text-center my-4"> {{ __('contact.header') }} </h2>
	    <!--Section description-->
	    <div class="row">

	        <!--Grid column-->
	        <div class="col-md-9 mb-md-0 mb-5">
	            <form id="contact-form" name="contact-form"  method="POST">

	                <!--Grid row-->
	                <div class="row">

	                    <!--Grid column-->
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
	                        	<label for="name" class="">{{ __('contact.nom') }}</label>
	                            <input type="text" id="name" name="name" class="form-control" required>  
	                        </div>
	                    </div>
	                    <!--Grid column-->

	                    <!--Grid column-->
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
	                        	<label for="email" class="">{{ __('contact.email') }}</label>
	                            <input type="text" id="email" name="email" class="form-control" required>
	                        </div>
	                    </div>
	                    <!--Grid column-->

	                </div><br>
	                <!--Grid row-->

	                <!--Grid row-->
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="md-form mb-0">
	                        	<label for="subject" class="">{{ __('contact.obj') }}</label>
	                            <input type="text" id="subject" name="subject" class="form-control" required> 
	                        </div>
	                    </div>
	                </div><br>
	                <!--Grid row-->

	                <!--Grid row-->
	                <div class="row">

	                    <!--Grid column-->
	                    <div class="col-md-12">

	                        <div class="md-form">
	                            <label for="message">{{ __('contact.meg') }}</label>
	                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
	                        </div>

	                    </div>
	                </div><br><br><br>
	                <!--Grid row-->
	                <input type="submit" class="form-control " value="{{ __('contact.sub') }}" name="sub" >

	            </form><br><br>

	            
	        </div>
	    </div>

	</section>
	<!--Section: Contact v.2-->
	<div class="map">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2573.522589268316!2d-9.225954290077924!3d32.30314263141032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac20daaae04eb5%3A0x58add758fb70a2f4!2sLPEE%20Laboratoire%20Regional%20de%20Safi!5e0!3m2!1sfr!2sma!4v1656416193151!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection 