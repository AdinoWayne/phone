		<div class="header_area_top"> 
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<!--Start Search area -->
						<form action="page/search" name="myForm" method="POST">
							{!! csrf_field() !!}
							<div class="search_box">
								<input name="Name" id="itp" class="input_text" type="text" value="Search"/>
								<button type="submit" class="btn-search">
									<span><i class="fa fa-search"></i></span>
								</button>
							</div>
						</form>
						<!--End Search area -->
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<!--Start Logo area -->
						<div class="logo"> 
							<a href="page/home">
								<img src="pages_assets/img/logo/logo.png" alt="" />
							</a>
						</div> 
						<!--End Logo area -->
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<!--Start Header Right Cart area -->
						<div class="account_card_area"> 
							<ul id="account_nav">
								@if(Auth::check())
								<li><a href="#"><i class="fa fa-key"></i>{{Auth::user()->fullname}}</a>
									@else
									<li><a href="#"><i class="fa fa-key"></i>Account</a>
										@endif
									<div class="account_menu_list">
										<div class="account_single_item">
											<h2>Language</h2>
											<ul id="account_single_nav_2">
												<li><a href="#">English</a></li>
												<li><a href="#">France</a></li>
												<li><a href="#">Germany</a></li>
											</ul>
										</div>
										<div class="account_single_item">
											<h2>Setting</h2>
											<ul id="account_single_nav_3">
												<li><a href="my-account.html">My Account</a></li>
												<li><a href="#">My Wishlist</a></li>
												<li><a href="#">My Cart</a></li>
												<li><a href="#">Checkout</a></li>
												@if(Auth::check())
												<li><a href="page/logout">Log Out</a></li>
												@else
												<li><a href="page/login">Log In</a></li>
												@endif
											</ul>
										</div>
									</div>
								</li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i>Cart <span class="cart_zero">2</span></a>
									<div class="cart_down_area">
										<div class="cart_single">
											<a href="#"><img src="pages_assets/img/cart/cart-1.jpg" alt="" /></a>
											<h2><a href="#">Pellentesque hendrerit</a> <a href="#"><span><i class="fa fa-trash"></i></span></a></h2>
											<p>1 x $222.00</p>
										</div>
										<div class="cart_single">
											<a href="#"><img src="pages_assets/img/cart/cart-2.jpg" alt="" /></a>
											<h2><a href="#">Pellentesque hendrerit</a> <a href="#"><span><i class="fa fa-trash"></i></span></a></h2>
											<p>1 x $222.00</p>
										</div>
										<div class="cart_shoptings">
											<a href="checkout.html">Checkout</a>
										</div>
									</div>
								</li>
							</ul>
						</div> 
						<!--End Header Right Cart area -->
					</div>
				</div>
			</div>
		</div> 
		<!--End Header Top area -->
		<!--Start Main Menu area -->
		<div class="header_botttom_area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!--Start desktop menu area -->
						<div class="main_menu">
							<ul id="nav_menu" class="active_cl">
								<li><a href="index.html"><span class="Home">Home</span></a>
									<div class="home_mega_menu">
										<a href="index-2.html">Home 2</a>
										<a href="index-3.html">Home 3</a>
									</div>
								</li>
								@foreach($menu as $value)
								<li><a href="shop.html"><span class="Clothings">{{$value->name}}</span></a>
									<div class="home_mega_menu">
										@foreach($value->groupproduct as $sonvalue)
										<div class="single_megamenu">
											<h2><a href="shop.html">{{$sonvalue->name}}</a></h2>
										</div>
										@endforeach
									</div>
								</li>
								@endforeach
								<li><a href="shop.html"><span class="Accessaries">Pages</span></a>
									<div class="home_mega_menu">
										<a href="about-us.html">About Us</a>
										<a href="contact.html">Contact</a>
										<a href="cart.html">Cart</a>
										<a href="product.html">Product</a>
										<a href="checkout.html">Checkout</a>
										<a href="my-account.html">My Account</a>
										<a href="wishlist.html">Wishlist</a>
										<a href="404.html">404 page</a>
									</div>
								</li>
							</ul>
						</div>
						<!--End desktop menu area -->
					</div>
				</div>
			</div>
			<!--start Mobile Menu area -->
			<div class="mobile-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.html">Home</a>
											<ul>
												<li><a href="index-2.html">Home 2</a></li>
												<li><a href="index-3.html">Home 3</a></li>
											</ul>
										</li>
										<li><a href="shop.html">Clothings</a>
											<ul>										
												<li><a href="shop.html">Learning</a>
													<ul>										
														<li><a href="shop.html">Devenport</a></li>
														<li><a href="shop.html">Door Bazar</a></li>
														<li><a href="shop.html">Digital Software</a></li>
														<li><a href="shop.html">Dental Care</a></li>
													</ul>
												</li>
												<li><a href="shop.html">Lighting</a>
													<ul>										
														<li><a href="shop.html">Devenport</a></li>
														<li><a href="shop.html">Door Bazar</a></li>
														<li><a href="shop.html">Digital Software</a></li>
														<li><a href="shop.html">Dental Care</a></li>
													</ul>
												</li>
												<li><a href="shop.html">Living Room</a></li>
												<li><a href="shop.html">Lamp</a></li>
											</ul>
										</li>
										<li><a href="shop.html">Lookbook</a>
											<ul>
												<li><a href="shop.html">Gold Ring</a></li>
												<li><a href="shop.html">Games & Software</a></li>
											</ul>
										</li>
										<li><a href="https://devitems.com/404.shtml">Blog</a>
											<ul>
												<li><a href="single-blog.html">Single Blog</a></li>
											</ul>
										</li>
										<li><a href="shop.html">Shop</a>
											<ul>										
												<li><a href="cart.html">Cart</a></li>
												<li><a href="product.html">Product</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="my-account.html">My Account</a></li>
											</ul>
										</li>
										<li><a href="about-us.html">Pages</a>
											<ul>										
												<li><a href="about-us.html">About Us</a></li>
												<li><a href="contact.html">Contact</a></li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<!--End Mobile Menu area -->
		</div>