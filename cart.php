<?php
		$mysqli = mysqli_connect('localhost', 'root' , 'Rob.1323' , 'xpod') ;
		if(!$mysqli){
			die('Connect error'.mysqli_connect_error()) ;  
		}
		
	
		/*if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
			$product_id = $_POST['product_id'];
			$quantity = $_POST['quantity'];
		
			echo "Product added to cart successfully";
		} else {
			echo "Invalid parameters";
		}*/
		
		if (isset($_GET['id'])) {
	     $query = 'SELECT * FROM main_product WHERE id="'.$_GET['id'].'"' ; 
	
		$result = mysqli_query($mysqli,$query) ; 
		$row = mysqli_fetch_assoc($result);


        $query='INSERT INTO cart(name,image,sum,product_id) VALUES("'.$row['name'].'","'.$row['image'].'","'.$row['sum'].'","'.$_GET['id'].'")';
		$result = mysqli_query($mysqli,$query) ;

		}
	

	/*session_start();
	if(isset($_GET['id'])){
			$query = 'SELECT * FROM main_product WHERE id="'.$_GET['id'].'"' ; 
			$result = mysqli_query($mysqli,$query) ; 
			$row = mysqli_fetch_assoc($result);
		if(isset($_SESSION['cart'])){
			$sessiom_array_id=array_column($_SESSION['cart'],"id");


			if(!in_array($_GET['id'],$sessiom_array_id)){
				$sessiom_array=array(
					'id'=>$_GET['id'],
					'name'=>$row['name'],
					'image'=>$row['image'],
					'sum'=>$row['sum']
				);
				$_SESSION['cart'][]=$sessiom_array;
			}
		}else{	
		
 
			$sessiom_array=array(
				'id'=>$_GET['id'],
				'name'=>$row['name'],
				'image'=>$row['image'],
				'sum'=>$row['sum']
			);
			$_SESSION['cart'][]=$sessiom_array;

	}
}*/
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
	                                 // if(!empty($_SESSION['cart'])){
                                       // foreach($_SESSION['cart'] as $key =>$value){

							
										$query = 'SELECT * FROM cart WHERE product_id="'.$_GET['id'].'" ';
										$result=mysqli_query($mysqli,$query);

									   while($row1=mysqli_fetch_assoc($result)){
										
									?>
													<li> 
													  	<a href="cart.php?id=<?php echo $row1['id']; ?>" class="close-cart"><i class="fa fa-times-circle"></i></a>
													    <figure> 
													    	<a href="product-detail.php?id=<?php echo $row1['id']?>" class="pull-left"> 
													    		<img alt="product" src="php/product-img/<?php echo $row1['image'];?>">
													    	</a>
													      	<figcaption> 
													      		<span>
													      			<a href="product-detail.php?id=<?php echo $row1['id']?>"><?php echo $row1['name']?></a>
													      		</span>
													        	<p class="cart-price"><?php echo $row1['sum']?></p>
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
												/*	}
												}
												
												if(isset($_GET['action'])){
									
													if($_GET['action']== "remove"){
														foreach($_SESSION['cart'] as $key => $value){
															if($value['id']==$_GET['id']){
																unset($_SESSION['cart'][$key]);
																
															}
															}
													}
												}*/

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

			<section class="page-banner">
				<div class="container">
					<div class="page-banner-in">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-12">
								<h1 class="page-banner-title text-uppercase">Cart</h1>
							</div>
							<div class="col-xl-6 col-lg-6 col-12">
								<ul class="right-side">
									<li><a href="indexx.php">Home</a></li>
									<li>Cart</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="pt-100">
				<div class="container">
					<div class="wishlist-table">
						<div class="responsive-table">
							<table class="table border text-center">
								<thead>
									<tr>
										<th>Product</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Sub Total</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
	                                //  if(!empty($_SESSION['cart'])){
                                      //  foreach($_SESSION['cart'] as $key =>$value){
										
										$query='SELECT * FROM cart ';
									   $result=mysqli_query($mysqli,$query);

									   while($row1=mysqli_fetch_assoc($result)){
									?>
									<tr>
										<td class="text-left">
											<div class="seller-box align-flax w-100">
												<div class="seller-img">
													<a href="product-detail.php?id=<?php echo$row1['product_id']?>" class="display-b">
														<img src="php/product-img/<?php echo $row1['image'];?>" alt="shoes" class="transition">
													</a>
												</div>
												<div class="seller-contain pl-15">
													<a href="product-detail.php?id=<?php echo $row1['product_id']?>" class="product-name text-uppercase"><?php echo $row1['name'];?></a>
												</div>
											</div>
										</td>
										<td><span class="price"><?php echo $row1['sum']?></span></td>
										<td>
											<select data-id="100" class="quantity_cart" name="quantity_cart">
					                          	<option selected="" value="1">1</option>
					                          	<option value="2">2</option>
					                          	<option value="3">3</option>
					                          	<option value="4">4</option>
					                        </select>
										</td>
										<td><span class="price"><?php echo $row1['sum']?></span></td>
										<td>
											<ul>
												<li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
											
												<li><a href="php/removecart.php?id=<?php echo $row1['product_id']; ?>" class="remove" data-product-id="<?php echo $row1['product_id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></li>
											
											</ul>
										</td>
									</tr> 
									<?php
									   }
									
								
									?>


									</tbody>
							</table>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="share-wishlist shoping-con">
									<a href="shop.php" class="btn"><i class="fa fa-angle-left"></i> Continue Shopping</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="share-wishlist">
									<a href="#" class="btn">Update Cart</a>
								</div>
							</div>
						</div>
						<div class="estimate">
							<div class="row">
								<div class="col-md-6">
									<h2 class="reviews-head pb-20">Estimate shipping and tax</h2>
									<form class="main-form">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<select class="form-control">
								                        <option selected="" value="">Select Country</option>
								                        <option value="1">India</option>
								                        <option value="2">China</option>
								                        <option value="3">Pakistan</option>
								                    </select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<select class="form-control">
								                        <option selected="" value="">Select State/Province</option>
								                        <option value="1">---</option>
								                    </select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<select class="form-control">
								                        <option selected="" value="">Select City</option>
								                        <option value="1">---</option>
								                    </select>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="col-md-6">
									<div class="cart-total-table">
										<div class="responsive-table">
											<table class="table border">
												<thead>
													<tr>
														<th colspan="2">Cart Total</th>
													</tr>
												</thead>
												<tbody>
								                    <tr>
								                      	<td>Item(s) Subtotal</td>
								                      	<td>
								                        	<div class="price-box"> 
								                          		<span class="price">$160.00</span> 
								                        	</div>
								                      	</td>
								                    </tr>
								                    <tr>
								                      	<td>Shipping</td>
								                      	<td>
								                        	<div class="price-box"> 
								                          		<span class="price">$0.00</span> 
								                        	</div>
								                      	</td>
								                    </tr>
								                    	<tr>
								                      	<td class="payable"><b>Amount Payable</b></td>
								                      	<td>
								                        	<div class="price-box"> 
								                          		<span class="price">$160.00</span> 
								                        	</div>
								                      	</td>
								                    </tr>
								                </tbody>
											</table>
										</div>
										<div class="share-wishlist">
											<a href="checkout.php" class="btn btn-color">Proceed to checkout <i class="fa fa-angle-right"></i></a>
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
		<script src="js/custom.js"></script>
		<script>
		/*	$(document).ready(function () {
    $(".remove").click(function () {
        var productId = $(this).data("product-id");

        $.ajax({
            type: "POST",
            url: "php/removecart.php",
            data: { product_id: productId },
            success: function (response) {

            }
        });
    });
});*/


		</script>
	</body>

</html>
