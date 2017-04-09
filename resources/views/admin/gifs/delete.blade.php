{{ Form::open(['method' => 'DELETE', 'route' =>['gifs.destroy', $id],"class"=>"delete-item"]) }}
		
	<button href="#" class="btn btn-danger"><i class="fa fa-trash"></i></button>

{{Form::close()}}