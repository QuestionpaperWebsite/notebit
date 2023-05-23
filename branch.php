<?php
    include 'conn\connect-branch.php';
    include 'conn\connect-signup.php';
    include 'conn\connect-forgot.php';
    session_start();
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
                    <img src="images\notebit-new-logo.png" class="logo">
                    <div class="nametext">
                    <?php echo("Welcome ".$_SESSION['Name']);?>
                    </div>
                </div>
                <div class="navcon" id="navcon">
                <svg xmlns="http://www.w3.org/2000/svg" class="menu" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round" onclick="hidemenu()">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
                    <ul>
                      <li ><a href="#" onclick="about()" class="aboutcolor">ABOUT</a></li>
                      <li ><a href="index.php" class="logoutcolor">LOGOUT</a></li>
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
                    </ul>
                </div>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" class="menut" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round" onclick="showmenu()">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="4" y1="6" x2="20" y2="6" />
                <line x1="4" y1="12" x2="20" y2="12" />
                <line x1="4" y1="18" x2="20" y2="18" />
              </svg>
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
              <div class="mainbox">
                <div class="box1">
                 <div class="child1">
                 <img src="images\notebit-new-logo.png" class="logo1">
                 <!-- <div class="name">About NoteBit</div> -->
                 <h1 class="branch-aboutus">About NoteBit</h1>
                 <p class="branch-aboutus-text"> 
                 Welcome to NoteBit, a go-to platform for BIT students seeking past year question papers. 
                 Our mission is to simplify exam preparation by providing an extensive collection of previous question papers.
                 With a user-friendly interface, we aim to assist students in accessing the materials they need effortlessly. 
                 Boost your confidence and improve your performance with our comprehensive database of past year question papers. 
                 Join us today and take a step towards achieving your academic goals.
                 </p>
                 </div>
                 
                  <br>
                 <div class="child2">
                 <h1>Developers</h1>
                 <div class="photu">
                 <img src="images\faiz-notebit.png" class="logo1">
                
                 <img src="images\ujjwal-notebit.png" class="logo1">
                
                 <img src="images\rahul-notebit.png" class="logo1">
                 
                 </div>

                 <div class="name">
                 <h3>Faiz Khan</h3>
                 <h3>Ujjwal Kumar</h3>
                 <h3>Rahul Raj</h3>
                 </div>
                 </div>
                </div>
                    
                <div class="box2">
                   <h2>Your Account</h2>
                   <div class="usertext">
                    <h5>Username : <?php echo($_SESSION['Name']);?></h5> 
                    <h5>Email : <?php echo($_SESSION['mail']);?></h5>
                    <h5>Password : <?php echo($_SESSION['pass']);?></h5>
                    </div>
                    <!-- <div class="bttn"></div>
                    <button> Connect to Discord</button>
                    </div> -->
                </div>
               </div>
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
                    <div class="childboxquestionpaper" id="sem1">
                        <table>
                            <tr>
                              <td>DataBase Management System 1</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 1</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 1</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="sem2">
                        <table>
                            <tr>
                              <td>DataBase Management System 2</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 2</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 2</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="sem3">
                        <table>
                            <tr>
                              <td>DataBase Management System 3</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 3</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 3</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="sem4">
                        <table>
                            <tr>
                              <td>DataBase Management System 4</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 4</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 4</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="sem5">
                        <table>
                            <tr>
                              <td>DataBase Management System 5</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 5</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 5</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="sem6">
                        <table>
                            <tr>
                              <td>DataBase Management System 6</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 6</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 6</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="sem7">
                        <table>
                            <tr>
                              <td>DataBase Management System 7</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 7</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 7</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="sem8">
                        <table>
                            <tr>
                              <td>DataBase Management System 8</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 8</td>
                              <td>Mid Semester</td>
                              <td>Download</td>
                            </tr>
                            <tr>
                              <td>DataBase Management System 8</td>
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