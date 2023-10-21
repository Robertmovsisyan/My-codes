<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Xpoge</title>

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link type="image/x-icon" href="images/fav-icon.png" rel="icon">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/shoes.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
	</head>
	<body>

		<!-- Start preloader -->
		<!-- End preloader -->

		<!-- Search Screen start -->
		<div class="sidebar-search-wrap">
		    <div class="sidebar-table-container">
			    <div class="sidebar-align-container">
			        <div class="search-closer right-side"></div>
			        <div class="search-container">
			          <form method="get" id="search-form">
			            <input type="text" id="s" class="search-input" name="s" placeholder="Search text">
			          </form>
			          <span>Search and Press Enter</span>
			        </div>
			    </div>
		    </div>
		</div>
		<!-- Search Screen end -->

		<div id="newslater-popup" class="mfp-hide white-popup-block open align-center">
			<div class="nl-popup-main">
			    <div class="nl-popup-inner">
				    <div class="newsletter-inner">
				    	<div class="row">
				    		<div class="col-md-6"></div>
				    		<div class="col-md-6">
				    			<div class="mtb-30 text-center">
							        <h2 class="main_title">Subscribe Emails</h2>
							        <span class="sub-title mb-30">Sign up & get 10% off</span>
							        <form>
							        	<input type="email" placeholder="Email Here..." required>
							        	<button class="btn-color big-width btn" title="Subscribe">Subscribe</button>
							        </form>
							        <div class="check-box mt-30">
										<span>
			                            	<input type="checkbox" class="checkbox" id="different-address" name="Ship to a different address?">
			                            	<label for="different-address">Don`t show this popup again</label>
			                            </span>
		                            </div>
	                            </div>
					        </div>
				        </div>
				    </div>
			    </div>
			</div>
		</div>

		<div class="main" id="main">
			<header class="header transition">
				<div class="container position-r">
					<div class="row">
						<div class="col-lg-2 col-md-4 col-6 align-flax">
				            <div class="navbar-header">
					            <a class="navbar-brand" href="indexx.php">
					                <img alt="log" src="images/logo.png" class="transition">
					            </a> 
				            </div>
					    </div>
					    <div class="col-lg-10 col-md-8 col-6 position-i">
					       	<div class="menu-left transition">
						        <div class="menu" >
						            <ul>
							            <li>
							                <a href="indexx.php">Home</a>
							            </li>
							            <li class="dropdown">
							            	<span class="opener plus"></span>
							                <a href="shop.php">Pages</a>
							                <div class="megamenu">
							                	<div class="megamenu-inner">
							                		<ul>
							                			<li><a href="about.php">About Us</a></li>
									                    <li><a href="shop-list.php">Shop List</a></li>
									                    <li><a href="product-detail.php">Product Detail</a></li>
									                    <li><a href="wishlist.php">Wishlist</a></li>
									                    <li><a href="404.php">404</a></li>
									                </ul>
							                	</div>
							                </div>
							            </li>
							            <li class="dropdown">
							            	<span class="opener plus"></span>
							                <a href="shop.php">Shop</a>
							                <div class="megamenu full">
							                	<div class="megamenu-inner">
							                		<div class="row">
							                			<div class="col-xl-3 col-lg-3 col-md-3 display-nr">
							                				<div class="shop-img-in">
							                					<div class="row">
							                						<div class="col-xl-12 col-lg-12 col-md-12 pb-10">
							                							<a href="product-detail.php" class="img-drop-bottom">
							                								<img src="images/menu.jpg" class="transition" alt="img">
							                							</a>
							                						</div>
							                					</div>
							                				</div>
							                			</div>
							                			<div class="col-xl-3 col-lg-3 col-md-12">
							                				<a href="shop.php" class="megamenu-title">Chap Shoes</a>
							                				<ul>
									                            <li><a href="shop.php">Hessian Shoes</a></li>
									                            <li><a href="shop.php">Postillion Shoes</a></li>
									                            <li><a href="shop.php">Cowboy Shoes</a></li>
									                            <li><a href="shop.php">Paddock Shoes</a></li>
									                            <li><a href="shop.php">Postillion Shoes</a></li>
									                            <li><a href="shop.php">Cowboy Shoes</a></li>
									                            <li><a href="shop.php">Paddock Shoes</a></li>
									                        </ul>
							                			</div>
							                			<div class="col-xl-3 col-lg-3 col-md-12">
							                				<a href="shop.php" class="megamenu-title">Fashion Shoes</a>
							                				<ul>
									                            <li><a href="shop.php">Opinga</a></li>
									                            <li><a href="shop.php">Rocker Bottom</a></li>
									                            <li><a href="shop.php">Clog</a></li>
									                            <li><a href="shop.php">Driving Moccasins</a></li>
									                            <li><a href="shop.php">High Heeled</a></li>
									                            <li><a href="shop.php">Rocker Bottom</a></li>
									                            <li><a href="shop.php">Clog</a></li>
									                        </ul>
							                			</div>
							                			<div class="col-xl-3 col-lg-3 col-md-12">
							                				<a href="shop.php" class="megamenu-title">Product Types</a>
							                				<ul>
									                            <li><a href="shop.php">Hessian Shoes</a></li>
									                            <li><a href="shop.php">Postillion Shoes</a></li>
									                            <li><a href="shop.php">Cowboy Shoes</a></li>
									                            <li><a href="shop.php">Paddock Shoes</a></li>
									                            <li><a href="shop.php">Postillion Shoes</a></li>
									                            <li><a href="shop.php">Cowboy Shoes</a></li>
									                            <li><a href="shop.php">Paddock Shoes</a></li>
									                        </ul>
							                			</div>
							                		</div>
							                	</div>
							                </div>
							            </li>
							            <li class="dropdown">
							            	<span class="opener plus"></span>
							                <a href="blog-left.php">Blog</a>
							                <div class="megamenu">
							                	<div class="megamenu-inner">
							                		<ul>
									                    <li><a href="blog-left.php">Blog Left</a></li>
									                    <li><a href="blog-right.php">Blog Right</a></li>
									                    <li><a href="blog-detail.php">Blog Detail</a></li>
									                </ul>
							                	</div>
							                </div>
							            </li>
							            <li>
							                <a href="contact.php">Contact</a>
							            </li>
						            </ul>
						        </div>
					        </div>
					        <div class="search-right">
					        	<div class="menu-toggle"><span></span></div>
					        	<div class="search-menu">
						        	<input type="text" name="search" class="search-input" placeholder="Search text">
						        	<input type="submit" name="submit" class="search-btn">
						        	<div class="search-button-i transition">
						        		<img src="images/search.png" class="position-r transition" alt="search">
						        	</div>
						        </div>
						        <ul class="login-cart">
						        	<li>
						        		<div class="login-head">
								        	<a href="login.php"><i class="fa fa-user-o" aria-hidden="true"></i></a>
								        </div>
						        	</li>
						        	<li>
						        		<div class="cart-menu">
								        	<div class="cart-icon position-r">
								        		<img src="images/car-icon-w.png" class="position-r transition" alt="cart">
								        	</div>
								        	<div class="cart-dropdown header-link-dropdown">
												<ul class="cart-list link-dropdown-list">

												<?php 
	                                  if(!empty($_SESSION['cart'])){
                                        foreach($_SESSION['cart'] as $key =>$value){
										
									?>
													<li> 
													  	<a href="cart.php?action=remove&id=<?php echo $value['id']; ?>" class="close-cart"><i class="fa fa-times-circle"></i></a>
													    <figure> 
													    	<a href="product-detail.php?id=<?php echo $value['id']?>" class="pull-left"> 
													    		<img alt="product" src="php/product-img/<?php echo $value['image'];?>">
													    	</a>
													      	<figcaption> 
													      		<span>
													      			<a href="product-detail.php?id=<?php echo $value['id']?>"><?php echo $value['name'];?></a>
													      		</span>
													        	<p class="cart-price"><?php echo $value['sum'];?></p>
													        	<div class="product-qty">
													          		<label>Qty:</label>
													          		<div class="custom-qty">
													            		<input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty" disabled>
													          		</div>
													        	</div>
													      	</figcaption>
													    </figure>
													</li>
												<?php
												}
											}

											if(isset($_GET['action'])){
									
												if($_GET['action']== "remove"){
													foreach($_SESSION['cart'] as $key => $value){
														if($value['id']==$_GET['id']){
															unset($_SESSION['cart'][$key]);
															
														}
														}
												}
											}
											?>
												</ul>
												<p class="cart-sub-totle"> 
													<span class="pull-left">Cart Subtotal</span> 
													<span class="pull-right"><strong class="price-box">$29.98</strong></span> 
												</p>
												<div class="clearfix"></div>
												<div class="mt-20"> 
													<a href="cart.php" class="btn">Cart</a> 
													<a href="checkout.php" class="btn btn-color right-side">Checkout</a> 
												</div>
											</div>
								        </div>
						        	</li>
						        </ul>
					        </div>
					    </div>
					</div>
				</div>
			</header>

			<section class="home-banner">
				<div class="container">
				<?php 
						$mysqli=mysqli_connect('localhost','root','Rob.1323','xpod');
						   if(!$mysqli){
		                          die("Connect error".mysqli_connect_error()); 
		
	                       }
						   
						   
						   $query='SELECT * FROM slide WHERE hide_show="1" ORDER BY position DESC';
						   $result=mysqli_query($mysqli,$query);
						   while($row=mysqli_fetch_assoc($result)){
							 

				   ?>
					<div class="home-slider owl-carousel">
						<div class="banner-bg align-flax">
							<div class="w-100">
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-md-6 align-flax">
										<div class="banner-img"><img src="php/img/<?php echo $row['back_img'];?>" alt="banner"></div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 align-flax">
										<div class="banner-heading w-100">
											<label class="banner-top"><?php echo $row['sale_text'];?><span><?php echo $row['sale'];?>%</span><?php echo $row['sale_text1']?></label>
											<h2 class="banner-title"><?php echo $row['part1'];?> <span><?php echo $row['part2'];?></span></h2>
											<p class="banner-sub"><?php echo $row['text1'];?></p>
											<a href="product-detail.php?id=<?php echo $row['id']?>" class="btn">Shop now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php 
						   }
					?>
				
				</div>
			</section>

			<section class="featured pt-100">
				<div class="container">
					<div class="row mb-25">
						<div class="col-xl-6 col-lg-6 col-md-6">
							<div class="hading">
								<h2 class="hading-title">FEATURED <span>PRODUCTS</span></h2>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6">
							<ul id="tabs" class="product-isotop filters-product text-right text-uppercase nav nav-tabs" role="tablist">
								<li role="presentation" class="transition" data-filter="*">
									<a href="#all" class="active" role="tab" data-toggle="tab">all</a>
								</li>
								<li role="presentation" class="transition" data-filter=".shoes">
									<a href="#shoes" role="tab" data-toggle="tab">Shoes</a>
								</li>
								<li role="presentation" class="transition" data-filter=".women">
									<a href="#women" role="tab" data-toggle="tab">Women</a>
								</li>
								<li role="presentation" class="transition" data-filter=".accessories">
									<a href="#accessories" role="tab" data-toggle="tab">Accessories</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-content">
						<div role="tabpanel" class="row tab-pane fade active show" id="all">

						<?php				   
							$query='SELECT * FROM main_product WHERE hide_show="1" ORDER BY id DESC LIMIT 5';
						   $result=mysqli_query($mysqli,$query);
						   while($row=mysqli_fetch_assoc($result)){
							 

				   ?>
							<div class="featured-product mb-25">
								<div class="product-img transition mb-15">
									<a href="product-detail.php?id=<?php echo $row['id']?>">
										<img src="php/product-img/<?php echo $row['image']?>" alt="product" class="transition">
									</a>
									<div class="new-label">
										<span class="text-uppercase">New</span>
									</div>
									<div class="product-details-btn text-uppercase text-center transition">
										<a href="product-quick-view.php?id=<?php echo $row['id']?>" class="quick-popup mfp-iframe">Quick View</a>
									</div>
								</div>
								<div class="product-desc">
									<a href="product-detail.php?id=<?php echo $row['id']?>" class="product-name text-uppercase"><?php echo $row['name']?></a>
									<span class="product-pricce"><?php echo $row['sum']?></span>
								</div>
							</div>
						<?php }?>
							
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="offer-banner pt-70">
				<div class="container">
					<div class="offer-bg bg text-center ptb-120">
						<label class="banner-top text-uppercase">PROMOTION SALE <span>OFF 50%</span></label>
						<h1 class="banner-title text-uppercase"><span>the</span> summer</h1>
						<p class="banner-sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
						<a href="product-detail.php" class="btn">Shop now</a>
					</div>
				</div>
			</section>

			<section class="best-seller pt-100">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="row">
								<div class="col-xl-6 col-lg-6 col-md-6">
									<div class="hading pb-20">
										<h2 class="hading-title">best <span>seller</span></h2>
									</div>
									<div class="seller">
										<div class="seller-box align-flax w-100 pb-20">
											<div class="seller-img">
												<a href="product-detail.php" class="display-b">
													<img src="images/product-1.jpg" alt="shoes" class="transition">
												</a>
											</div>
											<div class="seller-contain pl-15">
												<a href="product-detail.php" class="product-name text-uppercase">men's harpoon 2 eye boot</a>
												<span class="product-pricce">$478.00</span>
											</div>
										</div>
										<div class="seller-box align-flax w-100 pb-20">
											<div class="seller-img">
												<a href="product-detail.php" class="display-b">
													<img src="images/product-7.jpg" alt="shoes" class="transition">
												</a>
											</div>
											<div class="seller-contain pl-15">
												<a href="product-detail.php" class="product-name text-uppercase">BUSCIPIT AT MAGNA</a>
												<span class="product-pricce">$478.00</span>
											</div>
										</div>
										<div class="seller-box align-flax w-100 pb-20">
											<div class="seller-img">
												<a href="product-detail.php" class="display-b">
													<img src="images/product-3.jpg" alt="shoes" class="transition">
											</a>
											</div>
											<div class="seller-contain pl-15">
												<a href="product-detail.php" class="product-name text-uppercase">AENEAN SAGITTIS</a>
												<span class="product-pricce">$478.00</span>
											</div>
										</div>
										<div class="seller-box align-flax w-100 pb-20">
											<div class="seller-img">
												<a href="product-detail.php" class="display-b">
													<img src="images/product-1.jpg" alt="shoes" class="transition">
												</a>
											</div>
											<div class="seller-contain pl-15">
												<a href="product-detail.php" class="product-name text-uppercase">men's harpoon 2 eye boot</a>
												<span class="product-pricce">$478.00</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6">
									<div class="hading pb-20">
										<h2 class="hading-title">top <span>seller</span></h2>
									</div>
									<div class="seller">
										<div class="seller-box align-flax w-100 pb-20">
											<div class="seller-img">
												<a href="product-detail.php" class="display-b">
													<img src="images/product-4.jpg" alt="shoes" class="transition">
												</a>
											</div>
											<div class="seller-contain pl-15">
												<a href="product-detail.php" class="product-name text-uppercase">ALIQUAM LOBORTIS EST</a>
												<span class="product-pricce">$478.00</span>
											</div>
										</div>
										<div class="seller-box align-flax w-100 pb-20">
											<div class="seller-img">
												<a href="product-detail.php" class="display-b">
													<img src="images/product-10.jpg" alt="shoes" class="transition">
												</a>
											</div>
											<div class="seller-contain pl-15">
												<a href="product-detail.php" class="product-name text-uppercase">ELEIFEND ARCU</a>
												<span class="product-pricce">$478.00</span>
											</div>
										</div>
										<div class="seller-box align-flax w-100 pb-20">
											<div class="seller-img">
												<a href="product-detail.php" class="display-b">
													<img src="images/product-2.jpg" alt="shoes" class="transition">
												</a>
											</div>
											<div class="seller-contain pl-15">
												<a href="product-detail.php" class="product-name text-uppercase">AENEAN EU TRISTIQUE</a>
												<span class="product-pricce">$478.00</span>
											</div>
										</div>
										<div class="seller-box align-flax w-100 pb-20">
											<div class="seller-img">
												<a href="product-detail.php" class="display-b">
													<img src="images/product-6.jpg" alt="shoes" class="transition">
												</a>
											</div>
											<div class="seller-contain pl-15">
												<a href="product-detail.php" class="product-name text-uppercase">BLIQUAM LOBORTIS</a>
												<span class="product-pricce">$478.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-12 col-md-12">
							<div class="offer-week">
								<div class="row align-flax">
									<div class="col-xl-5 col-lg-5 col-md-5">
										<div class="week-img transition">
											<a href="product-detail.php" class="display-b">
												<img src="images/week-sale.jpg" class="w-100" alt="shoes">
											</a>
										</div>
									</div>
									<div class="col-xl-7 col-lg-7 col-md-7">
										<div class="week-contain">
											<h2 class="week-head text-uppercase pb-15">offer of the week</h2>
											<p class="week-sub">Welcome to Xpoge shoes Store 20% off</p>
											<div class="star-rating pb-10">
										      	<input id="star-5" type="radio" name="rating" value="star-5" />
										      	<label for="star-5" title="5 stars" class="transition">
										        	<i class="active fa fa-star" aria-hidden="true"></i>
										      	</label>
										      	<input id="star-4" type="radio" name="rating" value="star-4" checked/>
										      	<label for="star-4" title="4 stars" class="transition">
										        	<i class="active fa fa-star" aria-hidden="true"></i>
										      	</label>
										      	<input id="star-3" type="radio" name="rating" value="star-3" />
										      	<label for="star-3" title="3 stars" class="transition">
										        	<i class="active fa fa-star" aria-hidden="true"></i>
										      	</label>
										      	<input id="star-2" type="radio" name="rating" value="star-2" />
										      	<label for="star-2" title="2 stars" class="transition">
										        	<i class="active fa fa-star" aria-hidden="true"></i>
										      	</label>
										      	<input id="star-1" type="radio" name="rating" value="star-1" />
										      	<label for="star-1" title="1 star" class="transition">
										        	<i class="active fa fa-star" aria-hidden="true"></i>
										      	</label>
										    </div>
											<div class="price-d pb-25">
												<label class="price-r pr-30">$478.00</label>
												<label class="price-o">$378.00</label>
											</div>
											<ul class="countdown text-uppercase">
												<li class="text-center">
													<span id="days" class="counter-timer display-b text-center">08</span>
													<label class="day-name">days</label>
												</li>
												<li class="text-center">
													<span id="hours" class="counter-timer display-b text-center">16</span>
													<label class="day-name">hour</label>
												</li>
												<li class="text-center">
													<span id="minutes" class="counter-timer display-b text-center">36</span>
													<label class="day-name">min</label>
												</li>
												<li class="text-center">
													<span id="seconds" class="counter-timer display-b text-center">45</span>
													<label class="day-name">sec</label>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="team pt-100">
				<div class="container">
					<div class="team-inner owl-carousel">
						<div class="team-slide text-center">
							<div class="team-img position-r">
								<img src="images/team-1.jpg" alt="team">
								<span class="quote-c"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
							</div>
							<div class="team-desc">
								<p class="member-detail">make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was make a type specimen book. It has survived not only five centuries.</p>
								<h3 class="member-name text-uppercase">john Doe</h3>
							</div>
						</div>
						<div class="team-slide text-center">
							<div class="team-img position-r">
								<img src="images/team-1.jpg" alt="team">
								<span class="quote-c"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
							</div>
							<div class="team-desc">
								<p class="member-detail">make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was make a type specimen book. It has survived not only five centuries.</p>
								<h3 class="member-name text-uppercase">john Doe</h3>
							</div>
						</div>
						<div class="team-slide text-center">
							<div class="team-img position-r">
								<img src="images/team-1.jpg" alt="team">
								<span class="quote-c"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
							</div>
							<div class="team-desc">
								<p class="member-detail">make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was make a type specimen book. It has survived not only five centuries.</p>
								<h3 class="member-name text-uppercase">john Doe</h3>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="latest-blog pt-100">
				<div class="container">
					<div class="latest-blog-inner">
						<div class="hading pb-20">
							<h2 class="hading-title">latest<span>blog</span></h2>
						</div>
						<div class="latest-blog-salid owl-carousel">
							<div class="row align-flax pr-30">
								<div class="col-xl-5 col-lg-5 col-md-5">
									<div class="latest-blog-img">
										<a href="blog-detail.php" class="display-b">
											<img src="images/blog-1.jpg" alt="blog">
										</a>
									</div>
								</div>
								<div class="col-xl-7 col-lg-7 col-md-7">
									<div class="lat-blog-desc">
										<a href="blog-detail.php" class="lat-blog-title text-uppercase">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
										<p class="lat-blog-date text-uppercase"><span>john doe</span> - APRIL 18, 2015 AT 5.00 PM</p>
										<p class="lat-blog-detail">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even</p>
										<a href="blog-detail.php" class="btn-2">Read More</a>
									</div>
								</div>
							</div>
							<div class="row align-flax pr-30">
								<div class="col-xl-5 col-lg-5 col-md-5">
									<div class="latest-blog-img">
										<a href="blog-detail.php" class="display-b">
											<img src="images/blog-2.jpg" alt="blog">
										</a>
									</div>
								</div>
								<div class="col-xl-7 col-lg-7 col-md-7">
									<div class="lat-blog-desc">
										<a href="blog-detail.php" class="lat-blog-title text-uppercase">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
										<p class="lat-blog-date text-uppercase"><span>john doe</span> - APRIL 18, 2015 AT 5.00 PM</p>
										<p class="lat-blog-detail">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even</p>
										<a href="blog-detail.php" class="btn-2">Read More</a>
									</div>
								</div>
							</div>
							<div class="row align-flax pr-30">
								<div class="col-xl-5 col-lg-5 col-md-5">
									<div class="latest-blog-img">
										<a href="blog-detail.php" class="display-b">
											<img src="images/blog-1.jpg" alt="blog">
										</a>
									</div>
								</div>
								<div class="col-xl-7 col-lg-7 col-md-7">
									<div class="lat-blog-desc">
										<a href="blog-detail.php" class="lat-blog-title text-uppercase">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
										<p class="lat-blog-date text-uppercase"><span>john doe</span> - APRIL 18, 2015 AT 5.00 PM</p>
										<p class="lat-blog-detail">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even</p>
										<a href="blog-detail.php" class="btn-2">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="brand pt-100">
				<div class="container">
					<div class="brand-salider owl-carousel">
						<div class="brand-box text-center">
							<a href="#"><img src="images/brand-1.jpg" alt="brand" class="transition"></a>
						</div>
						<div class="brand-box text-center">
							<a href="#"><img src="images/brand-2.jpg" alt="brand" class="transition"></a>
						</div>
						<div class="brand-box text-center">
							<a href="#"><img src="images/brand-3.jpg" alt="brand" class="transition"></a>
						</div>
						<div class="brand-box text-center">
							<a href="#"><img src="images/brand-4.jpg" alt="brand" class="transition"></a>
						</div>
						<div class="brand-box text-center">
							<a href="#"><img src="images/brand-5.jpg" alt="brand" class="transition"></a>
						</div>
						<div class="brand-box text-center">
							<a href="#"><img src="images/brand-6.jpg" alt="brand" class="transition"></a>
						</div>
						<div class="brand-box text-center">
							<a href="#"><img src="images/brand-1.jpg" alt="brand" class="transition"></a>
						</div>
						<div class="brand-box text-center">
							<a href="#"><img src="images/brand-2.jpg" alt="brand" class="transition"></a>
						</div>
						<div class="brand-box text-center">
							<a href="#"><img src="images/brand-4.jpg" alt="brand" class="transition"></a>
						</div>
					</div>
				</div>
			</div>

			<section class="newsletter pt-100">
				<div class="container">
					<div class="newsletter-inner text-center ptb-100">
						<h2 class="newsletter-title">Sign up for Newsletter</h2>
						<p class="newsletter-sub">Wants to get latest updates! sign up for Free</p>
						<form>
						  <div class="form-group">
						    <input type="email" class="form-control" placeholder="Your email address" required>
						  </div>
						  <button type="submit" class="form-btn text-uppercase">
							<span class="sub-r">Subscribe</span> 
							<i class="fa fa-send icon-r"></i>
						</button>
						</form>
					</div>
				</div>
			</section>

			<div class="top-scrolling">
				<a href="#main" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
			</div>

			<footer class="footer pt-100">
				<div class="container">
					<div class="footer-inner">
						<div class="footer-box">
							<div class="footer-logo">
								<a href="indexx.php"><img src="images/logo.png" alt="logo"></a>
							</div>
							<p class="footer-desc">Lorem ipsum dolor sit amet, consectetur adipi-scing elit. In purus sem, consectetur sed aliquam vel, hendrerit in elit. Nunc interdum dolor at quam pulvinar sodales. Nunc venenatis egestas mi ac fermentum.</p>
						</div>
						<div class="footer-box footer-static">
							<span class="opener plus"></span>
							<h2 class="footer-title text-uppercase">Our company</h2>
							<ul class="footer-block-contant">
								<li><a href="#">My Account</a></li>
								<li><a href="#">Order History</a></li>
								<li><a href="wishlist.php">Wish List</a></li>
								<li><a href="#">Newsletter</a></li>
								<li><a href="#">Site Map</a></li>
								<li><a href="#">Gift Certificates</a></li>
							</ul>
						</div>
						<div class="footer-box footer-static">
							<span class="opener plus"></span>
							<h2 class="footer-title text-uppercase">Information</h2>
							<ul class="footer-block-contant">
								<li><a href="about.php">About Us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="contact.php">Contact Us</a></li>
								<li><a href="#">Brands</a></li>
							</ul>
						</div>
						<div class="footer-box footer-static m-0">
							<span class="opener plus"></span>
							<h2 class="footer-title text-uppercase">Your Account</h2>
							<ul class="footer-block-contant">
								<li><a href="#">Running Shoes</a></li>
								<li><a href="#">Football Shoes</a></li>
								<li><a href="#">Basketball Shoes</a></li>
								<li><a href="#">Volleyball Shoes</a></li>
								<li><a href="#">Trainee Shoes</a></li>
							</ul>
						</div>
						<div class="footer-box footer-contact footer-static m-0">
							<span class="opener plus"></span>
							<h2 class="footer-title text-uppercase">Contact us</h2>
							<ul class="footer-block-contant">
								<li><img src="images/cont-1.png" alt="img"><span>28 Green Tower, Street Name <br>New York City, USA</span></li>
								<li><img src="images/cont-2.png" alt="img"><a href="tel:+911234567890">+ 91 123 456 789 0</a></li>
								<li><img src="images/cont-3.png" alt="img"><a href="mailto:xpoge@example.com">xpoge@example.com</a></li>
							</ul>
						</div>
					</div>
					<div class="copy-right mt-100">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-12">
								<p class="copyright-text">&#169; Xpoge all Rights Reserverd theme by <a href="https://templatescoder.com/" target="_blank">TemplatesCoder</a></p>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-12">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/custom.js"></script>
		<script>
			/* ------------ Newslater-popup JS Start ------------- */
				$(window).on('load', function(){
					setTimeout(function(){
						mfp = $.magnificPopup.instance; 
						if(!mfp.isOpen) {
						    jQuery.magnificPopup.open({
						    	items: {src: '#newslater-popup'},type: 'inline'
						    }, 0);
						}
					},10000)
				});
		    /* ------------ Newslater-popup JS End ------------- */
		</script>
	</body>

</html>
