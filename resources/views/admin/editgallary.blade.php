@extends("include")

@section("content")
                
<form action="{{url('/updatagallary/'.$gallary->id)}}" method="POST" enctype="multipart/form-data">
@csrf

image<input type="file"  name="avatar" value="{{$gallary->avatar}}" ><br>
<input type="submit" value="updata">
@endsection 