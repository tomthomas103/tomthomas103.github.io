<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AM RUBBER</title>
    <link rel="icon" href="assets/A.M Rubbers_BusinessCardFrontcopy.PNG" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    
    <script src="https://kit.fontawesome.com/a815a59ac0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
    <header id="top" class="fixed-top">  
          <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img class="logo d-none d-sm-block" src="assets/A.M Rubbers_BusinessCardFrontcopy.PNG" alt=""></a>
            <span class="name">AM RUBBER INDUSTRIES</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link"  href="#pto"  id="nave1">Home </a>
                </li>

                <li class="nav-item active">
                   <a class="nav-link" href="#product"  id="nave2">Products </a>
                </li>

                  <li class="nav-item active">
                    <a class="nav-link" href="#about" id="nave3">About Us </a>
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link" href="#contact" id="nave4">Contact Us </a>
                  </li>
                
              </ul>
              
            </div>
          </nav>
        
    </div>  
    </header>
    <?php 
                          ini_set('display_errors', 1);
                          ini_set('display_startup_errors', 1);
                          error_reporting(E_ALL);
    ?>

    <section id="pto">
        <div class="container-fluid p-0" style="max-width: 1535px; overflow: hidden;">
            <div class="row">
                  <div class="col-md-12" style="padding-top: 4.5em;">
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" id="mainCarousel">

                             

                            </div>
                      </div>
                </div>
          </div>
        </div>
    </section>

    

 





    <section id="product">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-1 col-1 side d-flex justify-content-center"></div>
          <div class="col-md-11 col-11">
            <span class="nm_pr">Featured Products</span>
          </div>
        </div>
      </div>
    </section>


    <section>
      <div class="container">
        <div class="row">
                
      
        <?php 

                        $connection=mysqli_connect("localhost","myapp","Myapp@123");
                          $db=mysqli_select_db($connection,'amrurweb');

                            $query=" SELECT * FROM `products` ";

                               $query_run=mysqli_query($connection,$query);
                                   
                                  while($row=mysqli_fetch_array($query_run)){
                                    $id=$row['id']
                              ?>


          <div class="col-md-3 col-12 pr_div d-flex justify-content-center">
            
            <div class="card <?php if($id>2){echo "card1";} else echo "card2"; ?>" style="width: 16rem;" id="card">
              <img style="width: 253px; height: 250px;" class="card-img-top" src="<?php echo $row['path'] ?>"  alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center"><?php echo $row['name'] ?></h5>
                <p class="card-text text-center"><?php echo $row['des'] ?></p>
                <a href="innerpage.php?edit=<?php echo $id ?>&pro_name=<?php echo $row['name']?>" class="btn" >Know More<i class="fas fa-arrow-circle-right"></i></a> 
              </div>
            </div>
          </div>

          <?php } ?>

          

          
        </div>
      </div>
   
    </section>


    

    <section id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-11 col-11 d-flex justify-content-end">
            <span class="nm_pr">About Us</span>
          </div>
          <div class="col-md-1 col-1 side d-flex justify-content-center"></div>
        </div>
      </div>
    </section>

    <section id="about">
      <div class="container">
        <div class="row">
          
        <?php 

$connection=mysqli_connect("localhost","myapp","Myapp@123");
  $db=mysqli_select_db($connection,'amrurweb');

    $query=" SELECT * FROM `about_des` ";

       $query_run=mysqli_query($connection,$query);
           
          while($row=mysqli_fetch_array($query_run)){
            $da=$row['des'];
          }
      ?>
       

          <div class="col-md-6 about_div">
            <p><?php echo $da ?></p>
          </div>

          

          <div class="col-md-6 about_div_right">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" style="border-radius: 5px;">

              <?php 

$connection=mysqli_connect("localhost","myapp","Myapp@123");
  $db=mysqli_select_db($connection,'amrurweb');

    $query=" SELECT * FROM `about_img` ";

       $query_run=mysqli_query($connection,$query);
           
          while($row=mysqli_fetch_array($query_run)){
            
          
      ?>
                <div class="carousel-item carousel-item2 <?php echo $row['status'] ?>">
                  <img class="d-block w-100" src="<?php echo $row['path'] ?>" alt="First slide">
                </div>
              <?php } ?>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-1 col-1 side d-flex justify-content-center"></div>
          <div class="col-md-11 col-11">
            <span class="nm_pr">Contact Us</span>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="contact_main col-md-6 ">
            
              <div class="row">
                <div class="contact col-md-12 ">
                  <i class="fas fa-phone-alt"></i>
                  <label for="">+91 9778998712</label>
                </div>
              </div>

           <div class="row">
              <div class="contact col-md-12">
                <i class="fas fa-at"></i>
                <label for="">sample@gmail.com</label>
              </div>
            </div>

            <div class="row">
              <div class="contact col-md-12 " style="margin-bottom: 0 !important;">
                <i class="fas fa-map-marker-alt"></i>
                <label for="">Karukutty Elavoor Rd, Karukutty, Kerala 683572</label>
              </div>
            </div>

          </div>

          <div class="col-md-6 contact_right">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Name</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Email</label>
                  <input type="email" class="form-control" id="inputPassword4" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Subject</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Subject">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Message</label>
                <textarea  class="form-control"  placeholder="Message" id="inputAddress2"></textarea>
              </div>
               
              <div class="row d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" style="font-family: 'Kanit', sans-serif;">Send Message</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>

    <footer  id="foot">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-7 foot">
              <span>AM RUBBER INDUSTRIES</span>
              <p>Karukutty Elavoor Rd, Karukutty, Kerala 683572</p>
                <label for=""> <i class="fas fa-phone-alt"></i> +91 9778998712 </label>
                <label for=""> <i class="fas fa-at"></i></i>sample@gmail.com </label>
                <p></p>
            </div>

            <div class="col-md-6">
              
            </div>

            <div class="col-md-3">
              <label for="">Find us on google map</label>
              <div class="mapouter"><div class="gmap_canvas"><iframe width="374" height="150" style="border-radius: 5px;" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:191px;width:374px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:191px;width:374px;}</style></div></div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="d-flex justify-content-center">
              <a href="#pto"><i class="fas fa-arrow-circle-up"></i> <br> Back to top </a>
             
            </div>
            </div>
          </div>
        </div>


    </footer>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12  text-center">
            <label for="">© Copyright 2021 AM Rubber Industries All Rights Reserved Powered by Ashiq Sabith</label>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>