<html lang="en">
<head>
  


    <title>Login Page </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*{
  margin:0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

html{
  background: rgba(0, 0, 0, 0.7) url("r.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: 100%;
  height:500px;
}

.navbar{
    display: flex;
	  color: aqua;
    align-items: center;
    background: url("");
    justify-content: center;
    position:fixed;
    top: 0;
    cursor: pointer;
}

.logo{
    width: 20%;
    display:contents;
    justify-content:center;
    align-items: center;
}

.logo img{
    width: 25%;
    border: 1px solid gold;
    border-radius: 50px;
    margin: 5px;
}

.nav-list{
    width: 70%;
    display: flex;
    align-items: center;
}

.nav-list li{
    list-style: none;
    padding: 26px 30px;
}

.nav-list li a{
    text-decoration: gold;
    color:gold;
    font-size: 17px;
}

.nav-contact li a{
    text-decoration: none;
    color:red;
    font-size: 17px;
}

.nav-list li a:hover{
    color:bisque;
    background-color:transparent;
    background-position: center;
}

.rightnav{
    width: 30%;
    text-align: right;
    padding: 0 23px;
    color: gold;
}

#search{
    padding: 5px;
    font-size: 17px;
    border: 2px solid gold;
    border-radius: 9px;
}

body{
  display: grid;
  place-items: center;
  text-align: center;
  background-size: cover;
}

.content{
  width: 330px;
  border-radius: 10px;
  padding: 40px 30px;
  margin-top: 100px;
  box-shadow: gold;
}

.content .text{
  font-size: 25px;
  font-weight: 600;
  margin-bottom: 35px;
  color:white;
}

.content .field{
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
}

.field input{
  height: 100%;
  width: 100%;
  padding-left: 45px;
  font-size: 18px;
  outline: none;
  border: none;
  color: white;
  border: 1px solid gold;
  border-radius: 8px;
  background: rgba(105, 105, 105, 0);
}

.field input::placeholder{
  color:whitesmoke;
}

.field:nth-child(2){
  margin-top: 20px;
}

.field span{
  position: absolute;
  width: 50px;
  line-height: 50px;
  color: gold;
}

button{
  margin: 25px 0 0 0;
  width: 100%;
  height: 50px;
  color: gold;
  font-size: 18px;
  font-weight: 600;
  border: 2px solid gold;
  border-radius: 8px;
  margin-top: 40px;
  outline: none;
  cursor: pointer;
  border-radius: 8px;
}
 
.content .or{
  color: gold;
  margin-top: 9px;
}
 
.icon-button{
  margin-top: 15px;
}

.icon-button span{
  padding-left: 17px;
  padding-right: 17px;
  padding-top: 6px;
  padding-bottom: 6px;
  color: rgba(244, 247, 250, 0.795);
  border: 1px solid gold;
  border-radius: 5px;
  line-height: 30px;
  
  backdrop-filter: blur(10px);
}

.icon-button span.facebook{
  margin-right: 17px;
}

button:hover,
.icon-button span:hover{
  background-color: #babecc8c;
}

.text-footer{
    text-align: center;
    padding: 70px 0;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    display: flex;
    background-position: bottom;
    background-size: 90%;
    justify-content: center;
    color: gold;
}
 
    </style>
</head>
<body>
  <nav class="navbar background h-nav-resp">
    <ul class="nav-list v-class-resp">
        <div class="logo"> <img src="logo.png" alt="logo">
        <!-- <li><a href="#">Log In</a></li> -->
        <!-- <li><a href="index.php"> Home</a></li>
        <li><a href="index.php">About</a></li>
        <li><a href="products.php">Services</a></li>
        <li><a href="contact.php">Contact us</a></li> -->
       </div>
     </ul> 
 

    </nav>
 
<div class="content">
 <div class="text">Welcome to Login</div>
  <form action="#" method="post"> 
    <div class="field">
      <span class="fa fa-user"></span>
      <input type="text" placeholder="Username" name=t1>
   
    </div>
    <div class="field">
      <span class="fa fa-lock"></span>
      <input type="password" placeholder="Password" name=t2>
      
    </div>
    
    <input type=submit name=b1 value="Log in">
    <div class="or">Or</div>
    <div class="icon-button"> 
        
      <!-- <span class="facebook"><i class="fa fa-facebook"></i>  Facebook</span>

      <span><i class="fa fa-google"></i>  Google</span> -->
      


    </div>
  </form>
</div>
<!-- <footer class="background">
  <p class="text-footer">
  Copyright &copy; 2027 www.bJain.com -All rights reserved 
  </p>
  </footer> -->
  <script src="js/resp.js"></script>

</body>
<?php
if(isset($_POST['b1']))
{
  if(!empty($_POST['t1']&& !empty($_POST['t2'])))
  {
  $a=$_POST['t1'];
  $b=$_POST['t2'];
  $con=new mysqli("localhost","root","","interior");
  $q="select * from login";
  $t=$con->query($q);
  while($row=$t->fetch_assoc())
  {
    if($a==$row['username']&& $b==$row['password'])
    {
      echo "<script> window.location.href='index.php'</script>";
    }
    else
    {
      echo "Enter correct username or password";
    }
  }
  }
  else{
    echo "Username & Password cannot be empty";
  }
}

?>
</html>