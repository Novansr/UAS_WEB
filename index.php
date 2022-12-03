<?php

session_start();
include 'config.php';
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caffe</title>
    <link rel="stylesheet" href="ininih.css">
    
</head>

<body style="background-color: var(--secondary-color);">

    <style>
        input[type="submit"]{
            width: 150%;
            height: 50px;
            border: 1px solid;
            background: #2691d9;
            border-radius: 25px;
            font-size: 18px;
            color: whitesmoke;
            font-weight: 700;
            cursor: pointer;
            outline: none;
        }
        
        input[type="submit"]:hover{
            border-color: #2691d9;
            transition: .5s;
        }

        .center input[type="submit"]{
            width: 25%;
            height: 50px;
            align-items: center;
            border: 1px solid;
            background: #2691d9;
            border-radius: 25px;
            font-size: 18px;
            color: whitesmoke;
            font-weight: 700;
            cursor: pointer;
            outline: none;
        }
    </style>

    <div class ="container"id="home">
        <div class="navbar" style="border-bottom: 3px solid var(--primary-color);">
            <h2 id = "judul" class = "logo"> Love Coffe </h2>
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="create_menu.php">Pesan</a></li>
                        <li><a href="index_admin.php">Admin</a></li>
                        <li><a href="logout.php">LOGOUT</a></li>
                        <li><img src = "image/moon.png" id = "icon"></li>
                    </ul>
                </nav>
        </div>

        <div class="row-1"id="home">
            <div class = "col-1">
                <h2>Love Coffe</h2>
                <P>Selalu Awali dan akhiri Hari-mu dengan Secangkir kopi</P>
                <button onclick="press()" type="button">Pesan Sekarang</button>
            </div>
            <div class="col-2">
                <img src="image\coffe2.png" class="image">
            </div>
            <div class="col-3">
                <img src="image\coffe1.png" class="image">
            </div>
        </div>

        
        <div class="row-2" id="about">
            <div class = "col-1">
                <h2>ABOUT ME</h2>
                <button id = "btn">Press</button>
                <P id ="info" style="display: none">Website ini dibuat untuk mempermudah anda dalam 
                melakukan pemesanan di caffe kami, Selamt menikmati Hari anda
                ole saya Muhammad Novan saputra dengan nim 2109106032
                dari universitas mulawarman samarinda
                </P>
            </div>
            <div class="col-2">
                <img src="image\coffe3.png" class="image">
            </div>
        </div>        
    </div> 


</body>

<footer>
    <h4>Contact Us On :
    <img src="image/fb.png" class="medsos">
    lovecaffe
    <img src="image/imagewa.png" class="medsos">
    0895377156292
    <img src="image/ig.png" class="medsos">
    @lovecaffe
    <img src="image/tw.png" class="medsos">
    </h4>
</footer>

<script src="script.js"></script>
</html>