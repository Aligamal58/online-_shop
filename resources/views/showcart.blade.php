

@include('header')

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Regular Page</h3>
						<ul class="breadcrumb-tree">
							<li><a href="{{route('index')}}">Home</a></li>
							<li class="active">Blank</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
        <!-- /BREADCRUMB -->
        
        <div class="col-md-12">
						<div class="row">
                           
							<div class="products-tabs">
                                <!-- tab -->
                                @if($cart)
                               @if($errors->any())
                               <div class="alert alert-danger">
                                   <ul>
@foreach($errors->all() as $error)
                                     <li>{{$error}}</li>
                                     @endforeach
                                </ul>
         </div>
                                @endif
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
                                     
										<!-- product -->
										@foreach($cart->items as $product)
										<div class="product">
											<div class="product-img">
												<img src="/upload/{{$product['image']}}" alt="">
												<div class="product-label">
													<h3>{{$product['title']}}</h3>
												</div>
											</div>
											<div class="product-body">
											
												
												
												<h4 class="product-price">{{$product['price']}}$ <del class="product-old-price">434$</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">


                                                <form action="{{url('update/'.$product['id'])}}" method="post">
                                                Quantity<input type="text" name="qty" value="{{$product['qty']}}"><br><br>
                                               @csrf
                                              @method('post')
                                              <br> <button type="submit" class="btn btn-primary">change</button>
                                                </form>
                                               
                                              
                                              
                                                <form action="{{url('delete/'.$product['id'])}}" method="post">

                                                @csrf
                                                @method('delete')
                                               <br> <button type="submit" class="btn btn-danger">Remove</button>
                                               </form>
                                                </div>
											</div>
											
										</div>
                                        @endforeach
                                        @else
                                        <div class="container">
                                        <h2>no products</h2>
         </div>
                                        @endif
                                       
         </div>
         </div>
            <br><br>
        @if($cart)

	
					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
                            </div>
                            @foreach($cart->items as $product)
							<div class="order-products">
								<div class="order-col">
									<div>{{$product['title']}}</div>
									<div>{{$product['price']}}$</div>
                                </div>
                                @endforeach
								<!--<div class="order-col">
									<div>2x Product Name Goes Here</div>
									<div>$980.00</div>
								</div>
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>-->
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">{{$cart->totalprice}}$</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Cheque Payment
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal System
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<a href="{{url('checkout/'.$cart->totalprice)}}" class="primary-btn order-submit">Check Out</a>
					</div>
					<!-- /Order Details -->

@endif






		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
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

	@include('footer')