<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css">
  

    
    <title>Services</title>
</head>
<body>

  <nav class="navbar background h-nav-resp">
    <ul class="nav-list v-class-resp">
        <div class="logo"><img src="logo.png" alt="logo">
        <li><a href="login.php">Log In</a></li>
        <li><a href="index.php"> Home</a></li>
        <li><a href="index.php">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="contact.php">Contact us</a></li>
      </div>
      
     </ul> 
     <div class="rightnav v-class-resp">
         <input type="text" name="search" id="search">
         <button class="btn btn sm">search
     </div>
    </nav>
    
  

    
      <section id='projects'>
        <div class='projects container'>
          <div class='projects-header'>
            <h1 class='section-title'>OUR <span>SERVICES</span></h1>
          </div>
          <div class='all-projects'>
          <?php
          $con=new mysqli("localhost","root","","interior");
  if($con==true)
  {
  $q="SELECT * FROM payment";
   $t=$con->query($q);
  if($t->num_rows>0)
 {
         while($row = $t->fetch_assoc()) {
         $id=$row['id'];
         $nm=$row['name'];
         $amt=$row['amount'];
         $dis=$row['discription'];

         echo "
         <div class='project-item'>
              <div class='project-info'>
                <h1>$nm</h1>
                <p> $dis</p>
                <p>$amt</p>
              </div>
              <div class='project-img'>
                <img src='s1.jpg' alt='loading.'>
              </div>
            </div>
         <a href=payment.php?id=$id class=btn>Make Payment</a>";
         }
        }
      }
         
         ?>
            
            <!-- <div class="project-item">
              <div class="project-info">
                <h1>RENOVATION</h1>
                <p>Our company provides renovation services that included renovation ideas for the better renovation for your residence. We provide renovation services of your diverse special rooms like Kitchen room renovation , Interior renovation , Bathroom renovation , Basement renovation , Exterior renovation , Landscape renovation
                </p>

              </div>
              <div class="project-img">
                <img src="s2.jpeg" alt="img">
              </div>
            </div>
            <div class="project-item">
              <div class="project-info">
                <h1>RESIDENTIAL</h1>
                <p>
                  Maintaining a classic image and excellence service profile we at INTDesigner, offer high-quality home interior designing services for our clients. We are always serious about quality services and never give you a chance to speak wrong on our company services.
                </p>
              </div>
              <div class="project-img">
                <img src="s3.jpg" alt="img">
              </div>
            </div>
            <div class="project-item">
              <div class="project-info">
                <h1>WORKPROCESS</h1>
                <p>
                  INTDesigner unique style in meeting the customer requirements is very innovative in the market. This statistical approaches made Hometrenz interior designers a better choice to the clients who always aspired excellent interior designs with in a prescribed cost. Our key factors includes.
                  
                  Unique Designs – Our Innovative and Creative designers will always deliver the quality and unique designs where every customer will feel the freshness of the designs in the market.</p>
              </div>
              <div class="project-img">
                <img src="s4.jpg" alt="img">
              </div> -->
            </div>
      
           
            
          </div>
        </div>
      </section>
     
      <footer class="background">
        <p class="text-footer">
        Copyright &copy; 2027 www.bJain.com -All rights reserved 
        </p>
        </footer>


</body>
</html>


