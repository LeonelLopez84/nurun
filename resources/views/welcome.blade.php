@extends('layouts.master')

@section('content')
<div class="container body" id="work">
<div class="row text-center animate-in" data-anim-type="fade-in-up" id="work-div"
	<div class="col-xs-12 col-sm-12 col-md-12">
  		<section id="pinBoot">

       		@foreach($gifs as $gif)

		      <article class="white-panel work-wrapper">
				<a class="fancybox-media grouped_elements" rel="group1" title="{{$gif->title}}" href="{{url('gifs/'.$gif->gif)}}">
		      		<img src="{{url('gifs/'.$gif->gif)}}" alt="">
		      	</a>

		        <h4><a href="{{url('gifs/show/'.$gif->slug)}}">{{$gif->title}}</a></h4>
		      </article>

       		@endforeach
   	</section>
	</div>
	</div>
	</div>
@endsection
