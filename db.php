<?php
$host="127.0.0.1:3308";//127.0.0.1
$username="root";
$password="";
$dbname="new-e-commece";
$conn=new mysqli($host,$username,$password,$dbname);//resource type variable



if($conn->connect_error){
   die("connect error:".$conn->connect_error) ;
}
// echo "connection successfull";
?>