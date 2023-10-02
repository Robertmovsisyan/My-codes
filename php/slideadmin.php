<?php

	$mysqli = mysqli_connect('localhost', 'root' , 'Rob.1323' , 'xpod') ;
		if(!$mysqli){
			die('Connect error'.mysqli_connect_error()) ;  
		} 

	$query = 'SELECT id,style_name FROM slide' ; 
	$result = mysqli_query($mysqli,$query) ;  
	while($row = mysqli_fetch_assoc($result)){
		echo '<p><a href = "?id='.$row['id'].'">'.$row["style_name"].'</a></p>' ;
	}
	
	$id='';
	$style_name = '' ;
	$back_img = ''; 
	$sale = ''; 
	$part1 = '' ; 
	$part2 = ''; 
	$position = '' ; 
	$text1='';
	$sale_text='';
	$sale_text1='';
	if(isset($_GET['id'])){
		$query = 'SELECT * FROM slide WHERE id='.$_GET['id'] ;
		$result = mysqli_query($mysqli,$query) ;
		$row = mysqli_fetch_assoc($result) ;
		$id = $row['id'] ;
		$style_name=$row['style_name'];
		$back_img = $row['back_img'] ; 
		$sale = $row['sale'] ; 
		$part1 = $row['part1'] ; 
		$part2 = $row['part2'] ; 
		$position = $row['position'] ; 
		$text1 = $row['text1'] ; 
		$sale_text= $row['sale_text'] ; 
		$sale_text1= $row['sale_text'] ; 

	} 
?>

<form method ='post' action = 'slidehender.php' enctype='multipart/form-data' >
		<input name = 'id'  type = 'hidden' value = '<?php echo $id  ?>'>
		img<input name = 'back_img'  type = 'file' value = '<?php echo $back_img ?>'><br><br>
		name<input name = 'style_name' type = 'text' value = '<?php echo $style_name ?> '><br><br>
		sale_text<input name = 'sale_text' type = 'text' value = '<?php echo $sale_text ;?>  '><br><br>

		sale<input name = 'sale' type = 'text' value = '<?php echo $sale ?>  '><br><br>
		sale_text1<input name = 'sale_text1' type = 'text' value = '<?php echo $sale_text1 ;?>  '><br><br>

		part1<input name = 'part1' type = 'text' value = '<?php echo $part1?>  '>
		part2<input name = 'part2' type = 'text' value = '<?php echo $part2 ?>  '><br><br>
		tex<input name = 'text1' type = 'text' value = '<?php echo $text1?>  '>

		Hide:<input name = 'hide_show' type = 'radio' value = '0'>    
		Show:<input name = 'hide_show' type = 'radio' value = '1'>  <br><br>
       position <select name="position" >,
	   <option value="1">1</option>
	   <option value="2">2</option>
	   <option value="3">3</option>

            <option value="4">4</option>
        </select><br><br>
		<input name = 'submit' type = 'submit' value = 'Submit'>  
		<input name = 'delete' type = 'submit' value = 'DELETE'> 
</form>

