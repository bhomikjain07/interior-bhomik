<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <title>CONTACT US</title>
</head>
<body>
    <h1>head1</h1>
    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"><img src="logo.png" alt="logo">
            <li><a href="login.php">Log In</a></li>
            <li><a href="index.php"> Home</a></li>
            <li><a href="index.php">About</a></li>
            <li><a href="products.php">Services</a></li>
            <li><a href="#">Contact us</a></li>
            </div>
        </ul> 
         <div class="rightnav v-class-resp">
             <input type="text" name="search" id="search">
             <button class="btn btn sm">search
         </div>
        </nav>

    
    <section class="contact" id="Contact us">
        <h1 class="text-center">Contact us</h1>
        
        <div class="form">
        <form action="" method="post">
            <input class="form-input" type="text" name="t1" id="name" placeholder="Enter your Name">
            <input class="form-input" type="text" name="t2" id="phone" placeholder="Enter your Phone">
            <input class="form-input" type="text" name="t3" id="email" placeholder="Enter your Email">
            <textarea class="form-input" type="text" name="t4" id="t4" cols="30" rows="10" placeholder="Ellaborate your concern"></textarea>
            <input type=submit class="btn btn-sm btn-dark" value="submit" name="b1">
            </form>
        </div>
    </section>
    <footer class="background">
        <p class="contact-text-footer">
        Copyright &copy; 2027 www.bJain.com -All rights reserved 
        </p>
        </footer>
    
        
 <script src="js/resp.js"></script>
    

<?php
if(isset($_POST['b1']))
{
  if(!empty($_POST['t1'] && !empty($_POST['t2'])&&!empty($_POST['t3'])&&!empty($_POST['t4'])))
  {
  $n=$_POST['t1'];
  $ph=$_POST['t2'];
  $em=$_POST['t3'];
  $msg=$_POST['t4'];
  $con=new mysqli("localhost","root","","interior");
  $q="insert into contact (name,phone,email,message) values('$n',$ph,'$em','$msg')";
  if($con->query($q)==true)
  {
    echo "form submitted";
  }
  else
  {
    echo "query problem";
  }}
 else
{
    echo "name or email or phone or message cannot be empty";
}
}
?>
</body>
</html>



