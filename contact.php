<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/mobile.css">

    <title>KnowAdvait</title>
</head>

<body>
    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="main"><span>KnowAdvait</span></div>
            <li><a href="index.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="Blog.html">Blogs</a></li>
            <li><a href="#contact">Contact us</a></li>
        </ul>
        <div class="rightNav v-class-resp">
            <input type="text" name="search" id="search" placeholder="Article Search">
            <button class="btn btn-sm">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <section class="contact" id="contact">

        <h2 class="text-center">Contact Us</h2>
        <div class="form">
            <form action="" method ="POST">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter Your Name">
            <input class="form-input" type="text" name="number" id="number" placeholder="Enter Your phone (optional)">
            <input class="form-input" type="email" name="email" id="email" placeholder="Enter Your email">
            <textarea class="form-input" name="text" id="text" cols="30" rows="10"
                placeholder="Ellaborate Your Concern"></textarea>
            <!-- <div class="contactsubmit"> -->
                <input type="submit" name="submit" class="btnn" value="register"/>
               
                
            </div>
        </div>
        </form>
        </form>
    </section>
    <footer class="background">
        <p class="text-footer">
            Copyright &copy; 2022 www.knowadvait.org - All rights reserved.
        </p>
    </footer>
    <script src="js/resp.js"></script>


</body>

</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $text = $_POST['text'];

        $insertquery = "insert into register(name,number,email,text) values('$name', '$number', '$email', '$text')";

        $res = mysqli_query($con,$insertquery); 
        if($res){
            ?>
            <script>
                alert("Your information was Submitted");
            </script>
            <?php
            }else{
                ?>
                <script>
                    alert("alert data not inserted properly");
                </script>
                <?php
            }
}
?>