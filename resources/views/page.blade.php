@extends('layouts.app')
@section('content')
	<div class="blog-container pb-xl--s pa-xs--s">
		@while(have_posts()) @php(the_post())
		  @include('partials.page-header')
		  @include('partials.content-page')
		@endwhile
	</div>
@endsection
