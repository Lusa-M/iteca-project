<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav id="header" class="navbar-vertical">
        <div class="container-vertical">
            <a href="#" class="navbar-brand-vertical">
                <img src="img/logo.png" class="logo-vertical" alt="Logo">
            </a>
            <ul class="navbar-nav-vertical">
                <li class="nav-item-vertical"><a class="nav-link-vertical active" href="homepage.php">Home</a></li>
                <li class="nav-item-vertical"><a class="nav-link-vertical" href="shop.php">Shop</a></li>
                <li class="nav-item-vertical"><a class="nav-link-vertical" href="sell.php">Sell</a></li>
                <li class="nav-item-vertical"><a class="nav-link-vertical" href="dashboard.php">Dashboard</a></li>
                <li class="nav-item-vertical" id="lg-bag-vertical"><a class="nav-link-vertical" href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
            </ul>
        </div>
    </nav>
    <style>
    .navbar-vertical {
        width: 100%;
        background: #222;
        padding: 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .container-vertical {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .navbar-brand-vertical {
        margin: 20px 0 10px 0;
    }
    .logo-vertical {
        height: 80px;
    }
    .navbar-nav-vertical {
        list-style: none;
        padding: 0;
        margin: 0;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        border-top: 1px solid #333;
    }
    .nav-item-vertical {
        margin: 0 20px;
    }
    .nav-link-vertical {
        display: block;
        color: #fff;
        text-decoration: none;
        padding: 18px 0;
        font-size: 18px;
        transition: color 0.2s;
    }
    .nav-link-vertical.active,
    .nav-link-vertical:hover {
        color: #ffd700;
    }
    #lg-bag-vertical .fa-shopping-bag {
        font-size: 20px;
    }
    @media (max-width: 768px) {
        .navbar-nav-vertical {
            flex-direction: column;
            align-items: center;
        }
        .nav-item-vertical {
            margin: 10px 0;
        }
        .logo-vertical {
            height: 60px;
        }
    }
    </style>

    <section id="hero" style="background: url('img/student.jpg') center center/cover no-repeat; width: 100vw; height: 100vh; display: flex; flex-direction: column; align-items: flex-start; justify-content: center; color: #fff; margin: 0; padding-left: 8vw;">
        <h4 style="font-size: 2rem; margin-bottom: 0.5em;">Trade-in-offer</h4>
        <h2 style="font-size: 3rem; margin-bottom: 0.3em;">Super value deals</h2>
        <h1 style="font-size: 3.5rem; margin-bottom: 0.5em;">On all products</h1>
        <p style="font-size: 1.5rem; margin-bottom: 1.5em;">Save more with coupons & up to 70% off! </p>
        <button style="background: orange; color: #fff; border: none; padding: 1em 2.5em; font-size: 1.3rem; border-radius: 30px; cursor: pointer; font-weight: bold; box-shadow: 0 4px 16px rgba(0,0,0,0.08); transition: background 0.2s, transform 0.2s;">
            Shop Now
        </button>
    </section>
    <style>
    @media (max-width: 768px) {
        #hero {
            padding-left: 4vw !important;
        }
        #hero h1 { font-size: 2.2rem !important; }
        #hero h2 { font-size: 1.7rem !important; }
        #hero h4 { font-size: 1.2rem !important; }
        #hero p { font-size: 1rem !important; }
        #hero button {
            font-size: 1rem !important;
            padding: 0.7em 1.5em !important;
        }
    }
    </style>
    <style>
    #feature.section-p1 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: flex-start;
        padding: 2em 0;
        background: #f8f8f8;
        width: 100vw;
        flex-wrap: nowrap;
        gap: 1em;
        }
        .fe-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        background: #fff;
        border: 2px solid #ffd700;
        border-radius: 18px;
        margin: 0;
        padding: 1em 0.7em 0.7em 0.7em;
        width: 120px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.04);
        transition: box-shadow 0.2s;
        }
        .fe-box img {
        width: 40px;
        height: 40px;
        object-fit: contain;
        margin-bottom: 0.7em;
        }
        .fe-box h6 {
        background: #fffbe6;
        color: #222;
        padding: 0.4em 0.7em;
        border-radius: 10px;
        font-size: 0.95rem;
        font-weight: 600;
        border: 1.5px solid #ffd700;
        box-shadow: 0 1px 4px rgba(255,215,0,0.07);
        margin: 0;
        text-align: center;
        }
        @media (max-width: 1100px) {
        #feature.section-p1 {
            gap: 0.5em;
        }
        .fe-box {
            width: 90px;
            padding: 0.7em 0.3em 0.5em 0.3em;
        }
        .fe-box img {
            width: 28px;
            height: 28px;
        }
        }
        @media (max-width: 768px) {
        #feature.section-p1 {
            flex-direction: column;
            align-items: center;
            gap: 1em;
            padding: 1em 0;
        }
        .fe-box {
            width: 90vw;
            padding: 1.2em 0.5em 1em 0.5em;
        }
        .fe-box img {
            width: 50px;
            height: 50px;
        }
        .fe-box h6 {
            font-size: 1rem;
            padding: 0.5em 0.8em;
        }
        }
        </style>
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
            <h6>24/7 Support</h6>
        </div>
        </section>
</body>
</html>