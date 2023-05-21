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
    padding: 5% 20px;
}
nav ul li a{
    text-decoration: none;
    color: #fff;
    font-size: 15px;
}
.aboutcolor:hover{
    color: #8800ff;
    transition: 0.5s;
}
.logoutcolor:hover{
    color:red;
    transition: 0.5s;
}
.logo{
    width: 80px;
    height: 50px;
    border-radius: 80%;
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
.logo1{
    width: 80px;
    height: 60px;
    border-radius: 80%;
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
h2{
    color: white;
    font-size: 35px;
    margin-left: 4%;
    margin-top: 3%;

}
h5{
    color: white;
    margin-top: 5%;
    margin-left: 5%; 
    font-size: 15px;
    font-weight: 400;
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
}
.ece{
    background-color: #374661;
}
.eee{
    background-color: #374661;
}
.me{
    background-color: #374661;
}
.ce{
    background-color: #374661;
}
.aboutus{
    background-color: #374661;
}

.semester{
    opacity: 0;
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


                                       /* DONT MESS THE UPER CSS CODE PLS */
  /* --------------------------------------------- ABOUT CSS ------------------------------------------------------------ */

</style>