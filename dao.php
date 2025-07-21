<?php

require "db.php";

function signUp($user)
{
    $con = $GLOBALS['conn'];
    $u = $user['name'];
    $p = $user['password'];
    $ph = $user['phone'];
    $add = $user['address'];

    $sql = "INSERT INTO customers VALUES(?,?,?,?);";

    $st = $con->prepare($sql);
    $st->bind_param("ssss",  $ph, $add,md5($p) , $u);
    // if ($st->execute()) {
    //     // echo "successfull";
    //     return true;
    // } else {
    //     return false;
    // }
    try {
        if ($st->execute()) {
            // echo "successfull";
            return true;
        }
    } catch (Exception $e) {
        echo "massage : " . $e->getMessage();
    }
}



// insert products 
// function upload($proimg)
// {
//     $con = $GLOBALS['conn'];
//     $pname = $proimg['pname'];
//     $brand = $proimg['brand'];
//     $mainprice = $proimg['mainprice'];
//     $pdes = $proimg['pdes'];
//     $new_name = $proimg['new_name'];

//     $sql = "INSERT INTO `products` (`pid`, `pname`, `pimg`, `pdes`, `mainprice`, `brand`) VALUES (NULL,?,?,?,?,?);";
//     $st = $con->prepare($sql);
//     $st->bind_param("sssis", $pname, $new_name, $pdes, $mainprice, $brand);
//     if ($st->execute()) {
//         return true;
//     } else {
//         return false;
//     }
// }

function upload($proimg)
{
    $con = $GLOBALS['conn'];
    $pname = $proimg['pname'];
    $brand = $proimg['brand'];
    $mainprice = $proimg['mainprice'];
    $pdes = $proimg['pdes'];
    $new_name = $proimg['new_name'];
    $new_name1 = $proimg['new_name1'];
    $new_name2 = $proimg['new_name2'];
    $new_name3 = $proimg['new_name3'];

    $sql = "INSERT INTO `products` ( `pname`, `pimg`,`pimg1`,`pimg2`,`pimg3`, `pdes`, `mainprice`, `brand`,`pid`) VALUES (?,?,?,?,?,?,?,?,NULL);";
    $st = $con->prepare($sql);
    $st->bind_param("ssssssis", $pname, $new_name, $new_name1, $new_name2, $new_name3, $pdes, $mainprice, $brand);
    if ($st->execute()) {
        return true;
    } else {
        return false;
    }
}

// get product 
function getPro()
{ //read
    $con = $GLOBALS['conn'];
    $sql = "SELECT * FROM products";
    $result = $con->query($sql);
    $prodetais = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $prodetais[] = $row;
            //    print_r($products);
        }
    }
    // print_r(($img));
    return $prodetais;
}


// single page product details 
function singpage_getdata($id)
{
    $con = $GLOBALS['conn'];
    // $id = $_GET['id'];
    // echo $id;
    $sql = "SELECT * FROM products WHERE pid=?";
    $st = $con->prepare($sql);
    $st->bind_param("i", $id);
    $st->execute();
    $result = $st->get_result();
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            return $row;
        }
    }
}


function delivary($delivery)
{
    $con = $GLOBALS['conn'];
    $fname = $delivery['fname'];
    $lname = $delivery['lname'];
    // $password = $delivery['password'];
    $phone = $delivery['phone'];
    $dist = $delivery['dist'];
    $pin = $delivery['pin'];
    $ps = $delivery['ps'];
    $status1 = $delivery['status'];
    $sql = "INSERT INTO delivery VALUES(null,?,?,?,?,?,?,?);";

    $st = $con->prepare($sql);
    $st->bind_param("sssssis", $fname, $lname, $phone, $dist, $ps, $pin, $status1);
    if ($st->execute()) {
        // echo "successfull";
        return true;
    } else {
        return false;
    }
}

//login
function login($user)
{
    $con = $GLOBALS['conn'];
    $u = $user['name'];
    $p = md5($user['password']) ;

    $sql = "SELECT * FROM `customers` WHERE custName=? && password=?;";

    $st = $con->prepare($sql);
    $st->bind_param("ss", $u, $p);
    // if ($st->execute()) {
    //     // echo "successfull";
    //     return true;
    // } else {
    //     return false;
    // }
    try {
        if ($st->execute()) {
            // echo "successfull";
            // return true;
            $result = $st->get_result();
            if ($result->num_rows > 0) {
                return true;
            }
        }
    } catch (Exception $e) {
        echo "massage : " . $e->getMessage();
    }
}
