<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link rel="stylesheet" href="sttyle.css" />
  <title>Contact Us</title>
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

    #page-header {
      background-image: url("img/contact.jpg");
      height: 25vh;
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
        <li><a class="active" href="contact.php">Contact</a></li>
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

  <section id="page-header" class="about-header">
    <h2>#let's_talk</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
  </section>

  <section id="contact-details" class="section-p1">
    <div class="details">
      <span>GET IN TOUCH</span>
      <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
      <h3>Head Office</h3>
      <div>
        <li>
          <i class="fas fa-map"></i>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing</p>
        </li>
        <li>
          <i class="fas fa-envelope"></i>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing</p>
        </li>
        <li>
          <i class="fas fa-phone-alt"></i>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing</p>
        </li>
        <li>
          <i class="fas fa-clock"></i>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing</p>
        </li>
      </div>
    </div>

    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.5114145900234!2d88.36956011541822!3d22.559968139118613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0276f9c368321d%3A0x269b2a9da6bcc881!2sCentral%20Calcutta%20Polytechnic!5e0!3m2!1sen!2sin!4v1667845892966!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <section id="form-details">
    <form action="">
      <span>LEAVE A MASSAGE</span>
      <h2>We love to here from you</h2>
      <input type="text" placeholder="Yours Name">
      <input type="email" placeholder="E-mail">
      <input type="text" placeholder="Subject">
      <textarea name="" id="" cols="30" rows="10" placeholder="Your massage"></textarea>
      <button class="normal">Submit</button>
    </form>
    <div class="people">
      <div>
        <img src="img/people/1.png" alt="">
        <p><span>Jhon Doe</span>Lorem ipsum, dolor sit <br> amet consectetur adipisicing elit. <br> Possimus, illum.</p>
      </div>
      <div>
        <img src="img/people/2.png" alt="">
        <p><span>Jhon Doe</span>Lorem ipsum, dolor sit <br> amet consectetur adipisicing elit. <br> Possimus, illum.</p>
      </div>
      <div>
        <img src="img/people/3.png" alt="">
        <p><span>Jhon Doe</span>Lorem ipsum, dolor sit <br> amet consectetur adipisicing elit. <br> Possimus, illum.</p>
      </div>
    </div>
  </section>

  <section id="newsletter" class="section-p1 section-m1">
    <div class="newsrtext">
      <h4>Lorem ipsum dolor sit amet.</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <span>Lorem, ipsum.</span> Quis, tenetur.</p>
    </div>
    <div class="form">
      <input type="email" placeholder="jhonedoe@gmail.com">
      <button class="normal">Sign Up</button>
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
</body>

</html>