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
    <link rel="stylesheet" href="css/branch-styles.css">
    <title>Branch</title>
</head>
<body>
    <?php
        include 'css\branch-styles.php'
    ?>
    
    <div class="navbar">
        <div class="user-info">
            <img src="https://cryptologos.cc/logos/uniswap-uni-logo.png" alt="logo" class="user-pfp">
            <p><span id="username"><?php 
            session_start();
            echo("Welcome ".$_SESSION['Name']);
            ?></span></p>
        </div>
       <div class="nav-items">
        <ul>
            <li>
                <a href="#" class="nav-item1">About</a>
            </li>
            <li>
                <a href="index.php" class="nav-item2">Signout</a>
            </li>
        </ul>
       </div>
       
</div>

    <div class="branch">
        <h2>Select your branch</h2>
        <div class="selected">
            <select name="Format" id="Format">
                <option>Select branch</option>
                <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
            </select>
        </div>
            
        </div>
       
    </div>
</body>
</html>