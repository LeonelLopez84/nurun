
<div class="social-buttons pull-right">
    <a class="facebook" name="{{$gif->slug}}" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url('gifs/show/'.$gif->slug)) }}"
       target="_blank">
       <i class="fa fa-facebook-official"></i>
    </a>
    <a class="twitter" name="{{$gif->slug}}" href="https://twitter.com/intent/tweet?url={{ urlencode(url('gifs/show/'.$gif->slug)) }}"
       target="_blank">
        <i class="fa fa-twitter-square"></i>
    </a>
    <a class="gplus" name="{{$gif->slug}}" href="https://plus.google.com/share?url={{ urlencode(url('gifs/show/'.$gif->slug)) }}"
       target="_blank">
       <i class="fa fa-google-plus-square"></i>
    </a>
    <a class="pinterest" name="{{$gif->slug}}" href="https://pinterest.com/pin/create/button/?{{ 
        http_build_query([
            'url' => url('gifs/show/'.$gif->slug),
            'media' => url('gifs/'.$gif->gif),
            'description' => $gif->description
        ]) 
        }}" target="_blank">
        <i class="fa fa-pinterest-square"></i>
    </a>
</div>