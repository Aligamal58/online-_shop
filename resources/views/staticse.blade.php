@extends("layout")

@section("content")



<div class="container">
         
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>user</th>
        <th>post</th>
        <th>catagory</th>
      </tr>
    </thead>
   
    <tbody>
 
      <tr>
        <td>{{$user}}</td>
        <td>{{$post}}</td>
        <td>{{$catagory}} </td>
      </tr>
   
    </tbody>
  </table>
</div>
@endsection  