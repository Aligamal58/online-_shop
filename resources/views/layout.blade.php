 
<html lang="en">
<head>
  <title>index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/sty.css">
</head>
<body>


<div class="ali">

<ul>

<li><a href="{{url('index')}}">home</a></li>
    @guest
   
   <!-- <li><a href="{{url('register')}}">register</a></li>-->
    
    <li><a href="{{url('login')}}">login</a></li>

</div>
    @else
    <li><a href="{{url('logout')}}">log out</a></li>
    <li>{{Auth::user()->name}}</li>
    <li><a href="{{url('staticse')}}">staticse</a></li>
    <li><a href="{{url('setting')}}">setting</a></li>
    <li>({{session()->has('cart') ? session()->get('cart')->totalqty : '0'   }})</li>

</div>
</div>
<div class="drop">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Catagory
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('addcatagory')}}">add_catagory</a>
          <a class="dropdown-item" href="showcatagory">show_catagory</a>
         
        </div>
      </li>

     
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        post
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="addpost">add_post</a>
          <a class="dropdown-item" href="showpost">show_post</a>
         
        </div>
      </li>

     
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        user
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="adduser">add_user</a>
          <a class="dropdown-item" href="showuser">show_user</a>
         
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Gallary
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="addgallary">add_gallary</a>
          <a class="dropdown-item" href="showgallary">show_gallary</a>
         
        </div>
      </li>

      </div>
</div>
<br><br><br>
      

      @endguest
@yield("content")


</body>
