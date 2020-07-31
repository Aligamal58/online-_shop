@extends("layout")

@section("content")



<div class="container">
  <h2>Hoverable Dark Table</h2>
  <p>The .table-hover class adds a hover effect (grey background color) on table rows:</p>            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>controller</th>
      </tr>
    </thead>
   
    <tbody>
  @foreach($catagory as $cat)
      <tr>
        <td>{{$cat->title}}</td>
        <td>{{$cat->name}}</td>
        <td> 
    <a href="{{url('editcatagory/'.$cat->id)}}" >edit</a>
    <a href="{{url('deletcatagory/'.$cat->id)}}" >delet</a>
  
  </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection  