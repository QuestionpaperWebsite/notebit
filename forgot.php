<?php
    include 'conn\connect-forgot.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="forgot-styles.css">
</head>
<body>
<?php
        include 'css\forgot-styles.php'
    ?>
    <div class="container">
        <div class="box1"> 
            <img src="images\notebit-new-logo.png" class="web-logo" alt="Logo">
            <h1>NoteBit</h1>

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
            <img src="images\notebit-new-logo.png" class="web-logo2" alt="Logo">
            <h1 class="headname2">NoteBit</h1>
            <h2>Enter Registered Email To Resend Password</h2>
            <form action="forgot.php" method="POST">
                <div class="email">
                    <i class="fa-solid fa-envelope icon"></i>
                    <input type="text" class="form-element" name="mail" placeholder="Email Address" id="" required> <br>
                </div>
                <p id="email-sent-message"></p>
                <p id="email-notsent-message"></p>
                <button type="submit" class="signin">Send password</button> 
            </form>
            
            <p class="noacc">Go back to the sign in page <a href="index.php" class="signup-link">Click Here</a> </p>
        </div>
        
    </div>

    <script src="main.js"></script>
    <?php
        include 'js\main.php'
    ?>
</body>
</html>