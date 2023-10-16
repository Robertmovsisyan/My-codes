<?php
    $mysqli = mysqli_connect('localhost', 'root' , 'Rob.1323' , 'xpod') ;
    if(!$mysqli){
        die('Connect error'.mysqli_connect_error()) ;  
    }  
    if(isset($_POST['submit'])){

        $password1=$_POST['password'];
        $conf_pass=$_POST['conf_password'];

        $id = $_POST['id'] ;
        $name=$_POST['name'];
        $surname = $_POST['surname'] ; 
        $email = $_POST['email'] ; 
        if($password1==$conf_pass){
         
        $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
        $query = "INSERT INTO register(name,surname,email,password)  VALUES('".$name."','".$surname."', '".$email."','".$password."')";        
        $result = mysqli_query($mysqli,$query) ;   
        }else{
            header('Location:../register.php');
            
        }
       
    }
 //header('Location:../login.php');

 $email1='';
 $password2='';

    $query = 'SELECT email,password FROM register' ; 
    $result = mysqli_query($mysqli,$query) ;   
   while($row = mysqli_fetch_assoc($result)){
  
    $email1=$row['email'];
    $password2=$row['password'];
   }
     if(isset($_POST['submit1'])){
        if($_POST['user']==$email1 && $_POST['user_pass']==password_verify($_POST['user_pass'],$password2)){
            
            header('Location:../indexx.php');
        }else{
            $error = "Invalid username or password";

            header('Location:../login.php');


        }
     }
?>