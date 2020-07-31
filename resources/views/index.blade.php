
@extends("layout")

@section("content")
@foreach($posts as $post)
<div class="image">
 <h2>{{$post->title}}</h2>
 
 <img src="{{asset('upload/'.$post->image)}}"><br>

<p>{{$post->content}}</p><br>

<a href="{{url('addcart/'.$post->id)}}">cart</a>

</div>

@endforeach
@endsection 

