<?php

require 'dao.php';
$id = $_GET['id'];
// echo $id;
$p = singpage_getdata($id);
// $p=singpage_getdata($id);
// print_r($row);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />

    <link rel="stylesheet" href="sttyle.css">
    <title>Home</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Spartan', sans-serif;
        }

        #signupsec,
        #loginsec {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            right: -600px;
            height: 100vh;
            width: 20vw;
            background-color: #e3e6f3;
            box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
            padding: 80px 0 0 10px;
            transition: 0.5s;
            z-index: 10;
        }

        #signupsec.active2,
        #loginsec.active1 {
            right: 0px;
        }

        #loginbtn {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        #signupbtn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;

        }

        #loginbtn:hover,
        #signupbtn:hover,
        #checkoutsubmit:hover {
            background-color: #088178;
            color: #fff;
        }


        .checkoutform {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #e3e6f3;
            box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
            width: 75%;
            height: 75vh;
            margin: auto;
            margin-bottom: 100px;
            /* margin-top: 500vh; */

        }

        .checkoutform form {
            margin-left: 100px;
        }

        .checkoutform form input {
            border: 1px solid #e3e6f3;
            box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
            padding: 10px;
            border-radius: 10px;
            width: 200px;
            height: 30px;
            outline: none;
        }

        #checkoutsubmit {
            width: 150%;
            font-size: 14px;
            background-color: #fff;
            font-weight: 600;
            /* padding: 14px 0; */
            color: #000;
            border-radius: 10px;
            cursor: pointer;
            border: none;
            outline: none;
            transition: 0.2s;
            height: 35px;
        }

        #sutotal {
            width: 150%;
            border: none;
            outline: none;
            /* border-collapse: collapse;*/
            /* border: 1px solid black;  */
            /* margin-left: 0; */
            /* width: 2500px; */
        }

        #cart-end {
            margin-right: 5%;
            /* border: 1px solid black; */
            border-radius: 20px;
            width: 50%;
            box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #77f1e9;
        }

        tr {
            border: 1px solid black;
            outline: none;
        }

        #total,
        #status {
            display: none;
        }
        #header{
            background-image: url("img/header.png");
        }
    </style>
</head>

<body>
    <!-- <img src="https://source.unsplash.com/1600x900/?code" alt=""> -->


    <div id="loginsec">
        <h2>Sign Up</h2>
        <form action="controller.php" method="POST">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" placeholder="Enter your name" />
            <label for="phone">Phone No</label>
            <input id="phone" type="number" name="ph" placeholder="+91 00 0000 0000" />
            <label for="pssword">Password</label>
            <input id="password" type="Password" name="pass" placeholder="Enter a password" />
            <label for="address">Address</label>
            <textarea id="address" name="add" id="" cols="30" rows="10"></textarea>
            <input type="submit" name="submit" value="Submit">
            <!-- <button class="normal">Submit</button> -->
        </form>
        <a href="#" id="close1"><i class="fas fa-times"></i></a>
    </div>
    <div id="signupsec">
        <h2>Log In</h2>
        <form action="controller.php" method="POST">
            <label for="name1">Name</label>
            <input id="name1" type="text" name="name" placeholder="Enter your name" />
            <label for="pssword1">Password</label>
            <input id="password1" type="Password" name="pass" placeholder="Enter a password" />
            <input type="submit" name="submit1" value="Submit">
            <!-- <button class="normal">Submit</button> -->
        </form>
        <a href="#" id="close2"><i class="fas fa-times"></i></a>
    </div>
    <section id="header">
        <a href="#"><img src="img/logo1.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
                <button id="loginbtn" class="normal">Sign Up</button>
                <button id="signupbtn" class="normal">Log In</button>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section class="checkoutform">
        <form action="controller.php" method="POST">
            <p><u><strong>Fill this information</strong></u></p>
            <label for="fname">First Name : </label>
            <input type="text" id="fname" name="fname" placeholder="Enter your first name" required /><br><br>
            <label for="lname">Last Name : </label>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name" required /><br><br>
            <label for="phone">Phone No : </label>
            <input type="text" id="phone" name="phone" placeholder="Enter your phone no" required /><br><br>
            <label for="dist">Dist : </label>
            <input type="text" id="dist" name="dist" placeholder="Enter your district" required /><br><br>
            <label for="ps">P.S : </label>
            <input type="text" id="ps" name="ps" placeholder="Enter your police station" required /><br><br>
            <label for="pin">Pin : </label>
            <input type="text" id="pin" name="pin" placeholder="Enter your pin no" required /><br><br>
            <label for="total">Total Amount : </label>
            <input type="text" id="total0" name="total0" value="<?php echo $p['mainprice'] + $p['mainprice'] * 3.4 / 100; ?>" disabled><br><br>
            <input type="text" id="total" name="total" value="<?php echo $p['mainprice'] + $p['mainprice'] * 3.4 / 100; ?>"><br><br>
            <input type="text" id="status" name="status" value="processing"><br><br>
            <input type="submit" name="checkoutsubmit" id="checkoutsubmit" value="Procced to pay">
        </form>
        <!-- <form action="controller.php">
            <p><u><strong>Please Create Account</strong></u></p>
            <label for="username">Username : </label>
            <input type="text" id="username" name="username" placeholder="Enter your username" /><br><br>
            <label for="password">Create a password : </label>
            <input type="password" id="password" name="password" placeholder="Enter a hard passord" /><br><br>
            <label for="address">Address : </label>
            <input type="text" id="address" name="address" placeholder="Enter a permanent address" /><br><br>
            <label for="phone1">Permanent Phone No : </label>
            <input type="text" id="phone1" name="phone1" placeholder="Enter your phone no" /><br><br>
            <input type="submit" name="checkoutlogin" id="checkoutlogin" value="create a account">
        </form> -->
        <section id="cart-end" class="section-p1">
            <div id="cupon">
                <div id="sutotal">
                    <h3>
                        <center>Confirm the product</center>
                    </h3>
                    <table>
                        <tr>
                            <td>Product Name </td>
                            <td><?= $p['pname'] ?></td>
                        </tr>
                        <tr>
                            <td>Details </td>
                            <td><?= $p['pdes'] ?></td>
                        </tr>
                        <tr>
                            <td>Cart Subtotal</td>
                            <td>Rs.<?= $p['mainprice'] ?></td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>Gst Rate</td>
                            <td><?php echo $p['mainprice'] * 3.4 / 100; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Total</strong></td>
                            <td><strong>Rs.<?php echo $p['mainprice'] + $p['mainprice'] * 3.4 / 100; ?></strong></td>
                        </tr>
                    </table>
                </div>
        </section>
    </section>


    <footer class="section-p1">
        <div class="col1">
            <img class="logo" src="img/logo1.png" alt="">
            <h4>Contact</h4>
            <p> <strong>Address : </strong> Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            <p> <strong>Phone : </strong> (+91)75 0141 7553/(+91) 85 0591 9254</p>
            <p> <strong>Hours : </strong> 10:00 - 18:00 , Mon - Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fas fa-shopping-bag"></i>
                    <i class="fas fa-shopping-bag"></i>
                    <i class="fas fa-shopping-bag"></i>
                    <i class="fas fa-shopping-bag"></i>
                    <i class="fas fa-shopping-bag"></i>
                </div>
            </div>
        </div>

        <div class="col1">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivary Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col1">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col1 install">
            <h4>Install APP</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateway</p>
            <img src="img/pay/pay.png" alt="">
        </div>
        <div class="copyright">
            <p>Lorem ipsum dolor sit, <strong>Copyright</strong> amet consectetur adipisicing.</p>
        </div>
    </footer>

    <!-- <img src="https://source.unsplash.com/1600x900/?code" alt=""> -->

    <script>
        const signup = document.getElementById('signupbtn');
        const close2 = document.getElementById('close2');
        const signform = document.getElementById('signupsec');
        if (signup) {
            signup.addEventListener('click', () => {
                signform.classList.add('active2');
            })
        }
        if (close2) {
            close2.addEventListener('click', () => {
                signform.classList.remove('active2');
            })
        }
        const login = document.getElementById('loginbtn');
        const close1 = document.getElementById('close1');
        const loginform = document.getElementById('loginsec');
        if (login) {
            login.addEventListener('click', () => {
                loginform.classList.add('active1');
            })
        }
        if (close1) {
            close1.addEventListener('click', () => {
                loginform.classList.remove('active1');
            })
        }
    </script>
</body>

</html>



<input type="number" id="gst" value="<?php echo $p['mainprice'] * 3.4 / 100; ?>" disabled>