{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')
	<div class="">
		<div class="col s12 m8 generic-cover flex-center-bottom" style="height:500px;background-image:url( {{the_field('one_image')}} );">
			<div  class="white pa-m--s mb-s--s">
				<h1 class="h2">{{the_field('one_title')}}</h1>
				<h4>{{the_field('one_text')}}</h4>
			</div>
			
		</div>
		<div class="col s12 m4 omega">
			<div class="row flex-center-bottom generic-cover pa-s--s" style="height:250px;background-image:url({{the_field('two_image')}});">
				<div  class="white pa-m--s mb-s--s">
					<h4>{{the_field('two_title')}}</h4>
					<p>{{the_field('two_text')}}</p>
				</div>
			</div>
			<div class="row flex-center-bottom generic-cover pa-s--s" style="height:250px;background-image:url({{the_field('three_image')}});">
				<div  class="white pa-m--s mb-s--s">
					<h4>{{the_field('three_title')}}</h4>
					<p>{{the_field('three_text')}}</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="background-image:url(https://www.toptal.com/designers/subtlepatterns/patterns/round.png);">
		<div class="col m6 center-align">
			<div class="row generic-contain" style="background-image:url({{the_field('section_2_image')}});height:500px;">
				
			</div>
		</div>
		<div class="col m6">
			<div class="valign-wrapper" style="height:500px;">
				<div class="row">
					<h2>{{the_field('section_2_title')}}</h2>
					<p>{{the_field('section_2_text')}}</p>
					<a href="{{the_field('section_2_button')}}" class="waves-effect waves-light btn-large btn-round mt-l--s">Learn more</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row generic-cover pa-m--s pt-xl--m pb-xl--m pt-m--s pb-m--s" style="background-image:url(@asset('images/bg-polkadot-blue.svg'));">
		<div class="container">
			<div class="row">
				<div class="col m3 center-align">
					<div class="row generic-contain" style="background-image:url({{the_field('section_3_image_left')}}));height:500px;">
						
					</div>
				</div>
				<div class="col m6">
					<div class="valign-wrapper" style="height:500px;">
						<div class="row">
							<h2 class="white-text">{{the_field('section_3_title')}}</h2>
							<p class="white-text">{{the_field('section_3_text')}}</p>
							<a href="{{the_field('section_3_button')}}" class="waves-effect waves-light btn-large btn-round mt-l--s right">Learn more</a>
						</div>
					</div>
				</div>
				<div class="col m3 center-align">
					<div class="row generic-contain" style="background-image:url({{the_field('section_3_image_right')}});height:500px;">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row generic-cover pa-m--s pt-xl--m pb-xl--m pt-m--s pb-m--s" style="background-image:url(@asset('images/bg-stripes-blue.svg'));">
		<div class="container">
			<div class="row white z-depth-1 pa-m--s center-align">
				<div class="h2 serif tw-bold">{{the_field('section_4_title')}}</div>
				<h4>{{the_field('section_4_byline')}}</h4>
			</div>
			<div class="row mt-m--s">
				<div class="col s12 mt-m--s mt-f--m m6 pr-m--s pl-f--s">
					<div class="row pa-m--s white z-depth-1 border-radius">
						<div class="col s4">
							<div class="row">
								<img src="@asset('images/2s-kids.svg')" alt="">
							</div>
						</div>
						<div class="col s8">
							<div class="h4 tw-ultrabold">{{the_field('section_4_box_1_title')}}</div>
							<p>{{the_field('section_4_box_1_text')}}</p>
						</div>
					</div>
				</div>
				<div class="col s12 mt-m--s mt-f--m m6 pl-m--s pr-f--s">
					<div class="row pa-m--s white z-depth-1 border-radius">
						<div class="col s4">
							<div class="row">
								<img src="@asset('images/2ts-kids.svg')" alt="">
							</div>
						</div>
						<div class="col s8">
							<div class="h4 tw-ultrabold">{{the_field('section_4_box_2_title')}}</div>
							<p>{{the_field('section_4_box_2_text')}}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-m--s">
				<div class="col s12 mt-m--s mt-f--m m6 pr-m--s pl-f--s">
					<div class="row pa-m--s white z-depth-1 border-radius">
						<div class="col s4">
							<div class="row">
								<img src="@asset('images/3s-kids.svg')" alt="">
							</div>
						</div>
						<div class="col s8">
							<div class="h4 tw-ultrabold">{{the_field('section_4_box_3_title')}}</div>
							<p>{{the_field('section_4_box_3_text')}}</p>
						</div>
					</div>
				</div>
				<div class="col s12 mt-m--s mt-f--m m6 pl-m--s pr-f--s">
					<div class="row pa-m--s white z-depth-1 border-radius">
						<div class="col s4">
							<div class="row">
								<img src="@asset('images/4s-kids.svg')" alt="">
							</div>
						</div>
						<div class="col s8">
							<div class="h4 tw-ultrabold">{{the_field('section_4_box_4_title')}}</div>
							<p>{{the_field('section_4_box_4_text')}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row white pa-m--s pt-xl--m pb-xl--m pt-m--s pb-m--s">
		<div class="container">
			<div class="row center-align">
				<div class="h2 serif tw-bold">What People Are Saying</div>
			</div>
			<div class="row">
				<div class="col s12 m10 offset-m1">
					<div class="col s12 m4 pa-m--s">
						<div class="white z-depth-2 pa-m--s pa-s--s border-radius" style="min-height:350px;">
							<div class="row center-align">
								<img src="@asset('/images/logo.png')" alt="">
							</div>
							<div class="row">
								<div class="h3">Mellisaa R.</div>
								<div class="h4">
									Sales Associate
								</div>
								<p>
									Blah blah blah
								</p>
							</div>
							
						</div>
					</div>
					<div class="col s12 m4 pa-m--s">
						<div class="light-blue lighten-3 z-depth-2 pa-m--s pa-s--s border-radius" style="min-height:350px;">
							<div class="row center-align">
								<img src="@asset('/images/logo.png')" alt="">
							</div>
							<div class="row">
								<div class="h3">Mellisaa R.</div>
								<div class="h4">
									Sales Associate
								</div>
								<p>
									Blah blah blah
								</p>
							</div>
							
						</div>
					</div>
					<div class="col s12 m4 pa-m--s">
						<div class="white z-depth-2 pa-m--s pa-s--s border-radius" style="min-height:350px;">
							<div class="row center-align">
								<img src="@asset('/images/logo.png')" alt="">
							</div>
							<div class="row">
								<div class="h3">Mellisaa R.</div>
								<div class="h4">
									Sales Associate
								</div>
								<p>
									Blah blah blah
								</p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row pa-m--s generic-cover-bottom" style="height:800px;background-image:url(@asset('images/lawn-bg.svg'))">
		<div class="container">
			<div class="row">
				<div class="col m4">
					<div class="row mt-xl--s">
						<img src="@asset('images/clouds-left.svg')" alt="">
					</div>
					<div class="row mt-xl--s pt-xl--s">
						<img src="@asset('images/owl-stump.png')" alt="" style="width:300px;">
					</div>
				</div>
				<div class="col m4 valign-wrapper" style="height:800px;">
					<div class="row center-align">
						<div class="h2 serif tw-bold">Thanks For Visiting</div>
						<h4>Vanguard Children's Academy (VCA) is committed to providing an optimum environment for the development of your child. As a complete learning center, our staff is dedicated to mentoring and enhancing each child based on strong principles and commitment ensuring Kindergarten readiness.</h4>
						<a class="waves-effect waves-light btn-large btn-round mt-l--s">Learn more</a>
					</div>
				</div>
				<div class="col m4">
					<div class="row mt-xl--s">
						<img src="@asset('images/clouds-right.svg')" alt="">
					</div>
					<div class="row mt-xl--s">
						<img src="@asset('images/kids-standing.png')" alt="" class="right" style="width:300px;">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row pa-m--s" style="background-color:#94CCB9;">
		
	</div>

@endsection









