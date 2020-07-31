@extends("layout")

@section("content")



<div class="container">
  <h2></h2>
          
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>image</th>
        <th>user_roles</th>
        <th>admin_roles</th>
        <th>controller</th>
      </tr>
    </thead>
   
    <tbody>
  @foreach($user as $users)
  
<form method="post" action="/addrole">
@csrf
<input type="hidden" name="id" value="{{$users->id}}">
      <tr>
        <td>{{$users->id}}</td>
        <td>{{$users->name}}</td>
        <td>{{$users->email}}</td>

        <td><img src=""></td>
        <td><input type="checkbox" onChange="this.form.submit()" name="user_role" {{ $users->hasRole('user') ? 'checked' : ' '}} ></td>
        <td><input type="checkbox" onChange="this.form.submit()" name="admin_role" {{ $users->hasRole('admin') ? 'checked' : ' '}}></td>
     <td>  
   
    <a href="{{url('deleteuser/'.$users->id)}}" >delet</a>
  </td>
  
      </tr>
    @endforeach
    </form>
    </tbody>
  </table>
</div>
@endsection  