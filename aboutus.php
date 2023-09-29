<?php
    include 'DBConn.php';



    session_start();
    
    $user_id = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>AboutUs</title>
</head>
<style>
    body {
        background-color: #efefef;
        overflow: hidden;
    }

    h1 {
        font-size: 3em;
        margin-top: 0;
        font-weight: 400;
    }
    h2{
        margin-top: 50px;
        font-size: 2em;
        font-weight: 300;
    }

    p {
        margin-bottom: 10px;
    }

    .about-us {
        width: 80%;
        margin: 0 auto;
    }
</style>
<nav>


    <div class="logo">
        <h1>BookTrekkers</h1>
    </div>
    <div class="nav-links">
        <h3><a href="home.php"><i class="fa fa-home"></i></a></h3>
        <h3><a href="addproduct.php">Add Book</a></h3>
        <h3><a class="current" href="AboutUs.php">About Us</a></h3>
        <h3><a href="historyorder.php">Order History</a></h3>
        
        <?php
           $sql = "SELECT * FROM `cart`";
           $result = mysqli_query($conn, $sql);
           $total_cart_items = mysqli_num_rows($result);
         ?>
        <h3><a href="cart.php" ><i class="fas fa-shopping-cart"></i>Cart <span>(<?= $total_cart_items?>)</span></a></h3>
        <h3><a href="index.php" name='Logout'>Logout</a></h3>
    </div>

</nav>

<body>
<div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
    <div class="circle5"></div>
    <div class="circle6"></div>
    <div class="about-us">
        <h1>About Us</h1>
        <p>
            Booktrekker is a second-hand textbook website for students. We help students save money on their textbooks by providing a platform where they can buy and sell used textbooks. We have a wide selection of textbooks available, and we offer competitive prices.
        </p>
        <p>
            We are committed to providing a safe and easy way for students to buy and sell textbooks. Our website is secure, and we offer a variety of payment options. We also have a team of customer support representatives who are available to help you with any questions you may have.
        </p>
        <p>
            We believe that Booktrekker is a valuable resource for students. We help students save money on their textbooks, and we also help them to reduce their environmental impact. When you buy a used textbook from Booktrekker, you are helping to keep textbooks out of landfills.
        </p>
        <h2>Our Mission</h2>
        <p>
            Our mission is to make it easy and affordable for students to buy and sell used textbooks. We believe that everyone should have access to the textbooks they need to succeed in school, regardless of their financial situation.
        </p>
        <h2>Our Values</h2>
        <ul>
            <li>Affordability</li>
            <li>Convenience</li>
            <li>Safety</li>
            <li>Customer Service</li>
        </ul>
        <p>
            We hope you will join us on our mission to make education more affordable for everyone.
        </p>
        <p>
            Thank you for choosing Booktrekker!
        </p>
    </div>

</body>

</html>