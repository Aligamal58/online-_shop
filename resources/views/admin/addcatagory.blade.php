
@extends("include")

@section("content")


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
          
                <div class="card-header">{{ __('add_catagory') }}</div>

                
  


<form method="POST" action="{{ url('/insertcatagory') }}" enctype="multipart/form-data">
  @csrf
 
  
 {{__('name')}} <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus><br>

   
  
<input type="submit" value="add_catagory">
                                     
                                  
</div>
</div>
</div>
</div>
</div>                              
                                  
                               
                           





@endsection                   