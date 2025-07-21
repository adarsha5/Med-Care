<?php
include "dao.php";

// indert user 
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $phone = $_POST["ph"];
  $password = $_POST["pass"];
  $address = $_POST["add"];
  $user = array("name" => $name, "password" => $password, "address" => $address, "phone" => $phone);
  if (signUp($user)) {
    header("location:shop.php");
  } else {
    header("location:welcome.php");
  }
}

if (isset($_REQUEST["checkoutlogin"])) {
  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];
  $address = $_REQUEST['address'];
  $phone = $_REQUEST['phone1'];
  $user = array("name" => $username, "password" => $password, "address" => $address, "phone" => $phone);
  if (signUp($user)) {
    // header("location:shop.php");
    // echo "successs";
  } else {
    // header("location:welcome.php");
    echo "sorry";
  }
}

if (isset($_REQUEST["submit1"])) {
  $username = $_REQUEST['name'];
  $password = $_REQUEST['pass'];
  $user = array("name" => $username, "password" => $password);
  if (login($user)) {
    header("location:home.php");
    // echo "successs";
  } else {
    // header("location:welcome.php");
    echo "sorry";
  }
}

if (isset($_REQUEST["submit2"])) {
  $username = $_REQUEST['name'];
  $password = $_REQUEST['pass'];
  if ($username == "ccpcst" && $password == "ccprocks") {
    header("location:admin.php");
    // echo "successs";
  } else {
    // header("location:welcome.php");
    echo "sorry";
  }
}

/*
    // insert details 
    if(isset($_POST['upload'])&& $_FILES['img']){
      $file=$_FILES['img'];
      // print_r($file);
      $name=$file['name'];
      $error=$file['error'];
      $tmp_name=$file['tmp_name'];
      $size=$file['size'];
      $pname=$_POST['pname'];
      $brand=$_POST['brand'];
      $mainprice=$_POST['mainprice'];
      $pdes=$_POST['pdes'];
      // echo $name;
      if($error==0){
        if($size<1250000){
          $ext=pathinfo($name,PATHINFO_EXTENSION);
            // echo $ext;
            $ext_l=strtolower($ext); 
            $new_name= uniqid("IMG-",true)."."."$ext_l";
            // echo $new_name;
            $proimg=array("pname"=>$pname,"brand"=>$brand,"mainprice"=>$mainprice,"pdes"=>$pdes,"new_name"=>$new_name);
            $path="upload/".$new_name;
            if(upload($proimg)){
              if(move_uploaded_file($tmp_name,$path)){
                // echo "successs";
                header("Location:shop.php");
              }
              else{
                echo "fail";
              }
            }
            else{
              echo "uploading fail";
            }
        }
        else{
          echo "pls upload a image size < 1250000";
        }
      }
      else{
        echo "Something went wrong!!!";
      }
    }
*/

// echo 'isset';
if (isset($_REQUEST["checkoutsubmit"])) {
  $lname = $_REQUEST['lname'];
  $fname = $_REQUEST['fname'];
  $phone = $_REQUEST['phone'];
  $dist = $_REQUEST['dist'];
  $ps = $_REQUEST['ps'];
  $pin = $_REQUEST['pin'];
  $total = $_REQUEST['total'];
  $status = $_REQUEST['status'];
  // echo $lname;
  // echo $fname;
  // echo $phone;
  // echo $dist;
  // echo $ps;
  // echo $pin;
  // echo $username;
  // echo $password;
  // echo $address;
  // echo $total;
  $delivery = array("fname" => $fname, "lname" => $lname, "phone" => $phone, "dist" => $dist, "ps" => $ps, "pin" => $pin, "status" => $status);

  if (delivary($delivery)) {
    header("location:aftercheckout.php");
  } else {
    header("location:welcome.php");
  }
  // signUp($user);
  // delivary($delivery);
  // echo 'isset';
  // $fname=$_post['fname'];
  // $fname=$_post['fname'];
  // header("Location:home.php");
}











// insert details 
if (isset($_POST['upload']) && $_FILES['img'] && $_FILES['img1'] && $_FILES['img2'] && $_FILES['img3']) {
  $file = $_FILES['img'];
  $file1 = $_FILES['img1'];
  $file2 = $_FILES['img2'];
  $file3 = $_FILES['img3'];
  // print_r($file);
  // print_r($file1);
  // print_r($file2);
  // print_r($file3);
  // print_r($file4);

  $name = $file['name'];
  $error = $file['error'];
  $tmp_name = $file['tmp_name'];
  $size = $file['size'];

  $name1 = $file1['name'];
  $error1 = $file1['error'];
  $tmp_name1 = $file1['tmp_name'];
  $size1 = $file1['size'];

  $name2 = $file2['name'];
  $error2 = $file2['error'];
  $tmp_name2 = $file2['tmp_name'];
  $size2 = $file2['size'];

  $name3 = $file3['name'];
  $error3 = $file3['error'];
  $tmp_name3 = $file3['tmp_name'];
  $size3 = $file3['size'];

  $pname = $_POST['pname'];
  $brand = $_POST['brand'];
  $mainprice = $_POST['mainprice'];
  $pdes = $_POST['pdes'];
  // echo $name;
  if ($error == 0 && $error1 == 0 && $error2 == 0 && $error3 == 0) {
    if ($size < 1250000 && $size1 < 1250000 && $size2 < 1250000 && $size3 < 1250000) {
      $ext = pathinfo($name, PATHINFO_EXTENSION);
      // echo $ext;
      $ext_l = strtolower($ext);
      $new_name = uniqid("IMG-", true) . "." . "$ext_l";
      // echo $new_name;

      $ext1 = pathinfo($name1, PATHINFO_EXTENSION);
      // echo $ext;
      $ext_l1 = strtolower($ext1);
      $new_name1 = uniqid("IMG-", true) . "." . "$ext_l";
      // echo $new_name1;

      $ext2 = pathinfo($name2, PATHINFO_EXTENSION);
      // echo $ext;
      $ext_l2 = strtolower($ext2);
      $new_name2 = uniqid("IMG-", true) . "." . "$ext_l";
      // echo $new_name2;

      $ext3 = pathinfo($name3, PATHINFO_EXTENSION);
      // echo $ext;
      $ext_l3 = strtolower($ext3);
      $new_name3 = uniqid("IMG-", true) . "." . "$ext_l";
      // echo $new_name3;

      $proimg = array("pname" => $pname, "brand" => $brand, "mainprice" => $mainprice, "pdes" => $pdes, "new_name" => $new_name, "new_name1" => $new_name1, "new_name2" => $new_name2, "new_name3" => $new_name3);
      $path = "upload/" . $new_name;
      $path1 = "upload/" . $new_name1;
      $path2 = "upload/" . $new_name2;
      $path3 = "upload/" . $new_name3;
      if (upload($proimg)) {
        if (move_uploaded_file($tmp_name, $path) && move_uploaded_file($tmp_name1, $path1) && move_uploaded_file($tmp_name2, $path2) && move_uploaded_file($tmp_name3, $path3)) {
          // echo "successs";
          header("Location:shop.php");
        } else {
          echo "fail";
        }
      } else {
        echo "uploading fail";
      }
    } else {
      echo "pls upload a image size < 1250000";
    }
  } else {
    echo "Something went wrong!!!";
  }
}
