@extends('layouts.master')

@section('content')
       <div class="container">
       	<div class="row">
       		@foreach($gifs as $gif)
       		<div class="col-xs-12 col-sm-6 col-md-4 col-md-3">
       			<img class="img-responsive" src="{{url('gifs/'.$gif->gif)}}">
       		</div>
       		@endforeach
       	</div>
       </div>
@endsection