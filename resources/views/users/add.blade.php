@include('users.header')




<div class="graph-2 general">
                    <div class="graph-form">
<div class="form-body">
<h2 class="inner-tittle">Add Proudct </h2>
    <form action="{{route('profile.insert.post')}}"  method="POST" enctype="multipart/form-data"> 

    @csrf

    <label for="exampleInputEmail1">Title</label> 
    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="title">
   
    <label for="exampleInputEmail1">content</label> 
    <input type="text" class="form-control" id="exampleInputEmail1" name="content" placeholder="content"> 

    <label for="exampleInputEmail1">price</label> 
    <input type="number" class="form-control" id="exampleInputEmail1" name="price" placeholder="price"> 
    
    <label for="exampleInputEmail1">Image</label> 
    <input type="file" class="form-control" id="exampleInputEmail1" name="image" placeholder="image"> 
    <input type="hidden" class="form-control" id="exampleInputEmail1" name="user_id" value="{{auth::user()->id}}"> <br>
    

    
				<label class="col-sm-2 control-label">Catagory </label>
	<div class="col-sm-8">
					<select name="catagory" class="form-control1">
                        <option value="">....</option>
                        @foreach($catagories as $catagory)
                        
							<option value="{{$catagory->id}}">{{$catagory->name}}</option>
							@endforeach
                    </select>
                 
							</div></div></div><br>
						
         <input  class="btn" type="submit" value="check" name="send" />
         </form> 
    </div>

</div>
@foreach($errors->all() as $err)
<div class="alert alert-danger" role="alert">
{{$err}}
</div>

@endforeach
















@include('users.footer')