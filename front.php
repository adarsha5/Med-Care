<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="sttyle.css" />
    <title>front</title>
    <style>
        body {
            background-image: url("img/bg1.jpg");
            position: relative;
        }

        /* .bods{
            background-color: #e3e6f3;
            position: relative;
            width: 100vw;
            height: 100vh;
        } */
        /* .form{
            display: block;
        } */
        .front {
            height: 100vh;
            width: 30vw;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* border: 1px solid black; */
            /* border: none; */
            outline: none;
            /* margin-top: 10%; */
            margin-left: 25%;
            position: relative;
            /* position: absolute; */
            background-color: #f8f8f885;
            /* border-radius: 20px; */
            box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
            border: 25px solid rgba(0, 0, 0, 0.274);

        }

        p {
            color: black;
            font-size: 25px;
            font-weight: 700;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }


        button:hover {
            background-color: #eeff01;
            /* color: #fff; */
        }

        /* #signup {} */
        #signup {
            right: 0px;
        }

        input {
            border: none;
            padding: 10px;
            outline: none;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        h2 {
            margin-top: -10px;
            margin-bottom: 40px;
        }

        #signup.ac1,
        #all.ac1,
        #login.ac1,
        #admin.ac1 {
            /* right: -3000px; */
            display: none;
            position: absolute;
        }

        #signup.ac,
        #all.ac,
        #login.ac,
        #admin.ac {
            position: absolute;
            right: 25%;
            display: initial;
        }

        h2 {
            text-align: center;
            margin-top: 40px;
        }

        #back {
            display: inline block;
            right: 15%;
            position: absolute;
            bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- <section class="bods"> -->
    <section class="form">
        <div id="all" class="front ">
            <p>Are you a new customer?</p>
            <button class="normal" id="signbtn" onclick="alert('Are You Sure to signup');">SIGN UP</button>
            <p>Are you already a customer?</p>
            <button class="normal" id="logbtn" onclick="alert('Are You Sure to log in');">LOG IN</button>
            <p>If you a admin</p>
            <button class="normal" id="adminbtn" onclick="alert('Are You Sure to admin panel');">ADMIN PANEL</button>
        </div>

        <div id="signup" class="front ac1">
            <h2>SIGN UP</h2>
            <form action="controller.php" method="POST">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" placeholder="Enter your name" />
                <label for="phone">Phone No</label>
                <input id="phone" type="number" name="ph" placeholder="+91 00 0000 0000" />
                <label for="pssword">Password</label>
                <input id="password" type="Password" name="pass" placeholder="Enter a password" />
                <label for="address">Address</label>
                <input type="text" name="add" id="address" placeholder="Enter your address">
                <!-- <textarea id="address" name="add" id="" cols="30" rows="10"></textarea> -->
                <input type="submit" name="submit" value="Submit" onclick="alert('Welcome to our website');" />
                <!-- <button class="normal">Submit</button> -->
                <!-- <button id="back"><u>Back</u></button> -->
                <!-- <p id="close4">back</p> -->
            </form>
        </div>

        <div id="login" class="front ac1">
            <h2>Log In</h2>
            <form action="controller.php" method="POST">
                <label for="name1">Name</label>
                <input id="name1" type="text" name="name" placeholder="Enter your name" />
                <label for="pssword1">Password</label>
                <input id="password1" type="Password" name="pass" placeholder="Enter a password" />
                <input type="submit" name="submit1" value="Submit" onclick="alert('Welcome to our website');" />
                <!-- <button class="normal">Submit</button> -->
                <!-- <button id="back"><u>Back</u></button> -->
            </form>
        </div>

        <div id="admin" class="front ac1">
            <h2>ADMIN</h2>
            <form action="controller.php" method="POST">
                <label for="name1">Name</label>
                <input id="name1" type="text" name="name" placeholder="Enter your name" />
                <label for="pssword1">Password</label>
                <input id="password1" type="Password" name="pass" placeholder="Enter a password" />
                <input type="submit" name="submit2" value="Submit" onclick="alert('Welcome to admin panel');" />
                <!-- <button class="normal">Submit</button> -->
                <!-- <button id="back"><u>Back</u></button> -->
            </form>
        </div>
    </section>
    <!-- </section> -->

    <script>
        const signbtn = document.getElementById('signbtn');
        // const close2 = document.getElementById('close2');
        const signup = document.getElementById('signup');
        const all = document.getElementById('all');
        const login = document.getElementById('login');
        const admin = document.getElementById('admin');
        const logbtn = document.getElementById('logbtn');
        const adminbtn = document.getElementById('adminbtn');
        const close4 = document.getElementById('close4');
        // const back = document.getElementById('back');
        if (signbtn) {
            signbtn.addEventListener('click', () => {
                signup.classList.add('ac');
                all.classList.add('ac1');
                login.classList.add('ac1');
                admin.classList.add('ac1');
            })
        }
        if (logbtn) {
            logbtn.addEventListener('click', () => {
                signup.classList.add('ac1');
                all.classList.add('ac1');
                login.classList.add('ac');
                admin.classList.add('ac1');
            })
        }
        if (adminbtn) {
            adminbtn.addEventListener('click', () => {
                signup.classList.add('ac1');
                all.classList.add('ac1');
                login.classList.add('ac1');
                admin.classList.add('ac');
            })
        }
        // if (close4) {
        //     close4.addEventListener('click', () => {
        //         signup.classList.add('ac1');
        //         all.classList.add('ac');
        //         login.classList.add('ac1');
        //         admin.classList.add('ac1');
        //     })
        // }
        // if (back) {
        //     back.addEventListener('click', () => {
        //         signup.classList.add('ac1');
        //         all.classList.add('ac');
        //         login.classList.add('ac1');
        //         admin.classList.add('ac1');
        //     })
        // }


        // if (close2) {
        //     close2.addEventListener('click', () => {
        //         signform.classList.remove('active2');
        //     })
        // }
    </script>
</body>

</html>