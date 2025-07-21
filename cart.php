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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link rel="stylesheet" href="sttyle.css" />
  <title>Cart Page</title>
  <style>
    #cart table td input,
    #sutotal table td input {
      border: none;
      background-color: #fff;
      color: black;
      font-size: 20px;
      font-weight: 600;
    }
  </style>
  <style>
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
      ;
    }

    #loginbtn:hover,
    #signupbtn:hover {
      background-color: #088178;
      color: #fff;
    }

    a {
      text-decoration: none;
      color: #fff;
      font-weight: 700;
      font-size: 20px;
    }
    #header{
            background-image: url("img/header.png");
        }
  </style>
</head>

<body>
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
        <li><a href="shop.php">Shop</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li id="lg-bag"><a class="active" href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
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

  <section id="page-header" class="about-header">
    <h2>#let's_talk</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
  </section>

  <section id="cart" class="section-p1">
    <table width="100%">
      <thead>

        <tr>
          <td>REMOVE</td>
          <td>IMAGE</td>
          <td>PRODUCT</td>
          <td>PRICE</td>
          <td>QUANTITY</td>
          <td>SUBTOTAL</td>
        </tr>

      </thead>
      <tbody>
        <tr>
          <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
          <td><img src="upload/<?= $p['pimg'] ?>" alt=""></td>
          <td><input type="text" value="<?= $p['brand'] ?>//<?= $p['pname'] ?>" disabled></td>
          <td>$<input id="price" type="text" value="<?= $p['mainprice'] ?>" disabled></td>
          <td><input id="qty" type="number" min="1" value="1"></td>
          <td>Rs.<input type="text" value="<?= $p['mainprice'] ?>" disabled></td>
        </tr>

      </tbody>
    </table>
    <p>Tax on all product : <strong>3.4%</strong></p>
  </section>

  <section id="cart-end" class="section-p1">

    <div id="cupon">
      <h3>Apply Cupon</h3>
      <div>
        <input type="text" placeholder="Enter Your Cupon">
        <button class="normal">Apply</button>
      </div>
    </div>

    <div id="sutotal">
      <h3>Cart Totals</h3>
      <table>
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
          <td><input type="number" id="gst" value="<?php echo $p['mainprice'] * 3.4 / 100; ?>"></td>
        </tr>
        <tr>
          <td><strong>Total</strong></td>
          <td><strong>Rs.<input id="total" type="text" value="<?php echo $p['mainprice'] + $p['mainprice'] * 3.4 / 100; ?>" disabled></strong></td>
        </tr>
      </table>
      <button class="normal" onclick="window.location.href='checkout.php?id=<?php echo $p['pid'] ?>'">Proceed to checkout</button>
    </div>
  </section>

  <footer class="section-p1">
    <div class="col1">
      <img class="logo" src="img/logo1.png" alt="" />
      <h4>Contact</h4>
      <p>
        <strong>Address : </strong> Lorem ipsum dolor sit amet consectetur
        adipisicing elit
      </p>
      <p><strong>Phone : </strong> (+91)75 0141 7553/(+91) 85 0591 9254</p>
      <p><strong>Hours : </strong> 10:00 - 18:00 , Mon - Sat</p>
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
        <img src="img/pay/app.jpg" alt="" />
        <img src="img/pay/play.jpg" alt="" />
      </div>
      <p>Secured Payment Gateway</p>
      <img src="img/pay/pay.png" alt="" />
    </div>
    <div class="copyright">
      <p>
        Lorem ipsum dolor sit, <strong>Copyright</strong> amet consectetur
        adipisicing.
      </p>
    </div>
  </footer>

  <script src="script.js"></script>
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
  <script>
    // $(document).ready(function(){
    //   var price = $('#price').val();
    //   var add = price*3.4/100;
    //   // $('#total').val(add);
    //   $('#total').val(price);
    // });
  </script>
</body>

</html>

<!-- <tr>
          <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
          <td><img src="img/products/f2.jpg" alt=""></td>
          <td>Lorem ipsum dolor sit.</td>
          <td>$118.00</td>
          <td><input type="number" value="1"></td>
          <td>$118.90</td>
        </tr>

        <tr>
          <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
          <td><img src="img/products/f3.jpg" alt=""></td>
          <td>Lorem ipsum dolor sit.</td>
          <td>$118.00</td>
          <td><input type="number" value="1"></td>
          <td>$118.90</td>
        </tr> -->