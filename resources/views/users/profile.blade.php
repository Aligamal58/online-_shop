
@if( auth::user())


@include('users.header')







<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="{{route('index')}}">Home</a></li>
											<li class="active">Welcome {{ auth::user()->name}} </li>
										</ol>
									   </div>
















@include('users.footer')

@endif
