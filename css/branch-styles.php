<style>
    
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background-color: #1F2D47;  
    overflow: hidden;
    font-family: 'Poppins', sans-serif;
} 
.user-pfp{
    width: 3%;
   margin-left: 10px;
}
.navbar {
    display:flex;
    justify-content: space-evenly;
    width: 90%;
    background-color: #374661;
    border: 1.5px solid #374661 ;
    border-radius: 20px;
    margin-top: 25px;
    margin-left: 80px;
    padding: 15px 0;
   
}
ul{
    display: flex;
    margin-right: 10px;
    padding-bottom: 5px;
}
li{
    list-style: none;
    margin-left: 20px;
    margin-right: 20px;
    margin-top: 5px;
}
ul li a {
    text-decoration: none;
    color: white;
}

ul li a:hover {
    color: #6D41DA;
    transform: 0.5s;
}
.user-info{
    display: flex;
}

.user-info p {
    color: white;
    margin-left: 10px;
    margin-top: 10px;
}

.branch {
    width: 45%;
    height: 40vh;
    background-color: red;
    margin: 150px auto;
    background-color: #374661;
    border-radius: 20px;
    border: solid white 2px;
}

.branch h2 {
    text-align: center;
    color: white;
    margin-top: 20px;
}

select {
    width: 50%;
    height: 50px;
    background-color: #6D41DA;
    border: none;
    border-radius: 20px;
    border: solid #6D41DA 2px;
    margin: 60px 0;
    margin-left: 25%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-weight: bold;
}

option {
    color: white;
    background-color: #374661;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    font-size: 1rem;
}
/* .selected select{
   font-size: 2rem;
   background: transparent;
   -webkit-appearance: none;
   -moz-appearance: none;
   appearance: none;
} */
</style>