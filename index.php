
<?php
    include 'conn\connect-index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" type="image/x-icon" href="images\favicon.ico">
    <title>NOTEBIT: Explore The Things Here</title>
</head> 
<body>
    <?php
        include 'css\index-styles.php'
    ?>
    <div class="container">
        <div class="box1">
            <img src="images\notebit-final-logo.png" class="web-logo" alt="Logo">
            <h1 class="headname">NoteBit</h1>

            <div class="slideshow-container">
                <div class="mySlides">
                    <img src="images\studying.png" class="signup-image1 signup" alt="">
                    <div class="text caption-one">Welcome to NoteBit</div>
                </div>
        
                <div class="mySlides">
                    <img src="images\studying1-removebg-preview.png" class="signup-image2 signup" alt="">
                    <div class="text caption-two">View previous question papers</div>
                </div>
        
                <div class="mySlides">
                    <img src="images\girl-work-on-laptop.png" class="signup-image3" alt="">
                    <div class="text caption-three">Download teachers notes</div>
                </div>
            </div> <br>

            <div style="text-align:center" class="three-dots">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
                
        </div>
            
        <div class="box2">
            <img src="images\notebit-final-logo.png" class="web-logo2" alt="Logo">
            <h1 class="headname2">NoteBit</h1>
            <h2>Sign in to NoteBit</h2>
            <form action="index.php" method="POST">
                <div class="email">
                    <i class="fa-solid fa-envelope icon"></i>
                    <input type="text" class="form-element" name="mail" placeholder="Email Address" id="" required> <br>
                </div>
               
                <div class="pass">
                    <i class="fa-solid fa-lock icon"></i>
                    <input type="password" class="form-element" name="password" placeholder="Password" required> <br> <br> 
                </div> <br> 
                <p id="invalid-login"></p>
                <a href="forgot.php" class="forgot">Forgot Password?</a> <br>
                <p id="invalid-login-message"></p> 
                <button type="submit" class="signin">SIGN IN</button> 
            </form>
            <!-- <i class="fa-brands fa-discord discord-logo"></i> -->
            <!-- <button type="submit" class="discord">Sign in with Discord</button> -->
            <p class="noacc">Don't have an account?  <a href="signup.php" class="signup-link">Sign Up</a> </p>
        </div>
    </div>
     
    <script src="js/main.js"></script>
    <?php
        include 'js\main.php'
    ?>
</body>
</html>