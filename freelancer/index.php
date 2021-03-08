<?php
include "db_conn.php";
if(isset($_POST['SUBMIT'])){
   $name= mysqli_real_escape_string($con, $_POST['name']);
   $email=mysqli_real_escape_string($con,$_POST['email']);
   $number=mysqli_real_escape_string($con,$_POST['number']);
   $promblem= mysqli_real_escape_string($con,$_POST['text']);

 
             $sql = "INSERT INTO regis ( `name` , `email`, `number` , `promblem`, `dd`) 
             VALUES ('$name' , '$email' , '$number' , '$promblem' , CURRENT_TIMESTAMP())";
             $iquery = mysqli_query($con , $sql);


             if($iquery){
              
                header("location: welcome.html");

                   }
                else{
                    echo "ERROR: $sql <br> $con->error";
                  }
                  $con->close();
                
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Photography</title>
</head>

<body>
    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"> <img src="img/logo.jpg" alt="logo"></div>
            <p class="name">Photography</p>
            <li><a href="#home">Home</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
        <div class="rightnav v-class-resp">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>
            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
    </nav>

    <section class="background firstSection">
        <div class="box-main" id="home">
            <div class="firstHalf">
                <p class="text-big">TYPES OF PHOTOGRAPHY CLIENTS WE SERVE</p>
                <p class="text-small"> <i class="fas fa-check-circle"></i> Wedding photographers <br> 
                <i class="fas fa-check-circle"></i>Portrait photographers <br> <i class="fas fa-check-circle"></i>  Product photographers<br>
                <i class="fas fa-check-circle"></i> Headshot photographers<br>  <i class="fas fa-check-circle"></i>Real estate photographers<br> 
                <i class="fas fa-check-circle"></i> Fashion photographers<br> <i class="fas fa-check-circle"></i> Aerial photographers<br>  
                <i class="fas fa-check-circle"></i>Videographers  <br> <i class="fas fa-check-circle"></i>  Architecture photographers
            
            </p>

            </div>

            
            
        </div>
    </section>
>

    <section class="section" id="gallery">
        
        <div class="thumbnail">
          <img src="img/nature.jpg" alt="Images">
          <img src="img/nature1.jpg" alt=" Images">
          <img src="img/img10.jpeg" alt=" Images">
          <img src="img/car2.jpg" alt=" Images">
          <img src="img/car.jpg" alt=" Images">
          <img src="img/flower.jpg" alt=" Images">
          <img src="img/macro.jpg" alt=" Images">
          <img src="img/boat.jpg" alt=" Images">
          <img src="img/nature1.jpg" alt=" Images">
          <img src="img/house.jpg" alt=" Images">
          <img src="img/img2.jpg" alt=" Images">
          <img src="img/moon1.jpg" alt=" Images">
          <img src="img/tiger.jpg" alt=" Images">
          <img src="img/forest.jpg" alt=" Images">
          <img src="img/moutain.jpg" alt=" Images">
        
          
      </div>
    </section>
<form method="POST" action=""  > 
    <section class="contact" id="contact">
        <h2 class="text-centre">Contact Us</h2>
        <div class="form">
            <input class="form-input" type="text" name="name" id="name" placeholder="Entre Your Name" required>
            <input class="form-input" type="Phone" name="number" id="phone" placeholder="Entre Your Phone" required>
            <input class="form-input" type="email" name="email" id="email" placeholder="Entre Your Email" required>
            <textarea class="form-input" name="text" id="text" cols="5" rows="5" placeholder="Messege" required></textarea>
            <button class=" btn btn-sm btn-dark " name = "SUBMIT">Sumbit</button>
        </div>
    </section>
</form>  
        <div class="services" id="services">
           <h4> Our Services</h4>
             <div class="cen">
                 <div class="service">
                 <i class="fas fa-video"></i>
                    <h5>Video</h5>
                     <p>It's long been said that still photographers make the best filmmakers because of their attention to lighting and detail. At TRG, we have the production team in place to help you execute your video marketing strategy.
Whether it's in a hectic emergency room or a closed sound stage, our video and motion capabilities allow us to create impactful and unique media. We have extensive film and video expertise, as well as in-house video editing capabilities that help you capture the video assets your business needs to tell its story.</p>
                </div>
                <div class="service">
                <i class="fas fa-camera-retro"></i>
                   <h5>Retouching</h5>
                    <p> Composite imagery is photography, computer-generated images (CGI), and/or stock photos that are blended together to create hyper-realistic or fantastical results. Using compositing, we can create anything your imagination can dream up. We're able to take existing assets and merge them together, to create a seamless finished image that is indiscernible to the viewer.
                         Every project is unique and all solutions are customized to ensure you get exceptional results that work perfectly for your campaign.</p>
                </div>
                <div class="service">
                    <i class="fab fa-accusoft"></i>
                   <h5>Commputer Generated Imagery</h5>
                    <p>Computer Generated Imagery allows you to showcase products or services in ways that traditional photography can't. Whether an item is impossible to photograph or you need to change certain aspects of a product, our CGI artists, generalists, and compositors work with you to create photographic quality images that you can use to connect with your consumers. 
There are many different services that a CGI production company can provide for a business or an organization.</p>
                </div>  
              </div>
        </div>

    <footer>
        <p class="text-footer">
            Copyright &copy; 2021 - All rights reserved|
            Design and development Ravi singh.
        </p>
    </footer>

    <script src="js/resp.js"></script>
</body>

</html>