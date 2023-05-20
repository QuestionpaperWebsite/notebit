<?php
    include 'conn\connect-branch.php';
    include 'conn\connect-signup.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branch</title>
</head>
<body>

    <?php
        include 'css\branch-styles.php'
    ?>
   
    <section class="maincontent">
        
        <nav>
            <div class="navbox">
                <div class="uppercontent">
                    <img src="https://cryptologos.cc/logos/uniswap-uni-logo.png" class="logo">
                    <div class="nametext"> <?php session_start(); echo("Welcome ".$_SESSION['Name']);?></div>
                </div>
                <div class="navcon" id="navcon">
                    <ul>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">LOGOUT</a></li>
                    </ul>
                </div>

            </div>
        </nav>


        <div class="maincontainer2">
            <div class="childbox-1">
                <div class="branch" style="width:200px;">
                    <select>
                        <option value="CSE">Computer Science and Engineering</option>
                        <option value="IT">Information Technology</option>
                        <option value="ECE">Electronics and Communication Engineering</option>
                        <option value="EEE">Electrical and Electronics Engineering</option>
                        <option value="ME">Mechanical Engineering</option>
                        <option value="CE">Civil Engineering</option>
                    </select>
                  </div>
            </div>
        </div>


    </section>
    

</body>
</html>