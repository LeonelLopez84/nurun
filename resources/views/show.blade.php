@extends('layouts.master')

@section('content')

<div class="container body" id="work">

	<div class="row text-center animate-in" data-anim-type="fade-in-up" id="work-div">
		<div class="col-sm-offset-3 col-md-offset-3 col-xs-12 col-sm-6 col-md-6">
			<section id="only-one">
				<article class="white-panel work-wrapper">
					<img src="{{url('gifs/'.$gif->gif)}}" alt="">

				<h1>
					<a href="{{url('gifs/show/'.$gif->slug)}}">{{$gif->title}}</a>
				</h1>
			 </article>
			</section>
	</div>
</div>
<div class="row text-center animate-in" data-anim-type="fade-in-up" id="work-div">
<div class="col-sm-offset-4 col-md-offset-4 col-xs-4 col-sm-4 col-md-4">
	@include('partials.socialmedia',['gif',$gif])
	</div>
	</div>
	<div class="row text-center animate-in" data-anim-type="fade-in-up" id="work-div">
		<div class="col-xs-4 col-sm-4 col-md-4">
			@if(isset($prev))
			<a href="{{url('gifs/show/'.$prev->slug)}}"><i class="fa fa-step-backward" aria-hidden="true"></i>&nbsp;{{$prev->title}}</a>
			@endif
		</div>

		<div class="col-xs-4 col-sm-4 col-md-4">
			<!--<a href="{{url('/')}}"><i class="fa fa-th-large" aria-hidden="true"></i> Home</a>-->
		</div>

		<div class="col-xs-4 col-sm-4 col-md-4">
			@if(isset($next))
			<a class="pull-right" href="{{url('gifs/show/'.$next->slug)}}">{{$next->title}} &nbsp;<i class="fa fa-step-forward" aria-hidden="true"></i></a>
			@endif
		</div>

	</div>

		<div class="row text-center animate-in" data-anim-type="fade-in-up" id="work-div">
		<div class="col-xs-4 col-sm-4 col-md-4">
			

	</div>
	</div
</div>
@endsection
