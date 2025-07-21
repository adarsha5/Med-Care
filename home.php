<?php
require "dao.php";
$products = getPro();
// foreach($products as $p){
// echo $p['pid'];}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />

    <link rel="stylesheet" href="sttyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Home</title>
    <style>
        #hero {
            background-image: url("img/home.jpg");
            height: 70vh;
            /* background-color: #088178; */
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
            ;
        }

        #loginbtn:hover,
        #signupbtn:hover {
            background-color: #088178;
            color: #fff;
        }

        /* #banner{
            background-color: ;
        } */
        #sm-banner .banner-box {
            background-image: url("img/helth.jpg");
        }

        #sm-banner .banner-box.ban2 {
            background-image: url("img/painkiller.jpg");
        }

        #banner3 .banner-box {
            background-image: url("img/hospital.jpg");
        }

        #banner3 .ban3 {
            background-image: url("img/hosin.jpg");
        }

        #banner3 .ban4 {
            background-image: url("img/delivery.jpg");
        }

        #banner {
            background-image: url("img/banner.png");
        }

        #header{
            background-image: url("img/header.png");
        }
    </style>
</head>

<body>
    <!-- <img src="https://source.unsplash.com/1600x900/?code" alt=""> -->



<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="img/logo1.png" class="img-fluid" alt="...">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Block</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-bag-shopping"></i></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li>
            <button class="btn btn-outline-success" type="submit" style="margin-left: 20%">SignUp</button>
        </li>
        <li>
            <button class="btn btn-outline-success" type="submit" style="margin-left: 50%">LogIn</button>
        </li>
      </ul>
    </div>
  </div>
</nav> -->








































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
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
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

    <section id="hero">
        <h4>Lorem-ipsum-dolor</h4>
        <h2>Lorem, ipsum dolor.</h2>
        <h1>Lorem, ipsum dolor.</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        <button>Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Lorem, ipsum dolor.</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, similique!</p>
        <div class="pro-container">
            <?php foreach ($products as $p) { ?>
                <div class="pro" onclick="window.location.href='sproduct.php?id=<?php echo $p['pid'] ?>'">
                    <img src="upload/<?= $p['pimg'] ?>" alt="">
                    <div class="des">
                        <span><?= $p['brand'] ?></span>
                        <h5><?= $p['pname'] ?></h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$<?= $p['mainprice'] ?></h4>
                    </div>
                    <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
                </div>
            <?php } ?>
            <!-- <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div> -->
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Lorem, ipsum.</h4>
        <h2>Lorem <span>70% OFF</span> ipsum dolor sit amet & Accersserious</h2>
        <BUtton class="normal">Explore Now</BUtton>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, similique!</p>
        <div class="pro-container">
            <?php foreach ($products as $p) { ?>
                <div class="pro" onclick="window.location.href='sproduct.php?id=<?php echo $p['pid'] ?>'">
                    <img src="upload/<?= $p['pimg'] ?>" alt="">
                    <div class="des">
                        <span><?= $p['brand'] ?></span>
                        <h5><?= $p['pname'] ?></h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$<?= $p['mainprice'] ?></h4>
                    </div>
                    <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
                </div>
            <?php } ?>
            <!-- <div class="pro">
                <img src="img/products/n1.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n2.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n3.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n4.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n5.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n6.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n1.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n7.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n8.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n4.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n3.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n8.jpg" alt="">
                <div class="des">
                    <span>addidas</span>
                    <h5>Lorem ipsum dolor sit amet.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div> -->
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crezy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing. Lorem, ipsum.</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box ban2">
            <h4>upcoming season</h4>
            <h2>buy 1 get 1 free</h2>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing. Lorem, ipsum.</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <!-- <h4>crezy deals</h4> -->
            <h2>SEASON SALE</h2>
            <H3>Lorem ipsum dolor sit amet.</H3>
            <!-- <span>Lorem ipsum dolor sit amet consectetur adipisicing. Lorem, ipsum.</span> -->
            <!-- <button class="white">Learn More</button> -->
        </div>
        <div class="banner-box ban3">
            <!-- <h4>crezy deals</h4> -->
            <h2>SEASON SALE</h2>
            <H3>Lorem ipsum dolor sit amet.</H3>
            <!-- <span>Lorem ipsum dolor sit amet consectetur adipisicing. Lorem, ipsum.</span> -->
            <!-- <button class="white">Learn More</button> -->
        </div>
        <div class="banner-box ban4">
            <!-- <h4>crezy deals</h4> -->
            <h2>SEASON SALE</h2>
            <H3>Lorem ipsum dolor sit amet.</H3>
            <!-- <span>Lorem ipsum dolor sit amet consectetur adipisicing. Lorem, ipsum.</span> -->
            <!-- <button class="white">Learn More</button> -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>