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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/glass-case.css">
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

		<div class="main" id="main">
			<header class="header transition">
				<div class="container position-r">
					<div class="row">
						<div class="col-lg-2 col-md-4 col-6 align-flax">
				            <div class="navbar-header">
					            <a class="navbar-brand" hre">
					                <img alt="logo" src="images/logo.png" class="transition">
					            </a> 
				            </div>
					    </div>
					    <div class="col-lg-10 col-md-8 col-6 position-i">
					       	<div class="menu-left transition">
						        <div class="menu" >
						            <ul>
							            <li>
							                <a hre">Home</a>
							            </li>
							            <li class="dropdown">
							            	<span class="opener plus"></span>
							                <a href="shop.html">Pages</a>
							                <div class="megamenu">
							                	<div class="megamenu-inner">
							                		<ul>
							                			<li><a href="about.html">About Us</a></li>
									                    <li><a href="shop-list.html">Shop List</a></li>
									                    <li><a href="product-detail.php">Product Detail</a></li>
									                    <li><a href="wishlist.php">Wishlist</a></li>
									                    <li><a href="404.html">404</a></li>
									                </ul>
							                	</div>
							                </div>
							            </li>
							            <li class="dropdown">
							            	<span class="opener plus"></span>
							                <a href="shop.html">Shop</a>
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
							                				<a href="shop.html" class="megamenu-title">Chap Shoes</a>
							                				<ul>
									                            <li><a href="shop.html">Hessian Shoes</a></li>
									                            <li><a href="shop.html">Postillion Shoes</a></li>
									                            <li><a href="shop.html">Cowboy Shoes</a></li>
									                            <li><a href="shop.html">Paddock Shoes</a></li>
									                            <li><a href="shop.html">Postillion Shoes</a></li>
									                            <li><a href="shop.html">Cowboy Shoes</a></li>
									                            <li><a href="shop.html">Paddock Shoes</a></li>
									                        </ul>
							                			</div>
							                			<div class="col-xl-3 col-lg-3 col-md-12">
							                				<a href="shop.html" class="megamenu-title">Fashion Shoes</a>
							                				<ul>
									                            <li><a href="shop.html">Opinga</a></li>
									                            <li><a href="shop.html">Rocker Bottom</a></li>
									                            <li><a href="shop.html">Clog</a></li>
									                            <li><a href="shop.html">Driving Moccasins</a></li>
									                            <li><a href="shop.html">High Heeled</a></li>
									                            <li><a href="shop.html">Rocker Bottom</a></li>
									                            <li><a href="shop.html">Clog</a></li>
									                        </ul>
							                			</div>
							                			<div class="col-xl-3 col-lg-3 col-md-12">
							                				<a href="shop.html" class="megamenu-title">Product Types</a>
							                				<ul>
									                            <li><a href="shop.html">Hessian Shoes</a></li>
									                            <li><a href="shop.html">Postillion Shoes</a></li>
									                            <li><a href="shop.html">Cowboy Shoes</a></li>
									                            <li><a href="shop.html">Paddock Shoes</a></li>
									                            <li><a href="shop.html">Postillion Shoes</a></li>
									                            <li><a href="shop.html">Cowboy Shoes</a></li>
									                            <li><a href="shop.html">Paddock Shoes</a></li>
									                        </ul>
							                			</div>
							                		</div>
							                	</div>
							                </div>
							            </li>
							            <li class="dropdown">
							            	<span class="opener plus"></span>
							                <a href="blog-left.html">Blog</a>
							                <div class="megamenu">
							                	<div class="megamenu-inner">
							                		<ul>
									                    <li><a href="blog-left.html">Blog Left</a></li>
									                    <li><a href="blog-right.html">Blog Right</a></li>
									                    <li><a href="blog-detail.html">Blog Detail</a></li>
									                </ul>
							                	</div>
							                </div>
							            </li>
							            <li>
							                <a href="contact.html">Contact</a>
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
													            		<input type="text" name="qty"  maxlength="8" value="1" title="Qty" class="input-text qty" disabled>
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
													<a href="checkout.html" class="btn btn-color right-side">Checkout</a> 
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

			<section class="page-banner">
				<div class="container">
					<div class="page-banner-in">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-12">
								<h1 class="page-banner-title text-uppercase">Shop</h1>
							</div>
							<div class="col-xl-6 col-lg-6 col-12">
								<ul class="right-side">
									<li><a href="indexx.php">Home</a></li>
									<li><a href="shop.html">Shop</a></li>
									<li>Shop Detail</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="product-detail-main pt-100">
				<div class="container">
				<?php 
						$mysqli=mysqli_connect('localhost','root','Rob.1323','xpod');
						   if(!$mysqli){
		                          die("Connect error".mysqli_connect_error()); 
		
	                       }
						   

						   $query4='SELECT * FROM main_product WHERE id="'.$_GET['id'].'"';
						   					  
						    $result4=mysqli_query($mysqli,$query4);
						   $row=mysqli_fetch_assoc($result4); 
					
							 
                     ?>
					<div class="row">
						
						<div class="col-lg-5 col-md-6 col-12">
							<div class="align-center mb-md-30">
					            <ul id="glasscase" class="gc-start">
					                <li><img src="php/product-img/<?php echo $row['image'];?>" alt="product" /></li>
								<?php
							$query='SELECT * FROM images WHERE product_id="'.$_GET['id'].'"';
						   $result=mysqli_query($mysqli,$query);
						   while($row1=mysqli_fetch_assoc($result)){
							?>
					                <li><img src="php/product-img/<?php echo $row1['name'];?>" alt="product" /></li>
								<?php 
						   }
								?>
					            </ul>
					        </div>
						</div>
						<div class="col-lg-7 col-md-6 col-12">
							<div class="product-detail-in">
								<h2 class="product-item-name text-uppercase"><?php echo $row['name']?></h2>
								<div class="price-box"> 
									<span class="price"><?php echo $row['sum']?></span> 
				                    <del class="price old-price"><?php echo $row['old_sum']?></del>
				                    <div class="rating-summary-block">
					                    <div class="star-rating">
									      	<input id="star-5" type="radio" name="rating" value="star-5" />
									      	<label for="star-5" title="5 stars">
									        	<i class="active fa fa-star" aria-hidden="true"></i>
									      	</label>
									      	<input id="star-4" type="radio" name="rating" value="star-4" />
									      	<label for="star-4" title="4 stars">
									        	<i class="active fa fa-star" aria-hidden="true"></i>
									      	</label>
									      	<input id="star-3" type="radio" name="rating" value="star-3" />
									      	<label for="star-3" title="3 stars">
									        	<i class="active fa fa-star" aria-hidden="true"></i>
									      	</label>
									      	<input id="star-2" type="radio" name="rating" value="star-2" />
									      	<label for="star-2" title="2 stars">
									       		<i class="active fa fa-star" aria-hidden="true"></i>
									      	</label>
									      	<input id="star-1" type="radio" name="rating" value="star-1" />
									      	<label for="star-1" title="1 star">
									        	<i class="active fa fa-star" aria-hidden="true"></i>
									      	</label>
									    </div>
									    <a href="#product-review" class="scrollTo"><span>1 Review (s)</span></a>
									</div>
									<div class="product-des">
		                				<p><?php echo $row['main_text']?></p>
		                			</div>
		                			<ul>
									<?php
							                $query='SELECT * FROM subject WHERE product_id="'.$_GET['id'].'"';

						                    $result=mysqli_query($mysqli,$query);
						                    while($row8=mysqli_fetch_assoc($result)){
							                ?>
				                        <li><i class="fa fa-check"></i> <?php echo $row8['subj']?></li>
										<?php }?>
				                    </ul>
				                    <div class="row mt-20">
				                    	<div class="col-12">
				                        	<div class="table-listing qty">
				                        		<label>Qty:</label>
				                        		<div class="fill-input">
				                        			<button type="button" id="sub" class="sub cou-sub">
				                        				<i class="fa fa-minus" aria-hidden="true"></i>
				                        			</button>
    												<input type="number" id="qty1" name="qty" class="input-text qty" data-id="<?php echo $_GET['id']?>" value="1" min="1" max="3" />
    												<button type="button" id="add" class="add cou-sub">
    													<i class="fa fa-plus" aria-hidden="true"></i>
    												</button>
													<p id="result"></p>

				                        		</div>
					                        </div>
					                        <div class="table-listing qty">
				                        		<label>Size:</label>
				                        		<div class="fill-input">
				                        			<select class="selectpicker full">
									                    <option selected="selected" value="#"></option>
														<?php
							                $query='SELECT * FROM size WHERE product_id="'.$_GET['id'].'"';

						                    $result=mysqli_query($mysqli,$query);
						                    while($row2=mysqli_fetch_assoc($result)){
							                ?>
									                    <option value="<?php echo $row2['id']?>"><?php echo $row2['size']?></option>
														<?php
						   }
														?>
									               	</select>
				                        		</div>
					                        </div>
					                        <div class="table-listing qty">
				                        		<label>Color:</label>
				                        		<div class="fill-input">
				                        			<select class="selectpicker full">
									                    <option selected="selected" value="#"></option>
                                                  <?php 
												  $query2='SELECT * FROM color WHERE product_id="'.$_GET['id'].'"';
												  $result1=mysqli_query($mysqli,$query2);
						   							while($row3=mysqli_fetch_assoc($result1)){
												  ?>
									                    <option value="<?php echo $row3['id']?>"><?php echo $row3['color']?></option>
														<?php } ?>
									               	</select>
				                        		</div>
					                        </div>
					                        <div class="product-action">
												<ul>
													<li>
												
														<a href="cart.php?id=<?php echo $_GET['id']?>" name="add_cart" id="addToCartButton" class="btn btn-color " data-id="<?php echo $_GET['id'];?>">
													
															<img src="images/shop-bag.png" alt="bag">
															<span>add to cart</span>
														</a>
													</li>
													<li><a href="wishlist.php?id=<?php echo $_GET['id']?>" class="btn"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
												</ul>
											</div>
				                        </div>
				                    </div>
				                </div>
							</div>
						</div>
					</div>
					
				</div>
			</section>

			<section class="product-detail-tab pt-100" id="product-review">
				<div class="container">
					<div class="product-review">
						<ul id="tabs" class="review-tab nav nav-tabs" role="tablist">
							<li role="presentation" class="tab-link">
								<a href="#description" role="tab" class="active" data-toggle="tab">Description</a>
							</li>
							<li role="presentation" class="tab-link">
								<a href="#review" role="tab" data-toggle="tab">Review</a>
							</li>
						</ul>
						<div class="product-review-des tab-content">
							<?php 
							$query5 = 'SELECT * FROM `describe` WHERE product_id="'.$_GET['id'].'"';
							$result5=mysqli_query($mysqli,$query5);
						     $row5=mysqli_fetch_assoc($result5);
							?>
							<div role="tabpanel" class="product-review-in product-review-des tab-pane fade active show" id="description">

								<h2><?php echo $row5['des_name'];?></h2>
								<p><?php echo $row5['description'];?></p>
								<ul>
								<?php 
												  $query2='SELECT * FROM desc_subj WHERE product_id="'.$_GET['id'].'"';
												  $result1=mysqli_query($mysqli,$query2);
						   							while($row10=mysqli_fetch_assoc($result1)){
												  ?>
				                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $row10['des_subj']?></li>
									<?php }?>
				                </ul>
							</div>
						
							<div role="tabpanel" class="product-review-in product-review-com tab-pane fade" id="review">
								<div class="comment-part">
									<h3>03 COMMENTS</h3>
									<ul>
										<li>
											<div class="comment-user">
												<img src="images/comment-img1.jpg" alt="comment-img">
											</div>
											<div class="comment-detail">
												<span class="commenter">
													<span>John Doe</span> (05 Jan 2020)
												</span>
												<p>Lorem ipsum dolor sit amet adipiscing elit labore dolore that sed do eiusmod tempor labore dolore that magna aliqua. Ut enim ad minim veniam, exercitation.</p>
												<a href="#" class="reply-btn btn btn-color small">Reply</a>
											</div>
											<div class="clearfix"></div>
										</li>
										<li>
											<ul>
												<li>
													<div class="comment-user">
														<img src="images/comment-img2.jpg" alt="comment-img">
													</div>
													<div class="comment-detail">
														<span class="commenter">
															<span>John Doe</span> (12 Jan 2020)
														</span>
														<p>Lorem ipsum dolor sit amet adipiscing elit labore dolore that sed do eiusmod tempor labore dolore that magna aliqua. Ut enim ad minim veniam, exercitation.</p>
														<a href="#" class="reply-btn btn btn-color small">Reply</a>
													</div>
													<div class="clearfix"></div>
												</li>
												<li>
													<div class="comment-user">
														<img src="images/comment-img3.jpg" alt="comment-img">
													</div>
													<div class="comment-detail">
														<span class="commenter">
															<span>John Doe</span> (15 Jan 2020)
														</span>
														<p>Lorem ipsum dolor sit amet adipiscing elit labore dolore that sed do eiusmod tempor labore dolore that magna aliqua. Ut enim ad minim veniam, exercitation.</p>
														<a href="#" class="reply-btn btn btn-color small">Reply</a>
													</div>
													<div class="clearfix"></div>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="leave-comment-part pt-100">
									<h3 class="reviews-head mb-30">Leave A Comment</h3>
									<form class="main-form">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Name" required>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Subject" required>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Email" required>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<textarea class="form-control" placeholder="Message" rows="8"></textarea>
												</div>
											</div>
											<div class="col-12">
												<button type="submit" class="btn post-comm">Post Comment</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="featured pt-100">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h2 class="related-title">Related Product</h2>
						</div>
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
									<a href="product-quick-view.php?id=<?php echo $row['id']?>" class="quick-popup">Quick View</a>
								</div>
							</div>
							<div class="product-desc">
								<a href="product-detail.php?id=<?php echo $row['id']?>" class="product-name text-uppercase"><?php echo $row['name']?></a>
								<span class="product-pricce"><?php echo $row['sum']?></span>
							</div>
						</div>
						
				<?php 
						   }
				?>
						
						
					</div>
				</div>
			</section>

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
								<a ><img src="images/logo.png" alt="logo"></a>
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
								<li><a href="about.html">About Us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="contact.html">Contact Us</a></li>
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
		<script src="js/modernizr.js"></script>
		<script src="js/custom.js"></script>
		<script>
	        $(document).ready( function () {
	            //If your <ul> has the id "glasscase"
	            $('#glasscase').glassCase({ 
	            	'thumbsPosition': 'bottom', 
	            	'widthDisplayPerc' : 100,
	            	isDownloadEnabled: false,
	            });
	        });

			//$(document).ready(function() {
    // Use event delegation to ensure the click event works for dynamically added elements
   /* $(document).on('click', '.btn-color', function() {
        var product_id = $(this).attr("data-id");
        $.ajax({
            type: "GET",
            url: "cart.php",
            data: { product_id: product_id },
            success: function(response) {
                alert('Product added successfully');
            }
        });
    });
});*/

/*$(document).ready(function() {
    $('.qty').on('change', function() {
        var productId = $(this).data("id");
        var quantity = $(this).val();
        
        $.ajax({
            type: "POST",
            url: "cart.php",
            data: { product_id: productId, quantity: quantity },
            success: function(response) {
                alert('Product added successfully');
            }
        });
    });
});*/

	    </script>
	</body>
	
</html>
