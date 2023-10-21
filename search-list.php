<?php 
	$mysqli = mysqli_connect('localhost', 'root' , 'Rob.1323' , 'xpod') ;
	if(!$mysqli){
		die('Connect error'.mysqli_connect_error()) ;  
	} 
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
    <link rel="stylesheet" type="text/css" href="css/shoes.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
	</head>
	<body>

		<!-- Start preloader -->
		<!--<div id="preloader"></div>-->
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
					            <a class="navbar-brand" href="indexx.php">
					                <img alt="logo" src="images/logo.png" class="transition">
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
                                    <form action="search-list.php" method="get">
						        	<input type="text" name="user_text" class="search-input" placeholder="Search text">
						        	<input type="submit" name="search" class="search-btn">
                                </form>
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
													<li> 
													  	<a href="javascript:void(0)" class="close-cart"><i class="fa fa-times-circle"></i></a>
													    <figure> 
													    	<a href="product-detail.php" class="pull-left"> 
													    		<img alt="product" src="images/product-1.jpg">
													    	</a>
													      	<figcaption> 
													      		<span>
													      			<a href="product-detail.php">Men's Full Sleeves Collar Shirt</a>
													      		</span>
													        	<p class="cart-price">$14.99</p>
													        	<div class="product-qty">
													          		<label>Qty:</label>
													          		<div class="custom-qty">
													            		<input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty" disabled>
													          		</div>
													        	</div>
													      	</figcaption>
													    </figure>
													</li>
													<li> 
														<a class="close-cart"><i class="fa fa-times-circle"></i></a>
													    <figure> 
													    	<a href="product-detail.php" class="pull-left"> 
													    		<img alt="product" src="images/product-2.jpg">
													    	</a>
													      	<figcaption> 
													      		<span>
													      			<a href="product-detail.php">Women's Cape Jacket</a>
													      		</span>
													        	<p class="cart-price">$14.99</p>
													        	<div class="product-qty">
													          		<label>Qty:</label>
													          		<div class="custom-qty">
													            		<input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty" disabled>
													          		</div>
													        	</div>
													      	</figcaption>
													    </figure>
													</li>
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
									<li>Shop-List</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="product-list">
				<div class="container">
					<div class="row pt-100">
						<div class="col-xl-3 col-lg-4 col-12">
							<div class="sidebar">
								<div class="sidebar-default mb-30">
									<div class="category-content">
										<h2 class="cat-title text-uppercase">women</h2>
										<ul class="category category-drop-down">
											<li>
												<span class="opener plus"></span>
												<a href="javascript:void(0)">Top</a>
												<ul class="category-sub">
													<li><a href="#">Mid Waterproof</a></li>
													<li><a href="#">Brogue shoe</a></li>
													<li><a href="#">Firecamp</a></li>
													<li><a href="#">Forclaz</a></li>
												</ul>
											</li>
											<li>
												<span class="opener plus"></span>
												<a href="javascript:void(0)">Dresses</a>
												<ul class="category-sub">
													<li><a href="#">Mid Waterproof</a></li>
													<li><a href="#">Brogue shoe</a></li>
													<li><a href="#">Firecamp</a></li>
													<li><a href="#">Forclaz</a></li>
												</ul>
											</li>
											<li>
												<span class="opener plus"></span>
												<a href="javascript:void(0)">Celebrities dress</a>
												<ul class="category-sub">
													<li><a href="#">Mid Waterproof</a></li>
													<li><a href="#">Brogue shoe</a></li>
													<li><a href="#">Firecamp</a></li>
													<li><a href="#">Forclaz</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
								<div class="sidebar-default mb-30">
									<div class="category-content">
										<h2 class="cat-title text-uppercase">Filter By</h2>
										<a class="btn small btn-filter" href="#">
											<i class="fa fa-close"></i><span>Clear all</span>
										</a>
									</div>
									<div class="category-content filter-by">
										<h2 class="cat-title text-uppercase">Categories</h2>
										<ul class="category">
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="Tops" name="Tops">
													<label for="Tops">Tops (08)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="Dresses" name="Dresses">
													<label for="Dresses">Dresses (10)</label>
												</div>
											</li>
										</ul>
									</div>
									<div class="category-content filter-by">
										<h2 class="cat-title text-uppercase">Size</h2>
										<ul class="category">
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="s1" name="s">
													<label for="s1">S</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="m" name="m">
													<label for="m">M</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="l" name="l">
													<label for="l">L</label>
												</div>
											</li>
										</ul>
									</div>
									<div class="category-content filter-by">
										<h2 class="cat-title text-uppercase">Color</h2>
										<ul class="category">
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="Beige" name="Beige">
													<label for="Beige" class="beige">Beige (1)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="White" name="White">
													<label for="White" class="white">White (2)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="Black" name="Black">
													<label for="Black" class="black">Black (2)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="Orange" name="Orange">
													<label for="Orange" class="orange">Orange (3)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="Blue" name="Blue">
													<label for="Blue" class="blue">Blue (2)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="Green" name="Green">
													<label for="Green" class="green">Green (1)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="Yellow" name="Yellow">
													<label for="Yellow" class="yellow">Yellow (3)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="Pink" name="Pink">
													<label for="Pink" class="pink">Pink (1)</label>
												</div>
											</li>
										</ul>
									</div>
									<div class="category-content filter-by">
										<h2 class="cat-title text-uppercase">Styles</h2>
										<ul class="category">
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="Casual" name="Casual">
													<label for="Casual">Casual (9)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="Dressy" name="Dressy">
													<label for="Dressy">Dressy (1)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="Girly" name="Girly">
													<label for="Girly">Girly (3)</label>
												</div>
											</li>
										</ul>
									</div>
									<div class="category-content filter-by">
										<h2 class="cat-title text-uppercase">Compositions</h2>
										<ul class="category">
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="Cotton" name="Cotton">
													<label for="Cotton">Cotton (8)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="Viscose" name="Viscose">
													<label for="Viscose">Viscose (1)</label>
												</div>
											</li>
										</ul>
									</div>
									<div class="category-content filter-by">
										<h2 class="cat-title text-uppercase">Price</h2>
										<ul class="category">
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="price_1" name="Cotton">
													<label for="price_1">$68.00 - $72.00 (2)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="price_2" name="Cotton">
													<label for="price_2">$86.00 - $89.00 (1)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="price_3" name="Cotton">
													<label for="price_3">$99.00 - $103.00 (3)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="price_4" name="Cotton">
													<label for="price_4">$104.00 - $108.00 (2)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="price_5" name="Cotton">
													<label for="price_5">$109.00 - $113.00 (1)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="price_6" name="Cotton">
													<label for="price_6">$126.00 - $135.00 (2)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="price_7" name="Cotton">
													<label for="price_7">$209.00 - $217.00 (3)</label>
												</div>
											</li>
											<li>
												<div class="check-box">
													<input type="checkbox" class="checkbox" id="price_8" name="Cotton">
													<label for="price_8">$309.00 - $321.00 (1)</label>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="sidebar-default">
									<div class="category-content">
										<h2 class="cat-title latest-prod text-uppercase">Latest products</h2>
										<div class="seller">
											<div class="seller-box align-flax w-100 pb-10">
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
											<div class="seller-box align-flax w-100 pb-10">
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
											<div class="seller-box align-flax w-100 pb-10">
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
											<div class="seller-box align-flax w-100">
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
								</div>
							</div>
						</div>
						<div class="col-xl-9 col-lg-8 col-12">
							<div class="shorting mb-30">
						        <div class="row align-flax">
						            <div class="col-xl-6 col-lg-5 col-md-6 mb-r-15">
						                <div class="view">
						                  	<div class="list-types grid"> 
						                  		<a href="shop.php">
						                    		<div class="grid-icon list-types-icon">
						                    			<i class="fa fa-th-large transition" aria-hidden="true"></i>
						                    		</div>
						                    	</a> 
						                    </div>
						                  	<div class="list-types list active"> 
						                  		<a href="shop-list.php">
						                    		<div class="list-icon list-types-icon">
						                    			<i class="fa fa-bars transition" aria-hidden="true"></i>
						                    		</div>
						                    	</a> 
						                    </div>
						                </div>
						                <div class="short-by"> <span>Product Compare (0)</span>
						                </div>
						            </div>
						            <div class="col-xl-6 col-lg-7 col-md-6 text-right text-left-md">
						                <div class="show-item"> 
						                	<span class="ml-0">Sort By:</span>
						                  	<div class="select-item">
						                    	<select class="m-w-130">
						                      		<option value="" selected="selected">Default sorting</option>
						                      		<option value="">Sort by popularity</option>
						                      		<option value="">Sort by average rating</option>
						                    	</select>
						                  	</div>
						                </div>
						                <div class="show-item float-right-md"> 
						                	<span>Show</span>
						                  	<div class="select-item">
						                    	<select>
						                      		<option value="" selected="selected">15</option>
						                      		<option value="">12</option>
						                      		<option value="">6</option>
						                    	</select>
						                  	</div>
						                </div>
						            </div>
						        </div>
						   	</div>
							<div class="featured">
								<div class="row">

                                <?php	
								if(isset($_GET['search'])){
								

									$search_query=$_GET['user_text'];
								
									$query = 'SELECT * FROM main_product WHERE hide_show="1" AND name LIKE "%' . $search_query . '%"';
									$result=mysqli_query($mysqli,$query);
								
								
								
					
						   $num_per_page=8;

						   if(isset($_GET['page'])){
							   $page=$_GET['page'];

						   }else{
								$page=1;
						   }
                           
						   $start_from=($page-1)*8;
						   $query = "SELECT * FROM main_product WHERE hide_show='1' AND name LIKE '%" . $search_query . "%' ORDER BY id DESC LIMIT $start_from, $num_per_page";
						   $result1=mysqli_query($mysqli,$query);

						   while($row=mysqli_fetch_assoc($result1)){
							if($row['name']==$_GET['user_text']){

				   ?>
									<div class="featured-product featured-product-list align-flax mb-25">
										<div class="product-img transition">
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
											<p class="product-detail-desc"><?php echo $row['main_text']?></p>
											<div class="product-action">
												<ul>
													<li>
														<a href="cart.php?id=<?php echo $row['id']?>" class="btn btn-color">
															<img src="images/shop-bag.png" alt="bag">
															<span>add to cart</span>
														</a>
													</li>
													<li>
														<a href="wishlist.php?id=<?php echo $row['id']?>" class="btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									
									<?php
							}else{
								echo "Not Found";
							}
                           }
                        }
                           
								 ?>
								
								</div>
							</div>
							<div class="shorting pagination-1 mt-20">
						        <div class="row">
						            <div class="col-lg-6 col-md-6">
						                <div class="pagination-bar">
					                      	<ul>
											  <?php 
													$query='SELECT * FROM main_product WHERE hide_show="1" ORDER BY id DESC';
													$result=mysqli_query($mysqli,$query);
                                                    $total_records=mysqli_num_rows($result);
													$total_pages=ceil($total_records/$num_per_page);


												for($i=1;$i<=$total_pages;$i++){
												?>
					                        	<li class="active"><a href="shop-list.php?page=<?php echo $i?>"><?php echo $i?></a></li>
												<?php 
												}
												?>
					                      	</ul>
					                    	</div>
						              	</div>
						            <div class="col-lg-6 col-md-6">
						                <div class="show-item right-side float-none-md"> 
						                	<span class="float-none-md d-block">Showing 1 to 15 of 15 (1 Pages)</span>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>
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
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
