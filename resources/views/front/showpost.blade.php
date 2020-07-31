
@include('front.header')
						<!-- store products -->
						<div class="row">
              <!-- product -->
             
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
                                     
										<img src="/upload/{{$post->image}}" alt="">
								
									</div>
									<div class="product-body">
										
										<h4 class="product-price">{{$post->price}} <del class="product-old-price">$990.00</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										
									</div>
									
								</div>
              </div>
            
							<!-- /product -->
<br>

				                                       <div class="col-md-6 profile-info two">
															   <h3 class="inner-tittle">Comments </h3>
																<div class="main-grid3 p-skill">
														
																		<ul class="timeline">
                                                                       
																			<li>
																			  <div class="timeline-badge info"><i class="fa fa-smile-o"></i></div>
																			  <div class="timeline-panel">
																			  @foreach($post->comment as $comment)
																			  <img src="/upload/{{$comment->user->image}}" alt="">
																				<div class="timeline-heading">
																				   <h4 class="timeline-title"><a href="profile.html">{{$comment->user->name}}</a></h4>
																				</div>
																				<div class="timeline-body">
																				
                                                                                  <p>{{$comment->comment}}</p>
                                                                                  <p class="time">{{$comment->created_at}}</p>
                                                                                  <!--<div class="col-sm-10">-->
                                                                             <button type="submit" class="btn btn-primary">
                                                                               
                                                                                  <a href="{{url('deleteComment/'.$comment->id)}}">Delete</a></button><br><br>
                                                                                  </div>
																				  @endforeach
                                                                                </div>
																			  </div>
																			</li>
																		
																		
																		</ul>
																	
																	</div>
																</div>






							<!-- product -->
						
                        </div>
                        <div class="container">
                            @if(auth::user())
                        <form action="{{url('showpost/'.$post->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{auth::user()->id}}"><br>
                        <input type="hidden" name="post_id" value="{{$post->id}}"><br>
                       
                        <div class="form-group">
    <label for="exampleFormControlTextarea1">Add Comment</label>
    
  
    <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3"></textarea>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add Comment</button>
    </div>
  </div>
</form>@else
    <h2>Go to <a href="{{route('profile.login')}}">login</a> &<a href="{{route('profile.sign')}}">sign up </a> even you can add a comment</h2>

@endif
</div>		
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
@include('footer')







