<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sttyle.css">
    <title>Document</title>
    <style>
        body{
            background-color: #e3e6f3;
        }
        .add {
            margin: 0 30% 0 30%;
            width: auto;
            border: none;
            background-color: #68f0e7;
            box-shadow: 20px 20px 30px rgba(0,0,0,0.09);
            height: 100vh;
        }

        .add h2 {
            padding-top: 75px;
            text-align: center;
        }

        .add form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 30px;

        }

        .add form input,
        .add form textarea {
            padding: 10px;
            margin: 10px;
            border-radius: 15px;
            border: 1px solid #fff;
            background-color: #fff;
            box-shadow: 20px 20px 30px rgba(0,0,0,0.09);
        }
    </style>
</head>

<body>
    <div class="add">
        <h2>Add Your Product</h2>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            image:
            <input type="file" name="img">
            <input type="file" name="img1">
            <input type="file" name="img2">
            <input type="file" name="img3">
            name:
            <input type="text" name="pname">
            brand:
            <input type="text" name="brand">
            price:
            <input type="number" name="mainprice">
            description:
            <textarea name="pdes" id="" cols="30" rows="10"></textarea>
            <input type="submit" name="upload" value="upload">
        </form>
    </div>
</body>

</html>