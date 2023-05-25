<style>
    
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}
.maincontent{
    width: 100%;
    height: 100vh;
    background-color: #1F2D47;
}
.navcon{
    display: block;
    flex: 1;
    text-align: right;
}
nav{
    position: relative;
    top: 5%;
    width: 100%;
    height: 8vh;
    display: flex;
    justify-content: center;
}
.navbox{
    width: 90%;
    height: 5vh;
    background-color: #374661;
    display: flex;
    justify-content: space-between;
    border-radius: 10px;
    padding: 1%;
}
nav ul li{
    list-style: none;
    display: inline-block;
    /* margin-left: 30px; */
    padding: 1% 20px;
}
nav ul li a{
    text-decoration: none;
    color: #fff;
    font-size: 15px;
}
nav svg{
    display: none;
}
.aboutcolor:hover{
    color: #8800ff;
    transition: 0.5s;
}
.admincolor:hover{
    color: #8800ff;
    transition: 0.5s;
}
.logoutcolor:hover{
    color:red;
    transition: 0.5s;
}
.logo{
    width: 50px;
    height: 50px;
    /* border-radius: 80%; */
    bottom: 2%;
}
.uppercontent{
    width: 50%;
    height: 5vh;
    display: flex;
}
.nametext{
    display: flex;
    justify-content: center;
    align-items: center;
    width: auto;
    color: white;
    font-size: 15px;
    margin-left: 4%;
}

.maincontainer2{
    width: 100%;
    height: 80vh;
    position: relative;
    top: 8%;
    display: flex;
    justify-content: center;
}

.mainbox{
    justify-content: space-between;
    overflow:hidden; 
    display:flex;
    width:100%
}
.box1{
 background-color: #fff;
 height: 70vh; 
 width:58%;
 margin-top: 4%;
 margin-left: 2%;
 background-color: #374661; 
}
.child1{
 background-color: #1f2d47;
 height: 35vh; 
 width: 100%;
 border-radius: 25px;
 overflow:hidden;
}
.child2{
    background-color: #1f2d47;
    height: 27vh; 
    width:100%;
    border-radius: 25px;
}
.box2{
    margin-right: 4%;
    margin-top: 4%;
    width:30%;
    background-color: #1f2d47; 
    height: 60vh;
    border-radius: 25px;
}

.branch-aboutus{
    position: relative;
    bottom: 10%;
    right: 2%;
}

.branch-aboutus-text{
    position: relative;
    bottom: 10%;
}
.logo1{
    width: 80px;
    height: 80px;
    /* border-radius: 80%; */
    margin-top: 1.5%;
    margin-left: 1.5%;
}
h1{
    color: white;
    font-size: 35px;
    display:inline;
    margin-left: 2%;
    margin-bottom: 2%;
}
p{
    margin-left: 3%;
    color: white;
    margin-top: 3%;
}
.child2 h1{
    margin-left: 3%;
    color: white;
}
.photu{
    margin-left: 2%; 
    margin-top: 1.5%;
    display:flex;
    justify-content: space-between; 
    width:80%;
}
.name{
    color: white;
    margin-top: 1%;
     margin-left: 4.3%; 
    width:78%;
    display:flex;
     justify-content: space-between;
}
.box2 h2{
    color: white;
    font-size: 35px;
    margin-left: 5%;

}
.box2 h5{
    color: white;
    margin-top: 5%;
    font-size: 15px;
    font-weight: 400;
    margin-left: 5%;
}

.childbox-1{
    width: 100%;
    height: 80vh;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.barnch{
    width: 100%;
}
.branchselect{
    color: white;
    text-align: center;
    height: 5vh;
    background-color: #6D41DA;
    border-radius: 10px;
    border: 1px solid white;
}
.branchoption{
    background-color: #374661;
    font-size: 10px;
}
.maincontainer3{
    width: 100%;
    height: 80vh;
    position: relative;
    bottom: 72vh;
    display: none;
    justify-content: center;
    background-color: #1F2D47;
}
.childbox-2{
    width: 92%;
    height: 80vh;
}
.cse{
    background-color: #374661;
    display: flex;
    justify-content: center;
    align-items: center;
}
.it{
    background-color: #374661;
    display: flex;
    justify-content: center;
    align-items: center;
}
.ece{
    background-color: #374661;
    display: flex;
    justify-content: center;
    align-items: center;
}
.eee{
    background-color: #374661;
    display: flex;
    justify-content: center;
    align-items: center;
}
.me{
    background-color: #374661;
    display: flex;
    justify-content: center;
    align-items: center;
}
.ce{
    background-color: #374661;
    display: flex;
    justify-content: center;
    align-items: center;
}
.aboutus{
    background-color: #374661;
}
.adminmenu{
    background-color: #374661;
}

.semester{
    padding-left:5%;
    transition: 0.5s;
}

.selectsemester{
    background-color: #6D41DA;
    color: white;
    text-align: center;
    border-radius: 10px;
}
.semesteroption{
    background-color: #374661;
}
.innerchildbox-2{
    width: 99%;
    height: 75vh;
}
.childboxtext{
    width: 100%;
    height: 5vh;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.childboxtext h5{
  padding: 0 5%;
  color: white;
}
.childboxquestionpaper{
    overflow: auto;
    width: 100%;
    height: 70vh;
}
.childboxquestionpaper::-webkit-scrollbar{
    display: none;
}
.search{
    width: 60%;
    height: 3vh;
    background-color: transparent;
    border: 1px solid white;
    border-radius: 10px;
    padding: 0 12px;
    color: white;
    text-align: center;
}
.search::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: rgb(255, 255, 255);
  }
.fa-solid{
    position: relative;
    left: px;
    top: 2px;
    color: white;
}
table {
    font-family: arial, sans-serif;
    border-collapse: separate;
    border-spacing: 0 1em;
    width: 100%;
}
td, th {
    text-align: left;
    padding: 8px;
    color: white;
  }
  
  tr:nth-child(even) {
    background-color: #9970ff;
  }
  tr:nth-child(odd) {
    background-color: #a987ff;
  }

#sem1 , #sem2 , #sem3 , #sem4 , #sem5 , #sem6 , #sem7 ,#sem8{
display: none;
background-color: #374661;
}
#it_sem1 , #it_sem2 , #it_sem3 , #it_sem4 , #it_sem5 , #it_sem6 , #it_sem7 ,#it_sem8{
display: none;
background-color: #374661;
}
#ece_sem1 , #ece_sem2 , #ece_sem3 , #ece_sem4 , #ece_sem5 , #ece_sem6 , #ece_sem7 ,#ece_sem8{
display: none;
background-color: #374661;
}
#eee_sem1 , #eee_sem2 , #eee_sem3 , #eee_sem4 , #eee_sem5 , #eee_sem6 , #eee_sem7 ,#eee_sem8{
display: none;
background-color: #374661;
}
#me_sem1 , #me_sem2 , #me_sem3 , #me_sem4 , #me_sem5 , #me_sem6 , #me_sem7 ,#me_sem8{
display: none;
background-color: #374661;
}
#ce_sem1 , #ce_sem2 , #ce_sem3 , #ce_sem4 , #ce_sem5 , #ce_sem6 , #ce_sem7 ,#ce_sem8{
display: none;
background-color: #374661;
}

/* ----------------------------------------------------------------------------- ADMIN MENU -------------------------------------------------------------- */

.adminbox_1{
    width: 100%;
    height: 10vh;
    display: flex;
    align-items: center;
}
.adminbox_1 h2{
   padding: 0 5%;
   color: white;
}
.adminbox_2{
    width: 100%;
    height: 30vh;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
.ttbox{
    width: 20%;
    height: 30vh;
    background-color: #1D2C62;
    border-radius: 10px;
}
.iobox1{
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}
.iobox2{
    text-align: left;
    display: flex;
    justify-content: left;
    align-items: center;
    color: white;
}
.usernumber h1{
    font-size: 6rem;
    font-weight: lighter;
}
.usernumber h5{
    font-size: 1rem;
}
.usernumber h2{
    font-size: 0.8rem;
    padding-bottom: 10%;
    color: rgb(0, 174, 255);
    font-weight: lighter;
}
.usernumber h3{
    font-size: 1rem;
    padding-bottom: 6%;
    color: rgb(0, 255, 81);
    font-weight: lighter;
}
.serverdetail{
    width: 100%;
    text-align: left;
    padding: 5% 10%;
    font-size: 10px;
}
.tablecontent{
    margin-top: 1%;
    width: 100%;
    height: 38vh;
    overflow: scroll;
}
.tablecontent::-webkit-scrollbar{
    display: none;
}
.adminmenu table{
    width: 100%;
    border-collapse: collapse;
    border-color: rgb(23, 20, 20);
}
.adminmenu table th{
    text-align: center;
    background-color: #222739;
}
.adminmenu table td{
    text-align: center;
}
.adminmenu table tr{
    background-color: transparent;
}
/* -------------------------------------------------------------------------------------------------------------------------------------------------------------- */


                                       /* DONT MESS THE UPER CSS CODE PLS */
  /* --------------------------------------------- ABOUT CSS ------------------------------------------------------------ */

  @media screen and (max-width: 600px) {

    /* .childbox-2 {
        height: 100%;
        overflow: visible;
    } */

    .mainbox {
        display: block;
        height: 100%;
        overflow: auto;
        text-align: center;
    }

    .box1 {
        display: block;
        width: 100%;
        height: 95%;
        margin: 0;
    }

    .child1 {
        height: 40vh; 
        width: 95%;
        margin-left: 2%;
        margin-top: 5%;
        overflow: auto;
    }

    .child1 h1 {
        display: block;
        margin-top: 10%;
    }

    .child1 img {
        display: block;
        margin-top: 8%;
        margin-left: 38%;
    }

    .child1 p {
        margin: 0;
        margin: 5% 2% 0 2%;
    }

    .child2 {
        width: 95%;
        margin-left: 2%;
        margin-top: 5%;
        overflow: auto;
    }

    .logo1 {
        margin-left: 8%;
    }

    h3 {
        margin-left: 12%;
    }

    .box2 {
        display: block;
        width: 95%;  
        height: auto;
        margin: 0;
        margin-left: 2%;
        margin-bottom: 2%;
    }

    .box2 h2 {
        /* margin: 0; */
    }

    .box2 h5 {
        margin: 0;
        margin-top: 4%;
    }
    .navcon{
        position: relative;
        background-color: #1D2C62;
        width: 100%;
        height: 25vh;
        z-index: 2;
        text-align: center;
        left: 0;
        transition: 1s;
        border-radius: 10px;
        border: 1px solid rgb(5, 5, 5);
        display: none;
    }
    nav ul li{
        padding: 10%;
    }
    nav ul li a{
        font-size: 17px;
    }
    nav svg{
        display: block;
        padding-top: 1%;
        font-size: 10px;
        cursor: pointer;
    }
    .menut{
        position: absolute;
        top: 1vh;
        right: 5vh;
    }
    .adminbox_1{
        height: 5vh;
    }

    .adminbox_2{
        height: 40vh;
        display: block;
        overflow: scroll;
        background-color: #222739;
        border-bottom: 5px solid black ;
    }
    .ttbox{
        width: 100%;
        height: 20vh;
        margin-top: 5%;
        border-radius: 0px;
    }
    .usernumber h2{
        font-size: 1rem;
        padding-bottom: 10%;
        color: rgb(0, 174, 255);
        font-weight: lighter;
    }

    .tablecontent{
        margin-top: 1%;
        width: 100%;
        height: 33vh;
        overflow: scroll;
    }
    .tablecontent::-webkit-scrollbar{
        display: none;
    }
    .adminmenu table{
        width: 100%;
        border-collapse: collapse;
        border-color: rgb(23, 20, 20);
    }
}

/* added styles for change password form */
input {
    width: 50%;
    height: 40px;
    border-radius: 10px;
    background: none;
    border: solid white 1.5px;
    margin-top: 10px;
    color: white;
    padding: 0 40px;
}

.icon {
    position: relative;
    left: 30px;
}

.change-password input:focus~i{
    transform: translateX(20px);
}

.confirm-change-password {
    background-color: #6D41DA;
    margin-left: 20px;
    width: 50%;
    height: 40px;
    border-radius: 10px;
    margin-top: 10px;
    border: 1.5px solid #6D41DA;
    color: white;
    font-weight: bold;
}
.confirm-change-password:hover{
    background-color: #ae8eff;
    transition: 0.5s;
    cursor: pointer;
}

#change-password-button {
    background-color: #6D41DA;
    margin-left: 20px;
    width: 50%;
    height: 40px;
    border-radius: 10px;
    margin-top: 10px;
    border: 1.5px solid #6D41DA;
    color: white;
    font-weight: bold;
}

#change-password-button:hover {
    background-color: #ae8eff;
    transition: 0.5s;
    cursor: pointer;
}

#valid-password-change-message {
    font-size: 0.8rem;
    color: green;
    margin-left: 20px;
    text-decoration: none;
}

</style>