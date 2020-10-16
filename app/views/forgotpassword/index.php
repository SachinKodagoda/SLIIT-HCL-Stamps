<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php require APPROOT . '/views/modules/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/globals.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/forgotpassword.css" />
</head>

<body>
    <div class="main_wrapper">
    <div class="main">
       <div class="box">
          <div class="header">Forgot Password?</div>
            <form action="">
                     <input type="text" placeholder="ENTER YOUR MAIL ADDRESS" required oninvalid="this.setCustomValidity('Xananı doldurun')">
                  </input>    
  <button class="forgot">Send Verification Code</button>
   <span class="signup">
       <a href="#" class="link">Go back</a></span>
    </form>
</div>
    </div>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?php echo URLROOT ?>/js/common.js" type="text/javascript"></script>
    <script src="<?php echo URLROOT ?>/js/forgotpassword.js" type="text/javascript"></script>
</body>

</html>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');
@import url('https://fonts.googleapis.com/css2?family=Exo+2:wght@100&display=swap');
  body{
  margin:0;
}
::-webkit-input-placeholder{
  color:white;
}

.main{
  
  background-size:cover;
  height:100vh;
  display:flex;
  background-size:cover;
  align-items:center;
  align-content:center;
  justify-content:center;
  color:white;

}

.box{
  width:450px;
  height:600px;
  background-color:rgba(0,0,0,0.56);
  box-shadow:none;
  display:flex;
  align-content:center;
  align-items:center;
  justify-content:center;
  flex-direction:column;
}

form{
  display:flex;
  align-content;
  align-items:center;
  justify-content:center;
  flex-direction:column;
  width:290px;
  
}
.header{
  font-size:40px;
  color:white;
  font-family: 'Exo 2', sans-serif;
 margin-bottom:40px;
  letter-spacing:5px;

}

input{
    text-align: center;
  width: 100%;
  height:40px;
  color:white;
  background-color:transparent;
  font-size:16px;
  border:none;
  box-shadow:0;
  border-bottom:1.5px solid white;
  transition:2s;
  /* margin-right:10px; */
  transition-timing-function:out;
  margin-bottom:16px;
  outline:none;
   
}

input:focus{
  outline:none;
  width:350px;
  border-color:red;
 
}

.butt{
  background-color:rgb(249, 168, 37);
  font-size:16px;
  border-radius:0.15em;
  margin-top:20px;
  border:none;
  width:200px;
  height:30px;
  font-size:18px;
  color:white;
  cursor:pointer;
  transition-timing-function:all-ease-in-out;
  transition-duration:0.5s;
  margin:0px 5px 10px 10px;
}
.forgot{
  background-color:rgb(101 217 126);
  font-size:16px;
  border-radius:0.15em;
  margin-top:20px;
  border:none;
  width:250px;
  height:30px;
  font-size:18px;
  color:white;
  cursor:pointer;
  transition-timing-function:all-ease-in-out;
  transition-duration:0.5s;
  margin:0px 5px 10px 10px;
}
.butt:hover{
 transform:scale(1.2);
}

.signup{
  margin-left:150x;
  font-size:14px;
}

.link{
  color:#F9A825;
  text-decoration:none;
  
}




</style>