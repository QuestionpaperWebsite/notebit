<?php
    
    include 'conn\connect-index.php';
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Notebit : Admin Panel</title>
</head>
<body>
    <?php
    include 'css\dashboard-style.php'
    ?>
    <section class="main">
       <nav>
        <div class="leftcontent">
            <img src="images/notebit-final-logo.png" class="logo">
            <div class="logotext">NOTEBIT</div>
        </div>
        <div class="rightcontent">
            <div class="das" onclick="showdas()">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tabler" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 9l3 3l-3 3" />
                <path d="M13 15l3 0" />
                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
              </svg></div>
              <div class="data" onclick="showdata()">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-search" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3" />
                    <path d="M4 6v6c0 1.657 3.582 3 8 3m8 -3.5v-5.5" />
                    <path d="M4 12v6c0 1.657 3.582 3 8 3" />
                    <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    <path d="M20.2 20.2l1.8 1.8" />
                  </svg>
              </div>
            <a href="logout.php"><input type="button" class="logout" value="Logout"></a>
        </div>
       </nav>


       <div class="uppercontainer" id="uppercontainer">
        <div class="boxholder">
            <div class="box">
                <div class="info">
                    <div class="innerinfo1">USER</div>
                    <div class="innerinfo2 usercount"><?php echo($_SESSION['totaluser']);?></div>
                </div>
            </div>
            <div class="box">
                <div class="info">
                    <div class="innerinfo1">LATEST USER</div>
                    <div class="innerinfo2 latestinfo"><?php echo($_SESSION['latestuser']);?></div>
                </div>
            </div>
            <div class="box">
                <div class="info">
                    <div class="innerinfo1 tt">HOSTNAME : <?php echo($_SESSION['servername']);?></div>
                    <div class="innerinfo1 tt">DATABASE : <?php echo($_SESSION['database']);?></div>
                </div>
            </div>
            <div class="box">
                <div class="info">
                    <div class="innerinfo1">DASHBOARD POWER</div>
                    <div class="innerinfo2 power">ADMIN</div>
                </div>
            </div>
        </div>
       </div>

       <div class="lowercontainer" id="lowercontainer">
        <div class="tableheader">DATABASE RECORDS</div>
        <div class="tablecontainer">
            <table>
                <tr>
                    <th><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-badge-down" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M17 13v-6l-5 4l-5 -4v6l5 4z" />
                      </svg>Sno</th>
                    <th><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                      </svg>Name</th>
                    <th><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-forward" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" />
                        <path d="M3 6l9 6l9 -6" />
                        <path d="M15 18h6" />
                        <path d="M18 15l3 3l-3 3" />
                      </svg>Email</th>
                    <th><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                        <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                      </svg>Password</th>
                    <th><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-triangle" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" />
                        <path d="M12 9v4" />
                        <path d="M12 17h.01" />
                      </svg>Action</th>
                </tr>
                <?php
                        if($total!=0)
                        {
                          foreach($data as $print)
                          {
                            $mailcheck = $print['mail'];
                            echo "
                            <tr>
                            <td>".$print['no']."</td>
                            <td>".$print['fname']." ".$print['lname']."</td>
                            <td>".$print['mail']."</td>
                            <td>".$print['pass']."</td>
                            <td><a href='delete.php?id=".$print['no']."'><input type='submit' value='Remove' class='delete'></a></td>
                            </tr>
                            
                            ";
                          }
                        }
                        ?>
            </table>
        </div>
       </div>
    </section>
    <?php
    include 'js/dashboard-js.php'
    ?>
</body>
</html>