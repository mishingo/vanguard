{{--
  Template Name: Parent Portal
--}}

@extends('layouts.app')

@section('content') 


@if(!isset($_COOKIE['user'])) 
<div class="row pt-m--s" style="background-image:url(@asset('images/squiggly-tile.jpg'));">
	<div class="container">
		<div class="valign-wrapper" style="height:70vh">
			<div class="row center-align">
				<h1 class="serif tw-bold "> ENTER PASS <br /> PHRASE </h1>
				
				<form method="POST" action="/wp-json/passphrase/code" >
					<div class="row">
						<div class="col m6 offset-m3">
							<div class="row pa-s--s pa-f--m inline-input-group">
							    <div class="input-field col s12 m8 omega">
							        <i class="material-icons prefix">lock</i>
							        <input placeholder="PassPhrase" name="passphrase"  id="icon_prefix" type="text" class="validate white">
							        
							    </div>					    
							    <div class="col s12 m4 input-field omega">
							        <button id="" type="submit" class="deep-orange btn btn-flush waves-effect waves-light">
							            Enter
							        </button>
							    </div>
							</div>
							<div class="row mt-m--s">
								@if ($_GET['l'] == 't')
									<div class="row blue white-text pa-s--s">
										<div class="h4">Sorry Wrong Pass Phrase</div>
									</div>
								@endif
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@else
	<div class="row border-top-grey">
		<div class="container">
			<ul id="tabs-swipe-demo" class="tabs">
			    <li class="tab col s3"><a class="active" href="#test-swipe-1">Calender</a></li>
			    <li class="tab col s3"><a href="#test-swipe-2">Links</a></li>
			    <li class="tab col s3"><a href="#test-swipe-3">Pictures</a></li>
			    <li class="tab col s3"><a href="#test-swipe-4">Camera</a></li>
			</ul>
		</div>
		<div class="grey lighten-4 pa-m--m pa-xs--s main-height">
			<div class="container">
				<div class="row">
					<div class="col s12 m6 offset-m3 omega">
						<div id="test-swipe-1" class="col s12 pink omega">
							<div class="row">
								<div class="row pink darken-2 z-depth-1 pa-m--m pa-s--s">
									<h3 class="tw-ultrabold white-text"><i class="material-icons medium">date_range</i> Calendar of Events</h3>
								</div>

								@if( have_rows('calendar_events') )
								    @while ( have_rows('calendar_events') ) @php(the_row())
									    <div class="row white  mt-s--s z-depth-1 pa-m--s">
									    	<h4 class="tw-ultrabold">{{the_sub_field('name')}}</h4>
									    	<span class="yellow">{{the_sub_field('date')}}</span>
									    	<p class="black-text">{{the_sub_field('description')}}</p>
									    </div>
								    @endwhile
								@else 

								@endif
							</div>
						</div>
						<div id="test-swipe-2" class="col s12 blue omega">
							<div class="row">
								<div class="row blue darken-2 z-depth-1 pa-m--m pa-s--s">
									<h3 class="tw-ultrabold white-text"><i class="material-icons medium">link</i> Important Links</h3>
								</div>

								@if( have_rows('parent_links') )
								    @while ( have_rows('parent_links') ) @php(the_row())
								    	<a href="{{the_sub_field('url')}}" target="_blank">
										    <div class="row white  mt-s--s z-depth-1 pa-s--s pa-m--s">
										    	<div class="indent-thumb--m">
										    		<div class="generic-cover" style="height:100px;background-image:url({{the_sub_field('image')}});">
										    		</div>
										    	</div>
										    	<div class="indent-content--m pl-m--s">
										    		<h4 class="tw-ultrabold black-text">{{the_sub_field('name')}}</h4>
										    		<p class="black-text">{{ the_sub_field('description', false, false) }}</p>
										    	</div>
										    </div>
										</a>
								    @endwhile
								@else 

								@endif
							</div>
						</div>
						<div id="test-swipe-3" class="col s12 green omega">
							Test 3
						</div>
						<div id="test-swipe-4" class="col s12 green omega">
							Test 3
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif

@endsection









