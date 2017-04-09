 @extends('admin.layouts.master')

@section('content')
<div class="container body">
 	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="panel work-wrapper">
				<div class="panel-heading"><h3>@yield('title', 'Nuevo Gif')</h3></div>
				  <div class="panel-body">
				  	{{ Form::open(['route' => 'gifs.store',"method"=>"POST",'files'=>true,'id'=>'gif']) }}
				  	<div class="form-group">
				  		{{Form::label('title','Titulo')}}
						{{Form::text('title',null, ['class'=>'form-control','placeholder'=>'Título del Gif','required','accept'=>'image/gif'] ) }}
				  	</div>

				  	<div class="form-group">
				  		{{Form::label('gif','Gif')}}
						{{Form::file('gif')}}
				  	</div>

				  	<div class="form-group">
				  		{{Form::label('description','Descripción')}}
						{{Form::textarea('description',null, ['class'=>'form-control editor','placeholder'=>'Descripción','required'] ) }}
				  	</div>

				  	<div class="form-group">
				  	<a class="btn btn-default pull-left" href="{{route('gifs.index')}}"><i class="fa fa-undo"></i>Regresar</a>
				
				  	{{Form::submit('Crear',['class'=>'btn btn-success pull-right']) }}</div>
				  	{{ Form::close() }}
				  </div>
				</div>
			</div>
		</div>
	</div>
@endsection