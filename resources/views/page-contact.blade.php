{{--
  Template Name: Programs
--}}

@extends('layouts.app')

@section('content') 
<div class="map-responsive">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.247680002671!2d-80.26158598476786!3d25.762381414859465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b775ee5829b1%3A0x45988dd690d5902a!2sVanguard+Children&#39;s+Academy!5e0!3m2!1sen!2sus!4v1508824685238" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="row mt-l--m">
	<div class="container">
		<div class="row">
			<div class="col m6">
				<div class="row">
					<h1 class="h2 serif">Contact Us</h1>
					<h4>We strive for excellence and leadership</h4>
				</div>
				<div class="row mt-l--s">
					<h4 class="serif tw-bold">Address</h4>
					<p class="tw-ultrabold">924 Ponce de Leon Blvd Coral Gables, FL 33134</p>
				</div>
				<div class="row mt-l--s">
					<h4 class="serif tw-bold">Phone Number</h4>
					<p class="tw-ultrabold">567-678-4590</p>
				</div>
			</div>
			<div class="col m6">
				<form id="contact_form">
					<fieldset id="contact_container"  class="row grey lighten-4 pa-m--s">
						<div class="row">
							<label class="tw-ultrabold grey-text text-darken-2 h4"> Full Name </label>
							<input type="text" name="contact_name" id="">
						</div>
						<div class="row">
							<label class="tw-ultrabold grey-text text-darken-2 h4"> Email </label>
							<input type="text" name="contact_email" id="">
						</div>
						<div class="row">
							<label class="tw-ultrabold grey-text text-darken-2 h4"> Body </label>
							
							<textarea style="height:100px;border: 1px solid #b6b6b6;" class="white" name="contact_body"></textarea>
						</div>
						<div class="row mt-m--s">
							<button id="contact_action" type="button" class="btn-large  white-text text-darken-3">
								    
								  <span id="contact_text">Contact Us </span>
							</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="hide">
	<div id="contact_success">
		<div class="center-align row pa-m--s grey lighten-3">
			<div class="row">
				<i class="material-icons green-text" style="font-size:7em;">check_circle</i>
			</div>
			<div class="row mt-m--s">
				<h3 class="tw-ultrabold"> Thank You for Contacting us! We will get back to you shortly. </h3>
			</div>
		</div>
		
	</div>
</div>
@endsection


