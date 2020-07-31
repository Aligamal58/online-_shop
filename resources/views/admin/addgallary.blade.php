@extends("layout")

@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('add_Gallary') }}</div>

     
<form method="POST" action="{{ url('/insertgallary') }}" enctype="multipart/form-data">
  @csrf
 
    
    image<input id="name" type="file"  name="avatar"><br>
   
  
<input type="submit" value="add_image">
                                     
                                  
@endsection 