<?php
include 'database.php';

if(isset($_POST['username'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from user_data where username='".$username."'AND password='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
         header('Location: record.php');
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
