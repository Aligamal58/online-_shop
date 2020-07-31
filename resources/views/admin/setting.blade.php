@extends("layout")

@section("content")



<div class="container">
  <h2>setting</h2>
            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>controler</th>
        <th>name</th>
        <th>controller</th>
      </tr>
    </thead>
   
    <tbody>
    <form method="post" action="/stop_post">
    @csrf
      <tr>

        <td>post:<input type="checkbox" onChange="this.form.submit()" name="stop_post" {{ $stop_post==1 ? 'checked':' '}} ></td>

        <td></td>
        <td> </td>
    
            </form>
    
    </tbody>
  </table>
</div>
@endsection  