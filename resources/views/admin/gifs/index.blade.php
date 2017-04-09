@extends('admin.layouts.master')

@section('content')

  <div class="row index">
    <div class="col-xs-12 col-sm-12 col-md-12">

      <h3>Lista de Gifs</h3>
      <p class="pull-right">

        <a class="btn btn-success" href="{{url('admin/gifs/create')}}" ><i class="fa fa-plus"></i> Agregar Gif</a>
      </p>
    </div>
  </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Preview</th>
                <th>Name</th>
                <th>Date</th>
                <th colspan="3">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($gifs as $gif)
              <tr>
                <td>{{$gif->id}}</td>
                <td width="15%"><img class="img-responsive" src="{{url('gifs/'.$gif->gif)}}"></td>
                <td>{{$gif->title}}</td>
                <td>{{$gif->created_at}}</td>
                <td width="5%">
                  <a class="btn btn-info" href="{{route('gifs.edit',$gif->id)}}"><i class="fa fa-pencil"></i></a>
                </td>
                <td width="5%">

                    <a class="btn  {{($gif->autorize==0)?'btn-default':'btn-primary'}} autorize-item" href="{{route('gifs.autorize',$gif->id)}}">
                      <i class="fa {{($gif->autorize==0)?'fa-eye-slash':'fa-eye'}}"></i>
                    </a>
                </td>
                <td width="5%">
                     @include('admin.gifs.delete',['id'=>$gif->id])</i></a>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-sm-4 col-md-4 col-lg-4">
        {{ $gifs->links() }}

          </div>
          </div>
@endsection