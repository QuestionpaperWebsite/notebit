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
nav ul li a:hover{
    color: #8800ff;
    transition: 0.5s;
}
.logo{
    width: 40px;
    height: 40px;
    border-radius: 80%;
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
.childbox-1{
    width: 92%;
    height: 80vh;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}
select{
    color: white;
    text-align: center;
    height: 5vh;
    background-color: #6D41DA;
    border-radius: 10px;
    border: 1px solid white;
}
option{
    background-color: #374661;
}
</style>