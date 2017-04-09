<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">

   @foreach($lastgifs as $k=>$gif)
    <li data-target="#carousel-example-generic" data-slide-to="{{$k}}" class="{{($k==0)?'active':''}}"></li>
   @endforeach

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    
@foreach($lastgifs as $k=>$gif)
    <div class="item {{($k==0)?'active':''}}">
      <img src="{{url('gifs/'.$gif->gif)}}" alt="{{$gif->title}}">
      <div class="carousel-caption">
        {{$gif->title}}
      </div>
    </div>
@endforeach

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>

