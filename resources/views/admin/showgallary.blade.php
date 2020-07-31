@extends("layout")

@section("content")



<div class="container">
            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>image</th>
        <th>controller</th>
      </tr>
    </thead>
   
    <tbody>
  @foreach($gallary as $gallaries)
      <tr>
        <td>{{$gallaries->id}}</td>
        <td><img src="{{asset('upload/'.$gallaries->avatar)}}"></td>
        <td> 
    <a href="{{url('editgallary/'.$gallaries->id)}}" >edit</a>
    <a href="{{url('deletgallary/'.$gallaries->id)}}" >delet</a>
  
  </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection  