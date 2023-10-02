<?php 
	$mysqli=mysqli_connect('localhost','root','Rob.1323','xpod');
			 if(!$mysqli){
		      die("Connect error".mysqli_connect_error()); 
		
	 }
   
 if(isset($_POST['submit'])){
     
     $imgs = [] ;
     foreach($_FILES as $file){
         if($file['error'] == 0){
             $type = $file['type'] ;
             $arr = explode('/', $type);
             $t = end($arr) ;
             if($t == 'jpg' || $t == 'png' || $t == 'jpeg' || $t == 'webGL'){
                 $x = mt_rand(10000000000000,99999999999999999) ;
                 if(move_uploaded_file($file['tmp_name'],'img/'.$x.$file['name'])){ 
                     array_push($imgs,$x.$file['name']) ;
                 }
             }
         }
     }
     $back_img= $imgs[0] ;
      
         
     
     $hide_show = $_POST['hide_show'] ; 
     $style_name= $_POST['style_name'] ; 
     $sale=$_POST['sale'];
     $part1=$_POST['part1'];
     $part2=$_POST['part2'];
     $text1= $_POST['text1']; 
     $sale_text= $_POST['sale_text'] ; 
     $sale_text1= $_POST['sale_text1'] ; 

     $id = $_POST['id'] ;
     $position=$_POST['position'];
    
     if(empty($id)){
         $query = "INSERT INTO slide(back_img,style_name,sale,part1,part2,hide_show,position,text1,sale_text,sale_text1)  VALUES('".$back_img."','".$style_name."', '".$sale."','".$part1."','".$part2."','".$hide_show."','".$position."','".$text1."','".$sale_text."','".$sale_text1."')";        
          $result = mysqli_query($mysqli,$query) ; 
     } else {
         $query = 'UPDATE slide SET  back_img="'.$back_img.'", style_name="'.$style_name.'", sale="'.$sale.'",sale_text="'.$sale_text.'",sale_text1="'.$sale_text1.'", part1="'.$part1.'", part2="'.$part2.'",text1="'.$text1.'",hide_show= "'.$hide_show.'",position= "'.$position.'"  WHERE id = '.$id; 
         $result= mysqli_query($mysqli,$query) ;	
     }
         
 } 
 
 if(isset($_POST['delete'])){
     $id = $_POST['id'] ;
     $query = "DELETE FROM slide WHERE  id = ".$id;
     mysqli_query($mysqli,$query) ;
 }
 header('Location:slideadmin.php');
?>
