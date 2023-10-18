
	<link rel="stylesheet"  href="../css/admin.css">
<div class="conte">
	<h1>Welcome Adim</h1>
	<div class="link">
<?php

	$mysqli = mysqli_connect('localhost', 'root' , 'Rob.1323' , 'xpod') ;
		if(!$mysqli){
			die('Connect error'.mysqli_connect_error()) ;  
		} 

	$query = 'SELECT id,name FROM main_product' ; 
	$result = mysqli_query($mysqli,$query) ;  
	while($row = mysqli_fetch_assoc($result)){
		echo '<p><a href = "?id='.$row['id'].'">'.$row["name"].'</a></p>' ;
	}
	
	$id='';
	$name = '' ;
	$sum = ''; 
	$old_sum = ''; 
	$main_text = '' ; 
	$subj = ''; 

	$image='';
	$imgs='';
	$size='';
	$color='';
	$des_subj='';
	$des_name='';
	$description='';
	if(isset($_GET['id'])){
		$query = 'SELECT * FROM main_product WHERE id='.$_GET['id'] ;
		$result = mysqli_query($mysqli,$query) ;
		$row = mysqli_fetch_assoc($result) ;
		$id = $row['id'] ;
		$name=$row['name'];
		$sum = $row['sum'] ; 
		$old_sum = $row['old_sum'] ; 
		$main_text = $row['main_text'] ; 
		$image= $row['image'] ; 
		

		$query = 'SELECT * FROM subject WHERE product_id='.$_GET['id'] ;
		$result = mysqli_query($mysqli,$query) ;
		$x = mysqli_num_rows($result) ;
	if($x>0){
		while($row8 = mysqli_fetch_assoc($result) ){
		$subj.='<input type="text" name="subj[]" value="'.$row8['subj'].'" class="input"> <span data-id="'.$row8['id'].'" class="dellinput" style="text-align: center; width:20px; height: 20px; background-color: aliceblue; border-radius: 3px; margin-left: 5px; margin-bottom:20px; font-weight:bolder;">x</span>';
	}
}



		$query = 'SELECT * FROM images WHERE product_id='.$_GET['id'] ;
		$result = mysqli_query($mysqli,$query) ;
		$x = mysqli_num_rows($result) ;
	if($x>0){
		while($row2 = mysqli_fetch_assoc($result) ){
		$imgs.='<img src="product-img/'.$row2['name'].'" class="img" ><span data-id="'.$row2['id'].'" class="dell" style="text-align: center; width:20px; height: 20px; background-color: aliceblue; border-radius: 3px; margin-left: 5px; margin-bottom:20px; font-weight:bolder;" >x</span>';
	}
}

$query = 'SELECT * FROM size WHERE product_id='.$_GET['id'] ;
$result = mysqli_query($mysqli,$query) ;
$y = mysqli_num_rows($result) ;
if($y>0){
while($row6 = mysqli_fetch_assoc($result) ){
$size.='<span class="chap">'.$row6['size'].'</span><span data-id="'.$row6['id'].'" class="dellsize" style="text-align: center; width:20px; height: 20px; background-color: aliceblue; border-radius: 3px; margin-left: 5px; margin-bottom:20px; font-weight:bolder;">X</span>';
}
}



	$query = 'SELECT * FROM color WHERE product_id='.$_GET['id'] ;
	$result = mysqli_query($mysqli,$query) ;
	$x = mysqli_num_rows($result) ;
if($x>0){
	while($row7 = mysqli_fetch_assoc($result) ){
	$color.='<span class="klor" style=" background-color:'.$row7['color'].';"></span><span data-id="'.$row7['id'].'" class="dellcolor" style="text-align: center; width:20px; height: 20px; background-color: aliceblue; border-radius: 3px; margin-left: 5px; margin-bottom:20px; font-weight:bolder;">X</span>';
  }
}

    $query = 'SELECT * FROM desc_subj WHERE product_id='.$_GET['id'] ;
    $result = mysqli_query($mysqli,$query) ;
    $x = mysqli_num_rows($result) ;
    if($x>0){
    while($row9 = mysqli_fetch_assoc($result) ){
		$des_subj.='<input type="text" name="des_subj[]" value="'.$row9['des_subj'].'" class="input"> <span data-id="'.$row9['id'].'" class="dellsubj" style="text-align: center; width:20px; height: 20px; background-color: aliceblue; border-radius: 3px; margin-left: 5px; margin-bottom:20px; font-weight:bolder;">x</span>';

   }  
}

$query = 'SELECT * FROM `describe` WHERE product_id='.$_GET['id'] ;
$result = mysqli_query($mysqli,$query) ;
$row11=mysqli_fetch_assoc($result);

$des_name=$row11['des_name'];
$description=$row11['description'];


	}

?>
</div>
<form method ='post' action = 'hender-mainproduct.php' enctype='multipart/form-data' >
	
		<input name = 'id'  type = 'hidden' value = '<?php echo $id  ?>'>
    
		<label>name<input name = 'name' type = 'text' value = '<?php echo $name ?> ' class="input"></label>
		<label>Price<input name = 'sum' type = 'text' value = '<?php echo $sum ;?>  'class="input"></label>

		<label>Sales Price<input name = 'old_sum' type = 'text' class="input" value = '<?php echo $old_sum ?>  ' ></label>
		<label>main_description<input name = 'main_text' type = 'text' value = '<?php echo $main_text ;?>  'class="input"></label>
           <div class="ok">
		<label>subject<input name = 'sub1[]' type = 'text' class="input"></label>
		<div class="plud"><span class='plus4'>+</span></div>
		   </div>
		<div class="addsubj"></div>

		<?php echo $subj; ?>
         <img src="product-img/<?php echo $image?>" alt="dfvv" width="150" height="150">
		<label>Image<input name = 'image'  type = 'file' class="image"></label>
<div class="hide">
		<label>Hide:<input name = 'hide_show' type = 'radio' value = '0' ></label>
		<label>Show:<input name = 'hide_show' type = 'radio' value = '1'> </label> 
</div>
<div class="img_div">
   <?php echo $imgs; ?>
</div>
      <div class="plud"> <span class="plus">+</span></div>
        <div class="add"></div>

<div class="ok">
		<label>size<input type="text" name="size[]"   class="input"></label>
		<div class="plud">
		<span class='plus2' class="input">+</span>

		</div>
</div>
     <div class="chap1">
				<?php echo $size; ?>
	 </div>
		<div class="addsize" ></div> 
	

        <div class="ok">
        
		<label>Color <input type="color" name="color[]"  class="inputt"></label>
		<div class="plud"><span class="plus1">+</span></div>
		</div>
          <div class="klor1">
		<?php echo $color; ?>
	</div>
		<div class="addcolor" ></div> 
		  
     
		<label>describtion_name <input type="text" name="des_name" class="input" value="<?php echo $des_name?>"></label>
		<div class="descript">
		<label class="labb">describtion <textarea name="description" id="text" cols="30" rows="10" ><?php echo $description?></textarea></label>
		</div>

<div class="ok">
		<label>description_subj<input type="text" name="des_subj[]" class="input"></label>
		<div class="plud"><span class="plus5">+</span></div></div>
		<?php echo $des_subj?>
		<div class="addsubj1"></div>

<div class="ok">
		<input name = 'submit' type = 'submit' value = 'Submit' class="sub">  
		<input name = 'delete' type = 'submit' value = 'DELETE' class="del"> 
</div>
</form>

<script src="../js/jquery-3.4.1.min.js"></script>
<script>
    $('.plus').click(function(){
        let elm=$('<label>Imgs<input type="file" name="imgs[]" class="image"></label>')
		let clos=$('<div style="text-align: center; width:20px; height: 20px; background-color: aliceblue; border-radius: 3px; margin-left: 15px; margin-bottom:20px; font-weight:bolder;" ><span class="closediv" style="display:block;">X</span></div>')

		
        $('.add').append(elm,clos);
		$(clos).click(function(){
		$(this).prev().remove();
		$(this).remove();
		});
    });

	$('.plus1').click(function(){
        let elm=$('<label>Color<input type="color" name="color[]" class="i"></label>')
		let clos=$('<div style="text-align: center; width:20px; height: 20px; background-color: aliceblue; border-radius: 3px; margin-left: 15px; margin-bottom:20px; font-weight:bolder;" ><span class="closediv" style="display:block;">X</span></div>')

        $('.addcolor').append(elm,clos);

		$(clos).click(function(){
		$(this).prev().remove();
		$(this).remove();
	});

    });

	$('.plus2').click(function(){
        let elm=$('<label>Size<input type="text" name="size[]" class="inp"></label>')
		let clos=$('<div style="text-align: center; width:20px; height: 20px; background-color: aliceblue; border-radius: 3px; margin-left: 15px; margin-bottom:20px; font-weight:bolder;" ><span class="closediv" style="display:block;">X</span></div>')

        $('.addsize').append(elm,clos);

		$(clos).click(function(){
		$(this).prev().remove();
		$(this).remove();
	});

    });
	
	$('.plus4').click(function(){
        let elm=$('<label>Subj<input type="text" name="subj[]" class="inp" ></label>')
		let clos=$('<div style="text-align: center; width:20px; height: 20px; background-color: aliceblue; border-radius: 3px; margin-left: 15px; margin-bottom:20px; font-weight:bolder;" ><span class="closediv" style="display:block;">X</span></div>')
        $('.addsubj').append(elm,clos);

        $(clos).click(function(){
		$(this).prev().remove();
		$(this).remove();
	});


    });

	$('.plus5').click(function(){
        let elm=$('<label>des_subj<input type="text" name="des_subj[]" class="inp"></label>')
		let clos=$('<div style="text-align: center; width:20px; height: 20px; background-color: aliceblue; border-radius: 3px; margin-left: 15px; margin-bottom:20px; font-weight:bolder;" ><span class="closediv" style="display:block;">X</span></div>')
        $('.addsubj1').append(elm,clos);

        $(clos).click(function(){
		$(this).prev().remove();
		$(this).remove();
	});


    });



	$('.dellinput').click(function (){
		let this4 = $(this);
		let l=$(this).attr('data-id');
$.post('hender-mainproduct.php',{ p:l },function(v){
    if(v){

		this4.prev().remove();
		this4.remove();
	}
});
	});



	$('.dell').click(function (){
		let this1 = $(this);
		let x=$(this).attr('data-id');
$.post('hender-mainproduct.php',{ y:x },function(d){
    if(d){

		this1.prev().remove();
		this1.remove();
	}
});
	});




	$('.dellcolor').click(function (){
		let this2 = $(this);
		let z=$(this).attr('data-id');
$.post('hender-mainproduct.php',{k:z},function(s){
    if(s){

		this2.prev().remove();
		this2.remove();
	}
});
	});



	$('.dellsize').click(function (){
		let this3 = $(this);
		let p=$(this).attr('data-id');
$.post('hender-mainproduct.php',{r:p},function(v){
    if(v){

		this3.prev().remove();
		this3.remove();
	}
});
	});


	$('.dellsubj').click(function (){
		let this5 = $(this);
		let w=$(this).attr('data-id');
$.post('hender-mainproduct.php',{t:w},function(y){
    if(y){

		this5.prev().remove();
		this5.remove();
	}
});
	});
</script>

</div>


