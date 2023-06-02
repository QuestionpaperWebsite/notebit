<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background-color: #1F2D47;  
    overflow: hidden;
} 

.container {
    display: flex;
    justify-content: space-evenly;
}

.box1 {
    position: relative;
    height: 85vh;
    width: 27%;
    background-color: #374661;
    margin-top: 4%;
    border-radius: 35px;
    left: 120px;
}

.box1 h1 {
    color: white;
    text-align: center;
}

.box2 {
    height: 80vh;
    width: 40%;
    margin-top: 5%;
    color: white;
    margin-top: 70px;
    /* transform: translateY(-100px);
    transition: 2.5s; */
  
}

.box2 h2 {
    color: white;
    font-weight: 240;
    margin-top: 70px;
    margin-left: 24px;
}

.web-logo {
    position: relative;
    width: 18%;
    /* top: 65px;
    left: 70px; */
    top: 10%;
    left: 17%;
}

.web-logo2{
    display: none;
}

.headname2{
    display: none;
}

.signup-image1 {
    position: relative;
    width: 75%;
    left: 45px;
    top: 80px;
} 

.signup-image2{
    position:relative;
    width: 65%;
    left: 70px;
}

.signup-image3 {
    position: relative;
    width: 100%;
    top: 60px;
}

.icon {
    position: relative;
    left: 30px;
}

input {
    width: 50%;
    height: 45px;
    border-radius: 10px;
    background: none;
    border: solid white 1.5px;
    margin-top: 10px;
    color: white;
    padding: 0 40px;
}

.email input:focus~i{
    transform: translateX(20px);
}
.forgot {
    font-size: 0.8rem;
    color: #A9A9A9;
    margin-left: 30px;
    text-decoration: none; 
}

#default-signup-message {
    font-size: 0.8rem;
    color: pink;
    margin-left: 20px;
    text-decoration: none;
}

#invalid-signup-data {
    font-size: 0.8rem;
    color: red;
    margin-left: 20px;
    text-decoration: none;
}

#valid-signup-data {
    font-size: 0.8rem;
    color: green;
    margin-left: 20px;
    text-decoration: none;
}

.signin {
    background-color: #6D41DA;
    margin-left: 20px;
    width: 50%;
    height: 45px;
    border-radius: 10px;
    margin-top: 10px;
    border: 1.5px solid #6D41DA;
    color: white;
    font-weight: bold;
}
.signin:hover{
    background-color: #ae8eff;
    transition: 0.5s;
    cursor: pointer;
}
.discord {
    background: none;
    width: 50%;
    height: 45px;
    border-radius: 10px;
    margin-top: 15px;
    color: white;
    border: solid 1.5px white;
    cursor: pointer;
}

.discord-logo {
    position: relative;
    left: 90px;
}

.noacc {
    font-size: 0.8rem;
    margin-top: 10px;
    margin-left: 75px;
}

.signup-link {
    text-decoration: none;
    color: #6D41DA;
}
.first p{
    position: relative;
    top: 60vh;
    text-align: center;
    color: white;
}
.topcontent{
    width: 100%;
    background-color: #ae8eff;
    display: flex;
}

/* slider animation */

.slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  .text {
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  
  .dot {
    height: 8px;
    width: 8px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active {
    background-color: #717171;
  }

  .caption-one {
    position: relative;
    top: 140px;
    color: white;
  }

  .caption-two { 
    position: relative;
    color: white;
  }

  .caption-three {
    position: relative;
    top: 100px;
    color: white;
  }

  .three-dots {
   width: 100%;
   height: 20px;
   display: flex;
   align-items: center;
   justify-content: center;
   position: absolute;
   top: 80vh;
  }

  @media screen and (max-width: 992px) {
  .box1 {
    display: none;
  }

  .box2 {
    width: 100%;
    text-align: center;
    margin-right: 18px;
  }

  .web-logo2 {
    display: inline;
    position: relative;
    width: 18%;
    /* top: 22px; */
    top: 3.5%;
  }

  .headname2 {
    display: inline;
    text-align: center;
  }

  .noacc {
    margin-left: 6%;
  }

  input {
    width: 75%;
  }

  .forgot {
    margin-left: 20px;
}

    h2 {
        margin-right: 5px;
    }
}

</style>