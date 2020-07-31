@extends("include")

@section("content")

<form action="{{url('/updatapost/'.$post->id)}}" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{Auth::user()->id}}"><br>
title<input type="text" name="title" value="{{$post->title}}"><br>
content<input type="text" name="content" value="{{$post->content}}"><br>
content<input type="text" name="price" value="{{$post->price}}"><br>
image<input type="file"  name="image" value="{{$post->image}}" ><br>
catagory<select name="catid">
<option value="">chose..</option>
@foreach($catagories as $catagory)
<option value="{{$catagory->id}}" @if ($catagory->id==$post->cat_id)selected @endif>{{$catagory->name}}</option>
@endforeach
</select><br>
<input type="submit" value="updata">
</form>
@foreach($errors->all() as $err)
{{$err}}<br>
@endforeach
@endsection 