{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')
	<?php 
		if(!isset($_COOKIE['variant_key'])) {
			$variant =  getRWF(get_field( 'multivariate')); 
		} else {
			$variant = $_COOKIE['variant_key'];
		}
	?>

	<script>ga('set', 'dimension1', '{{$variant+1}}');</script>

  	<div class="hero row primary pa-s--s pb-xl--s valign-wrapper" style="position: relative;">
  		<div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
  		<div class="container valign">
  			<div class="row" >
  				<div class="col s12 l10 offset-l1">
					<div class="col s12 fira center-align">
						<div class="row white-text">
							<h1>{{ the_field('h1') }}</h1>
							<div class="h1 tw-bold">
								{{ get_field('multivariate')[$variant]['headline'] }}
							</div>
							<p class="h4">{{ get_field('multivariate')[$variant]['byline'] }}</p>
							<div class="col s12 l8 offset-l2">
							<form method="POST" action="/wp-json/collection/savings">
							    <div class="row inline-input-group mt-m--l mt-l--s">
							        <div class="input-field col s12 omega l8 black-text">
							            <select class="white">
							                <option value="" disabled selected>Choose Saving Hack</option>
							                <option value="insurance" data-icon="@asset('images/i-percentage.svg')" class="left" >Insurance</option>
							                <option value="creditcards" data-icon="@asset('images/i-creditcard.svg')" class="left " >Credit Cards</option>
							                <option value="shopping" data-icon="@asset('images/i-shoppingcart.svg')" class="left" >Shopping</option>
							            </select>
							        </div>
							  
							        <div class="col s12 l4 omega input-field">
							            <button id="" type="submit" class="btn btn-flush waves-effect waves-light">
							                Find Savings
							            </button>
							        </div>
							    </div>
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row blue lighten-5 pa-m--s pt-xl--m pb-xl--m">
		<div class="container">
			<div class="row">
				<div class="col s12 m10 offset-m1">
					<div class="row center-align">
				
							
						
							<div class="h2 blue-grey-text text-darken-3 tw-ultrabold min-fluff">
								Buying online promotes direct relationships with manufacturers 
							</div>
							<div class="h4 mt-m--s">
								E-commerce has made direct-to-consumer shopping easy, and it benefits everyone.
							</div>
							<a href="" class="mt-m--s btn white-text mt-s--s">Find shops</a>
	
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row pa-l--l pa-xs--s grey lighten-5">
		<div class="container">
			<div class="row mt-m--s mt-f--s">
				<div class="col s12 m8">
					<div class="row"> 
						<div class="h5 tw-ultrabold no-fluff grey-text text-darken-2">FEATURED</div>
						<div class="h2 min-fluff tw-ultrabold">Featured Hacks</div>
					</div>
					<div class="row">
						
						<?php $featured_articles = get_field('multivariate')[$variant]['featured_articles']; ?>
					
						@if( $featured_articles ) 
							@foreach($featured_articles as $article)
								<div class="row mt-m--s">
									<p><span class="yellow tw-bold pl-s--s pr-s--s pt-xs--s pb-xs--s">{{$article['article_category']}}</span></p>
								</div>
								<a href="{{$article['article_link']}}" class="black-text">
									<div class="row">
										<div class="row mt-s--s white z-depth-1">
											<div class="col s4 omega featured-card-height">
												<div class="generic-cover featured-card-height" style="background-image:url({{$article['article_image']}});">

												</div>
											</div>
											<div class="col s8 fira pa-s--s valign-wrapper featured-card-height">
												<div class="row valign">
													<div class="h4 tw-bold">{{$article['article_title']}}</div>
													<div class="h3 tw-ultrabold min-fluff">{{$article['article_byline']}}</div>
													<p>By: {{$article['article_author']}}</p>
												</div>
											</div>
										</div>
									</div>
								</a>
							@endforeach
						@endif

						
					</div>
				</div>
				<div class="col s12 m4">
					<div class="row"> 
						<div class="h5 tw-ultrabold no-fluff grey-text text-darken-2">FEATURED</div>
						<div class="h3 min-fluff tw-ultrabold">Top 5 Hacks</div>
					</div>
					<div class="row mt-m--s">
						<?php $top_articles = get_field('multivariate')[$variant]['top_articles']; ?>
						
						@if( $top_articles ) 
							@foreach($top_articles as $article)
							
								
									<div class="row top-card mb-m--s">
										<div class="top-card--counter ">
											<i></i>
										</div>
										<div class="top-card--content ">
											<a href="{{$article['link']}}" class="black-text">
												<div class="row generic-cover featured-card-height" style="background-image:url({{$article['image']}});">
												</div>
												<div class="row fira mt-xs--s">
													<div class="col s8 omega">
														<div class="h4 tw-ultrabold min-fluff left">{{$article['title']}}</div>
													</div>
													<div class="col s4 omega">
														<div class="h4 tw-ultrabold min-fluff right green-text">
															${{$article['savings_amount']}}
														</div>
													</div>
												</div>
												<div class="row green-text right">
													<small class="min-fluff"><i>Average Savings</i></small>
												</div>
											</a>
										</div>

										
									</div>
								
							@endforeach
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection









