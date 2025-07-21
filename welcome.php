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
      justify-content: center;
      background-color: #e3e6f3;
      box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
      width: 75%;
      height: 75vh;
      margin: auto;
      margin-bottom: 100px;
      font-size: 70px;
      font-weight: 800;
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
    }

    tr {
      border: 1px solid black;
    }

    #total,
    #status {
      display: none;
    }

    span {
      color: red;
    }
  </style>
</head>

<body>
  <!-- <img src="https://source.unsplash.com/1600x900/?code" alt=""> -->


 


  <section id="aftercheck" class="checkoutform">
    <p><strong><span><u>SORRY</u></span></strong>, user name already exist <span>!!!!!!!</span></p>
  </section>


  

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

