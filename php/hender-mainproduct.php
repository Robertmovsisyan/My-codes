

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
                 if(move_uploaded_file($file['tmp_name'],'product-img/'.$x.$file['name'])){ 
                     array_push($imgs,$x.$file['name']) ;
                 }
             }
         }
     }
    $image= $imgs[0] ;
      
         
    $id = $_POST['id'] ;
    $name=$_POST['name'];
    $sum = $_POST['sum'] ; 
    $old_sum = $_POST['old_sum'] ; 
    $main_text = $_POST['main_text'] ; 
    $hide_show = $_POST['hide_show'] ; 
    $description=$_POST['description'];
    $des_name=$_POST['des_name'];


     if(empty($id)){
         $query = "INSERT INTO main_product(name,sum,old_sum,main_text,image,hide_show)  VALUES('".$name."','".$sum."', '".$old_sum."','".$main_text."','".$image."','".$hide_show."')";        
          $result = mysqli_query($mysqli,$query) ; 
          $y=mysqli_insert_id($mysqli);
            $l=count($_FILES['imgs']['name']);
            for($i=0;$i<$l;$i++){
                if($_FILES['imgs']['error'][$i] == 0){
                    $type = $_FILES['imgs']['type'][$i];
                    $arr = explode('/', $type);
                    $t = end($arr) ;
                    if($t == 'jpg' || $t == 'png' || $t == 'jpeg' || $t == 'webGL'){
                        $x = mt_rand(10000000000000,99999999999999999) ;
                        if(move_uploaded_file($_FILES['imgs']['tmp_name'][$i],'product-img/'.$x.$_FILES['imgs']['name'][$i])){ 
                            $query='INSERT INTO images(name,product_id) VALUES("'.$x.$_FILES['imgs']['name'][$i].'","'.$y.'" )';
                          $result = mysqli_query($mysqli,$query) ; 

                        }
                    }
                }
                
            }

            foreach($_POST['subj'] as $subj){
                $query='INSERT INTO subject(subj,product_id) 
                VALUES("'.$subj.'","'.$y.'")';
                $result = mysqli_query($mysqli,$query) ; 
                }


            foreach($_POST['size'] as $size){
            $query='INSERT INTO size(size,product_id) 
            VALUES("'.$size.'","'.$y.'")';
            $result = mysqli_query($mysqli,$query) ; 
            }


            foreach($_POST['color'] as $color){
            $query1='INSERT INTO color(color,product_id)
             VALUES("'.$color.'","'.$y.'")';
            $result1 = mysqli_query($mysqli,$query1) ; 
            }
            $query2= 'INSERT INTO `describe` (des_name, description, product_id) VALUES ("' . $des_name . '", "' . $description . '", "' . $y . '")';

            $result=mysqli_query($mysqli,$query2); 



            foreach($_POST['des_subj'] as $des_subj){
                $query1='INSERT INTO desc_subj(des_subj,product_id)
                 VALUES("'.$des_subj.'","'.$y.'")';
                $result1 = mysqli_query($mysqli,$query1) ; 
                }
          
     } else {
         $query = 'UPDATE main_product SET  name="'.$name.'", sum="'.$sum.'", old_sum="'.$old_sum.'",main_text="'.$main_text.'",image="'.$image.'",hide_show= "'.$hide_show.'"  WHERE id = '.$id; 
         $result= mysqli_query($mysqli,$query) ;


         foreach($_POST['subj'] as $subj){
            $query='INSERT INTO subject(subj,product_id) 
            VALUES("'.$subj.'","'.$_POST['id'].'")';
            $result = mysqli_query($mysqli,$query) ; 
            }


         foreach($_POST['size'] as $size){
            $query='INSERT INTO size(size,product_id) 
            VALUES("'.$size.'","'.$_POST['id'].'")';
            $result = mysqli_query($mysqli,$query) ; 
            }

            foreach($_POST['color'] as $color){
                $query1='INSERT INTO color(color,product_id)
                 VALUES("'.$color.'","'.$_POST['id'].'")';
                $result1 = mysqli_query($mysqli,$query1) ; 
                }

           $query = 'UPDATE  `describe` SET  des_name="'.$des_name.'"  WHERE product_id = '.$_POST['id']; 
         $result= mysqli_query($mysqli,$query) ;


         foreach($_POST['des_subj'] as $des_subj){
            $query1='INSERT INTO desc_subj(des_subj,product_id)
             VALUES("'.$des_subj.'","'.$_POST['id'].'")';
            $result1 = mysqli_query($mysqli,$query1) ; 
            }
         
         
     }
         
 } 
 
 if(isset($_POST['delete'])){
     $id = $_POST['id'] ;
     $query = "DELETE FROM main_product WHERE  id = ".$id;
     mysqli_query($mysqli,$query) ;
 }


 if(isset($_POST['p'])){
    $query='DELETE FROM subject WHERE id="'.$_POST['p'].'"';
    $result = mysqli_query($mysqli,$query) ;
    echo true;
 }



 if(isset($_POST['y'])){
    $query='DELETE FROM images WHERE id="'.$_POST['y'].'"';
    $result = mysqli_query($mysqli,$query) ;
    echo true;
 }

 if(isset($_POST['k'])){
    $query='DELETE FROM color WHERE id="'.$_POST['k'].'"';
    $result = mysqli_query($mysqli,$query) ;
    echo true;
 } 
 
 if(isset($_POST['r'])){
    $query='DELETE FROM color WHERE id="'.$_POST['r'].'"';
    $result = mysqli_query($mysqli,$query) ;
    echo true;
 }

 if(isset($_POST['t'])){
    $query='DELETE FROM desc_subj WHERE id="'.$_POST['t'].'"';
    $result = mysqli_query($mysqli,$query) ;
    echo true;
 }
 //header('Location:admin-mainproduct.php');
?>
