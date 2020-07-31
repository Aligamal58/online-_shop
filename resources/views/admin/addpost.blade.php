@extends("layout")

@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('add_post') }}</div>

     @if($stop_post==1) 

<h4>the insert post close by admin </h4>

             
  @else
<form method="POST" action="{{ url('/insertpost') }}" enctype="multipart/form-data">
  @csrf
 
  <input id="name" type="hidden"  name="user_id" value="{{ auth::user()->id }}" required autocomplete="price" autofocus><br>
 your  title post<input id="name" type="text"  name="title" value="{{ old('title') }}" required autocomplete="detials" autofocus><br>

    content<textarea id="name" type="text"  name="content" value="{{ old('content') }}" required autocomplete="content" autofocus></textarea><br>
    price<input id="name" type="text"  name="price" value="{{ old('price') }}" required autocomplete="price" autofocus><br>
    
    image<input id="name" type="file"  name="image"><br>
   
    catagory<select name="cat_id">
<option value="">chose..</option>
@foreach($catagories as $catagory)
<option value="{{$catagory->id}}">{{$catagory->name}}</option>
@endforeach
</select><br>
<input type="submit" value="add_offer">
                                     
                                  
@endif                          
                                  
                               
                            </div>





@endsection                   