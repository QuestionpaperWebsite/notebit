<style>
    @import url('https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
*{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}
.main{
    width: 100%;
    min-height: 100vh;
    background-color: #121723;
}
.main nav{
    width: 100%;
    height: 6vh;
    background-color: #1C2538;
    border-bottom: 0.5px solid rgb(43, 160, 255);
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.leftcontent{
    width: 20%;
    padding-left: 1%;
    display: flex;
    align-items: center;
    height: 6vh;
    gap: 5%;
    color: white;
    font-weight: bolder; 
}
.rightcontent{
    padding-right: 1%;
}
.rightcontent svg{
    display: none;
}
.logo{
    width: 40px;
    height: 40px;
}
.logout{
    padding: 5px 10px;
    background-color: #ff7088e8;
    border: none;
    border-radius: 8px;
    color: rgb(255, 255, 255);
    cursor: pointer;
}
.logout:hover{
   background-color: red;
   box-shadow: 0 0 10px red;
   transition: 0.2s;
}
.uppercontainer{
    width: 100%;
    height: 30vh;
}
.boxholder{
    width: 100%;
    min-height: 30vh;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    align-items: center;
}
.box{
    width: 20%;
    height: 10vh;
    border-radius: 10px;
    background-color: #1C2538;
    border: 0.5px solid rgb(31, 38, 52);
    cursor: pointer;
}
.box:hover{
   background-color: #233459;
   transition: 0.5s;
}
.info{
    padding: 10px 30px;
    color: white;
}
.innerinfo1{
    text-align: center;
    font-size: 0.6rem;
    font-weight: bolder;
}
.innerinfo2{
    text-align: center;
}
.usercount{
    font-size: 2.5rem;
    font-family: 'Teko', sans-serif;
}
.latestinfo{
    font-size: 1rem;
    font-weight: bold;
    padding: 8%;
    color: rgb(0, 140, 255);
}
.tt{
    padding: 2.5%;
    text-align: left;
}
.power{
   color: rgb(65, 244, 184);
   padding: 8%;
   font-weight: bold;
}
.lowercontainer{
    width: 100%;
    min-height: 63vh;
}
.tableheader{
    width: 100%;
    color: white;
    text-align: center;
    font-weight: bold;
    padding-bottom: 2%;
}
.tablecontainer{
    width: 100%;
    display: flex;
    justify-content: center;
}
.tablecontainer table{
    width: 90%;
    
}
.tablecontainer table tr svg{
    width: 20px;
    height: 20px;
    position: relative;
    right: 2%; 
    top: 5px;
}
.tablecontainer table th{
   color: white;
   font-size: 0.8rem;
   background-color: #1C2538;
   padding: 5px;
}
.tablecontainer table td{
   color: white;
   font-size: 0.8rem;
   background-color: #1f2b45;
   padding: 10px;
   text-align: center;
}
.delete{
    background-color: #ff7088e8;
    border: none;
    color: white;
    padding: 5px 5px;
    cursor: pointer;
    border-radius: 8px;
}
.delete:hover{
    background-color: red;
   box-shadow: 0 0 10px red;
   transition: 0.2s;
}





@media only screen and (max-width: 900px)
{
    .boxholder{
        width: 90%;
        display: block;
        padding: 10px 10px;
    }
    .box{
        width: 99%;
        height: 10vh;
        margin: 3%;
        border: 0.5px solid rgb(71, 71, 111);
    }
    .leftcontent{
        width: 60%;
    }
    .rightcontent{
        padding-right: 3%;
        display: flex;
        gap: 10%;
        width: 30%;
    }
    .latestinfo{
        font-size: 0.8rem;
    }
    .tt{
        font-size: 8px
    }
    .lowercontainer{
        display: none;
      position: absolute;
      top: 10vh;
    }
    .uppercontainer{
        display: unset;
        width: 100%;
        height: 30vh;
    }
    .tablecontainer table{
        width: 90%;  
    }
    .tablecontainer{
        overflow: scroll;
    }
    .rightcontent svg{
        display: block;
        width: 25px;
    }
}
</style>