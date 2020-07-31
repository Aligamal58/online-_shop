@extends("include")

@section("content")

<form action="{{url('/updatacatagory/'.$catagory->id)}}" method="post">
@csrf

name<input type="text" name="name" value="{{$catagory->name}}"><br>

<input type="submit" value="update">
</form>


</div>
 
@endsection  
   