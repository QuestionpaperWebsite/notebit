
<?php
    include 'conn\connect-signup.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="css/signup-styles.css"> -->
    <title>Sign Up to NoteBit</title>
</head>
<body>

<?php
    include 'css\signup-styles.php';
?>
    <div class="container">
        <div class="box1">
            <img src="https://cryptologos.cc/logos/uniswap-uni-logo.png" class="web-logo" alt="Logo">
            <h1>NoteBit</h1>

            <div class="slideshow-container">
                <div class="mySlides">
                    <img src="images/studying.png" class="signup-image1 signup" alt="">
                    <div class="text caption-one">Welcome to NoteBit</div>
                </div>
        
                <div class="mySlides">
                    <img src="images/studying1-removebg-preview.png" class="signup-image2 signup" alt="">
                    <div class="text caption-two">View previous question papers</div>
                </div>
        
                <div class="mySlides">
                    <img src="images/girl-work-on-laptop.png" class="signup-image3" alt="">
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
            <img src="https://cryptologos.cc/logos/uniswap-uni-logo.png" class="web-logo2" alt="Logo">
            <h1 class="headname2">NoteBit</h1>
            <h2>Sign up to NoteBit</h2>
            <form action="signup.php" method='POST'>
                <div class="fname">
                    <i class="fa-solid fa-user icon"></i>
                    <input type="text" name="fname" class="form-element" placeholder="First Name" id="" required> <br>
                </div>
               
                <div class="lname">
                    <i class="fa-solid fa-user icon"></i>
                    <input type="text" name="lname" class="form-element" placeholder="Last Name" required> 
                </div> 
               
                <div class="email">
                    <i class="fa-solid fa-envelope icon"></i>
                    <input type="email" name="mail" class="form-element" placeholder="Email" required> 
                </div> 

                <div class="pass">
                    <i class="fa-solid fa-lock icon"></i>
                    <input type="password" name="pass" class="form-element" placeholder="Password" required> 
                </div> 

                <div class="confirmpass">
                    <i class="fa-solid fa-lock icon"></i>
                    <input type="password" name="cpass" class="form-element" placeholder="Confirm Password" required> 
                </div> <br>
                <button type="submit" class="signin" id="submitbutton">SIGN UP</button> 
                <p class="noacc">Already have an account?  <a href="index.php" class="signup-link">Sign In</a> </p>
            </form>
        
         
          
        </div>
    </div>
<?php
    include 'js\main.php';
?>
</body>
</html>