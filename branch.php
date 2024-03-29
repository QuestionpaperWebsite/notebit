<?php
    
    include 'conn\connect-branch.php';
    include 'conn\connect-signup.php';
    include 'conn\connect-forgot.php';
    include 'conn\latestuser.php';
    include 'conn\connection.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="images\favicon.ico">
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
                    <a href="branch.php" ><img src="images\notebit-final-logo.png" class="logo"></a>
                    <div class="nametext">
                    <?php 
                        $name = $_SESSION['Name'];
                        $nameArray = explode(' ', $name);
                        $firstName = $nameArray[0];
                        echo("Welcome ".$firstName);
                    ?>
                    </div>
                </div>
                <div class="navcon" id="navcon">
                <svg xmlns="http://www.w3.org/2000/svg" class="menu" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round" onclick="hidemenu()">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
                    <ul>
                      <?php
                      ?>
                      <li ><a href="#" onclick="about()" class="aboutcolor">ABOUT</a></li>
                      <li ><a href="https://forms.gle/AM1din847Aap6uyn8" class="aboutcolor" target="_blank">FEEDBACK</a></li>
                      <li ><a href="https://forms.gle/EimvDXUg6LSE58L99" class="aboutcolor" target="_blank">CONTRIBUTE</a></li>
                      <li ><a href="logout.php" class="logoutcolor">LOGOUT</a></li>
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
                 <img src="images\notebit-final-logo.png" class="logo1">
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
                 <h3 class="faiz-name">Faiz Khan</h3>
                 <h3 class="ujjwal-name">Ujjwal Kumar</h3>
                 <h3 class="rahul-name">Rahul Raj</h3>
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

                    <!-- change password html starts here -->
                    <button id="change-password-button" onclick="showChangePasswordForm() ">Change Password</button>
                    
                    <div id="changePasswordForm" style="display: none;">
                      <form action="branch.php" method="POST">
                        <div class="change-password">
                          <i class="fa-solid fa-lock icon"></i>
                          <input type="text" class="form-element" name="currentpass" placeholder="Current Password" id="" required> <br>
                        </div>

                        <div class="change-password">
                          <i class="fa-solid fa-lock icon"></i>
                          <input type="text" class="form-element" name="newpass" placeholder="New Password" id="" required> <br>
                        </div>

                        <div class="change-password">
                          <i class="fa-solid fa-lock icon"></i>
                          <input type="text" class="form-element" name="confirmpass" placeholder="Confirm New Password" id="" required> <br>
                        </div>
                        <button type="submit" class="confirm-change-password">Change</button> 
                      </form>
                    </div>
                </div>
               </div>
            </div>
        </div>
        <div class="maincontainer3" id="show_cse">
            <div class="childbox-2 cse">
                <div class="innerchildbox-2">
                    <div class="childboxtext">
                        <div class="semester" id="sem"> 
                                <select class="selectsemester" id="branchType" name="branchType" required onchange="csesemesterChange(event)">
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
                        <div class="searchbox">
                            <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>
                            <input type="text" id="csesearch" onkeyup="csesearch()" name="search" class="search" placeholder="Search" onfocus="this.placeholder=''" 
                            onblur="this.placeholder='Search'">
                        </div>
                    </div>
                    <div class="childboxquestionpaper sem_view1" id="sem1">
                        <table id="csetable1">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper sem_view2" id="sem2">
                        <table id="csetable2">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper sem_view3" id="sem3">
                        <table id="csetable3">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper sem_view4" id="sem4">
                        <table id="csetable4">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper sem_view5" id="sem5">
                        <table id="csetable5">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper sem_view6" id="sem6">
                        <table id="csetable6">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper sem_view7" id="sem7">
                        <table id="csetable7">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper sem_view8" id="sem8">
                        <table id="csetable8">
                            
                          </table>
                    </div>
                </div>

            </div>
        </div>
        <div class="maincontainer3" id="show_it">
            <div class="childbox-2 it">
            <div class="innerchildbox-2">
                    <div class="childboxtext">
                        <div class="semester" id="sem"> 
                                <select class="selectsemester" id="branchType" name="branchType" required onchange="itsemesterChange(event)">
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
                        <div class="searchbox">
                            <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>
                            <input type="text" id="itsearch" onkeyup="itsearch()" name="search" class="search" placeholder="Search" onfocus="this.placeholder=''" 
                            onblur="this.placeholder='Search'">
                        </div>
                    </div>
                    <div class="childboxquestionpaper" id="it_sem1">
                        <table id="ittable1">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="it_sem2">
                        <table id="ittable2">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="it_sem3">
                        <table id="ittable3">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="it_sem4">
                        <table id="ittable4">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="it_sem5">
                        <table id="ittable5">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="it_sem6">
                        <table id="ittable6">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="it_sem7">
                        <table id="ittable7">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="it_sem8">
                        <table id="ittable8">
                           
                          </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="maincontainer3" id="show_ece">
            <div class="childbox-2 ece">
            <div class="innerchildbox-2">
                    <div class="childboxtext">
                        <div class="semester" id="sem"> 
                                <select class="selectsemester" id="branchType" name="branchType" required onchange="ecesemesterChange(event)">
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
                        <div class="searchbox">
                            <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>
                            <input type="text" id="ecesearch" onkeyup="ecesearch()" name="search" class="search" placeholder="Search" onfocus="this.placeholder=''" 
                            onblur="this.placeholder='Search'">
                        </div>
                    </div>
                    <div class="childboxquestionpaper" id="ece_sem1">
                        <table id="ecetable1">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="ece_sem2">
                        <table id="ecetable2">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="ece_sem3">
                        <table id="ecetable3">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="ece_sem4">
                        <table id="ecetable4">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="ece_sem5">
                        <table id="ecetable5">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="ece_sem6">
                        <table id="ecetable6">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="ece_sem7">
                        <table id="ecetable7">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="ece_sem8">
                        <table id="ecetable8">
                           
                          </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="maincontainer3" id="show_eee">
            <div class="childbox-2 eee">
            <div class="innerchildbox-2">
                    <div class="childboxtext">
                        <div class="semester" id="sem"> 
                                <select class="selectsemester" id="branchType" name="branchType" required onchange="eeesemesterChange(event)">
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
                        <div class="searchbox">
                            <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>
                            <input type="text" id="eeesearch" onkeyup="eeesearch()" name="search" class="search" placeholder="Search" onfocus="this.placeholder=''" 
                            onblur="this.placeholder='Search'">
                        </div>
                    </div>
                    <div class="childboxquestionpaper" id="eee_sem1">
                        <table id="eeetable1">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="eee_sem2">
                        <table id="eeetable2">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="eee_sem3">
                        <table id="eeetable3">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="eee_sem4">
                        <table id="eeetable4">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="eee_sem5">
                        <table id="eeetable5">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="eee_sem6">
                        <table id="eeetable6">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="eee_sem7">
                        <table id="eeetable7">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="eee_sem8">
                        <table id="eeetable8">
                            
                          </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="maincontainer3" id="show_me">
            <div class="childbox-2 me">
            <div class="innerchildbox-2">
                    <div class="childboxtext">
                        <div class="semester" id="sem"> 
                                <select class="selectsemester" id="branchType" name="branchType" required onchange="mesemesterChange(event)">
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
                        <div class="searchbox">
                            <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>
                            <input type="text" id="mesearch" onkeyup="mesearch()" name="search" class="search" placeholder="Search" onfocus="this.placeholder=''" 
                            onblur="this.placeholder='Search'">
                        </div>
                    </div>
                    <div class="childboxquestionpaper" id="me_sem1">
                        <table  id="metable1">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="me_sem2">
                        <table  id="metable2">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="me_sem3">
                        <table  id="metable3">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="me_sem4">
                        <table  id="metable4">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="me_sem5">
                        <table  id="metable5">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="me_sem6">
                        <table  id="metable6">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="me_sem7">
                        <table  id="metable7">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="me_sem8">
                        <table  id="metable8">
                           
                          </table>
                    </div>
                </div> 
            </div>
        </div>
        <div class="maincontainer3" id="show_ce">
            <div class="childbox-2 ce">
            <div class="innerchildbox-2">
                    <div class="childboxtext">
                        <div class="semester" id="sem"> 
                                <select class="selectsemester" id="branchType" name="branchType" required onchange="cesemesterChange(event)">
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
                        <div class="searchbox">
                            <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>
                            <input type="text" id="cesearch" onkeyup="cesearch()" name="search" class="search" placeholder="Search" onfocus="this.placeholder=''" 
                            onblur="this.placeholder='Search'">
                        </div>
                    </div>
                    <div class="childboxquestionpaper" id="ce_sem1">
                        <table id="cetable1">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="ce_sem2">
                        <table id="cetable2">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="ce_sem3">
                        <table id="cetable3">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="ce_sem4">
                        <table id="cetable4">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="ce_sem5">
                        <table id="cetable5">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="ce_sem6">
                        <table id="cetable6">
                           
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="ce_sem7">
                        <table id="cetable7">
                            
                          </table>
                    </div>
                    <div class="childboxquestionpaper" id="ce_sem8">
                        <table id="cetable8">
                           
                          </table>
                    </div>
                </div>
            </div>
        </div>
       

    </section>
    
    <?php
        include 'js\branch-js.php';
        include 'js\main.php';
    ?>

    <script src="js\map.js"></script>

</body>
</html>