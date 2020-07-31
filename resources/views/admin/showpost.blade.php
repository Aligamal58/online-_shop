@extends("layout")

@section("content")



<div class="container">
  <h2>Hoverable Dark Table</h2>
  <p>The .table-hover class adds a hover effect (grey background color) on table rows:</p>            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>title</th>
        <th>content</th>
        <th>image</th>
        <th>controller</th>
      </tr>
    </thead>
   
    <tbody>
  @foreach($post as $posts)
      <tr>
        <td>{{$posts->id}}</td>
        <td>{{$posts->title}}</td>
        <td>{{$posts->content}}</td>

        <td><img src="{{asset('upload/'.$posts->image)}}"></td>
        <td> 
    <a href="{{url('editpost/'.$posts->id)}}" >edit</a>
    <a href="{{url('deletpost/'.$posts->id)}}" >delet</a>
  
  </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection  