
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Sign Up :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{asset('css2/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{asset('css2/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{asset('css2/font-awesome.css')}}" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="{{asset('css2/icon-font.min.css')}}" type='text/css' />
<!-- //lined-icons -->
<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
<!--clock init-->
</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top up">
													<h2 class="inner-tittle page">Augment</h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner">Sign Up</h3>
																<form action="{{route('profile.login.attemp')}}" method="POST">
                                                                @csrf
                                                                <div class="form-group">
    <label for="formGroupExampleInput">Example label</label>
   
    <input type="text" class="form-control" name="email" placeholder="inter email">
   
    <input type="password" class="form-control"  name="password" placeholder="inter password">
  </div>
																		<div class="submit"><input type="submit"  value="Sign up" ></div>
																		<div class="clearfix"></div>
																		<div class="buttons">
																			<ul>
																				<li><a href="#" class="hvr-sweep-to-right">Sign up</a></li>
																				<li class="or"><h6>OR</h6></li>
																				<li class="lost"><a href="{{route('profile.sign')}}" class="hvr-sweep-to-left">Sign up</a> </li>
																				<div class="clearfix"></div>
																			</ul>
																		</div>
																		<div class="new">
																			<p class="sign up">Do you have an account yet ? <a href="{{route('profile.sign')}}"> sign here.</a></p>
																			<div class="clearfix"></div>
																		</div>
																	</form>
														</div>
														
													</div>
													 
												<!--//login-top-->
										   </div>
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer sign">
										<div class="error-btn">
															<a class="read fourth" href="index.html">Return to Home</a>
															</div>
										   <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>