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
    <link rel="stylesheet" type="text/css" href="css/glass-case.css">
    <link rel="stylesheet" type="text/css" href="css/shoes.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
	</head>
	<body>
<div class="row mfp-content-bg">
	<?php
	  if(isset($_GET['id'])){
		$query4='SELECT * FROM main_product WHERE id="'.$_GET['id'].'"';
						   					  
		$result4=mysqli_query($mysqli,$query4);
	   $row=mysqli_fetch_assoc($result4); 


	?>
	<div class="col-lg-5 col-md-6 col-12">
		<div class="align-center mb-md-30">
			<ul id="glasscase" class="gc-start">

				<li><img src="php/product-img/<?php echo $row['image'];?>" alt="Xpoge" /></li>
				<?php
							$query='SELECT * FROM images WHERE product_id="'.$_GET['id'].'"';
						   $result=mysqli_query($mysqli,$query);
						   while($row1=mysqli_fetch_assoc($result)){
							?>
				<li><img src="php/product-img/<?php echo $row1['name'];?>" alt="Xpoge" /></li>
			<?php };?>
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
					<span>1 Review (s)</span>
				</div>
				<div class="product-des">
		            <p><?php echo $row['main_text']?></p>
		        </div>
		        <ul class="product-list-check">
				<?php
					$query='SELECT * FROM subject WHERE product_id="'.$_GET['id'].'"';

					$result=mysqli_query($mysqli,$query);
					while($row8=mysqli_fetch_assoc($result)){
					?>
				    <li><i class="fa fa-check"></i> <?php echo $row8['subj']?></li>
				  <?php }; ?>
				</ul>
				<div class="row mt-20">
				    <div class="col-12">
				        <div class="table-listing qty">
				            <label>Qut:</label>
				            <div class="fill-input">
				                <button type="button" id="sub" class="sub cou-sub">
				                    <i class="fa fa-minus" aria-hidden="true"></i>
				                </button>
    							<input type="number" id="1" class="input-text qty" value="1" min="1" max="3" />
    							<button type="button" id="add" class="add cou-sub">
    								<i class="fa fa-plus" aria-hidden="true"></i>
    							</button>
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
									<?php };?>
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
									<a href="cart.php?id=<?php echo $row['id']?>" class="btn btn-color">
										<img src="images/shop-bag.png" alt="bag">
										<span>add to cart</span>
									</a>
								</li>
								<li><a href="wishlist.php?id=<?php echo $row['id']?>" class="btn"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
							</ul>
						</div>
				    </div>
				</div>
			</div>
		</div>
	</div>

	<?php }?>
</div>


		<script src="js/jquery-3.4.1.min.js"></script>
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
	    </script>
	</body>
	
</html>