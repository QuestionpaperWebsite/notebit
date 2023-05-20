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
                        <li>
                            <div class="semester" id="sem"> 
                                <select class="selectsemester" id="branchType" name="branchType" required onchange="handlesemesterChange(event)">
                                    <option class="semesteroption">Semester</option>
                                    <option value="Semester: 1" class="semesteroption">I</option>
                                    <option value="Semester: 2" class="semesteroption">II</option>
                                    <option value="Semester: 3" class="semesteroption">III</option>
                                    <option value="Semester: 4" class="semesteroption">IV</option>
                                    <option value="Semester: 5" class="semesteroption">V</option>
                                    <option value="Semester: 6" class="semesteroption">VI</option>
                                    <option value="Semester: 7" class="semesteroption">VII</option>
                                    <option value="Semester: 8" class="semesteroption">VIII</option>
                                </select>
                            </div>
                        </li>
                        <li><a href="#" onclick="about()">ABOUT</a></li>
                        <li><a href="#">LOGOUT</a></li>
                    </ul>
                </div>

            </div>
        </nav>


        <div class="maincontainer2" id="deafult">
            <div class="childbox-1">
                <div class="branch">
                    <select class="branchselect" id="branchType" name="branchType" required onchange="handlebranchChange(event)">
                        <option class="branchoption">Choose Branch</option>
                        <option value="CSE" class="branchoption">Computer Science and Engineering</option>
                        <option value="IT" class="branchoption">Information Technology</option>
                        <option value="ECE" class="branchoption">Electronics and Communication Engineering</option>
                        <option value="EEE" class="branchoption">Electrical and Electronics Engineering</option>
                        <option value="ME" class="branchoption">Mechanical Engineering</option>
                        <option value="CE" class="branchoption">Civil Engineering</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="maincontainer3" id="aboutus">
            <div class="childbox-2 aboutus">





                <!-- HERE WRITE THE CODE OF ABOUT US -->







            </div>
        </div>
        <div class="maincontainer3" id="show_cse">
            <div class="childbox-2 cse">
                <div class="innerchildbox-2">
                    <div class="childboxtext">
                        <h5><div id="semnumber"></div></h5>
                        <div class="searchbox">
                            <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>
                            <input type="text" id="search" name="search" class="search" placeholder="Search" onfocus="this.placeholder=''" 
                            onblur="this.placeholder='Search'">
                        </div>
                    </div>
                    <div class="childboxquestionpaper">
                        <table>
                            <tr>
                              <td>DataBase Management System</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                          </table>
                    </div>
                </div>

            </div>
        </div>
        <div class="maincontainer3" id="show_it">
            <div class="childbox-2 it">
                
            </div>
        </div>
        <div class="maincontainer3" id="show_ece">
            <div class="childbox-2 ece">
                
            </div>
        </div>
        <div class="maincontainer3" id="show_eee">
            <div class="childbox-2 eee">
                
            </div>
        </div>
        <div class="maincontainer3" id="show_me">
            <div class="childbox-2 me">
                
            </div>
        </div>
        <div class="maincontainer3" id="show_ce">
            <div class="childbox-2 ce">
                
            </div>
        </div>
       

    </section>
    
    <?php
        include 'js\branch-js.php'
    ?>

</body>
</html>