<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
   <!---<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>--->

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
  

        <div class="container-fluid nav_bg">
            <div class="row">
               
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><b>TRAVELMORE</b></a>
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sabout">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="gallery.php">Gallery</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     
                      <li><a class="dropdown-item" href="selectpkg.php">select package</a></li>
            
                      <li><a class="dropdown-item" href="createpkg.php">create package</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="pasttour.php">Past Tours</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#sect4">Contact Us</a>
                  </li>
                </ul>
               
             
            </div>
          </nav>
        </div>
    </div>
    </div>
<div class="jumbotron jumbotron-fluid height100px banner" id="Home"> 
    <section id="home" class="d-flex ">
 <div class="container-fluid h100">
     <div class="contentBox h100"> 
     <div class="content">            
        <h5><i>welcome to India</i></h5>
       <h1>Discover the beauty with <strong class="brand-name">TravelMore</strong></h1>
       <h2 class="my-3">
           We make you travel to your destinations
       </h2>
       </div>
      </div>    
       </div>
</div>
      
    </section>
    
  <section id="sabout" class="u-clearfix u-image u-shading u-section-3" id="about" data-image-width="1600" data-image-height="1067">
                
                    <div class="container-fluid nav_bg">
                      <div class="row">
                          <div class="col-lg-6 col-md-5 mx-auto"  style="text-align: center;
                       
                       color: #0c0b0b;
                      padding-left: 280px;
                     width: 60%;
                           padding-top: 30px;">
                    <h2 class="u-text u-text-1"> About Us</h2>
                    <p><strong>TravelMore</strong> is a tour agency, specializing in organizing tours to all destinations. We are happy to make your holidays unforgettable and amazing! Our agents are experts in finding you the most comfortable and interesting place for you to have breathtaking holidays.<br>Select the country you’d like to visit and provide our agents with estimated time – they’ll find and offer the most suitable tours and hotels.<br>
                      <br>
                      <br><b>
                        <font class="u-text-palette-3-base">During our work we organized countless journeys for our clients. We started as a small tour bureau, and soon we expanded our offers list. Today we have valuable experience travelling and we can advise the most stunning resorts, cities and countries to visit!</font></b>
                    </p>
                    
                    </div>
                    </div>
                  </div>
                </section>

    <section id="sect4" class="contact">
      <div class="contnt">
        <h2>Contact Us</h2>
        <p>Stay Connected, Do share your enquiries and suggestions with us.</p>
      </div>
      <div class="containr">
        <div class="contactInfo">
          <div class="box">
            <div class="icon"></div>
              <div class="text">
                <h1>Address</h1>
                <p>4321 Sarojni Nagar,<br>New Delhi,India,<br>456833</p>
              </div>
          </div>
          <div class="box">
            <div class="icon"><i class="fa fa-phone"></i></div>
              <div class="text">
                <h1>Phone</h1>
                <p>643-493-5439</p>
              </div>
          </div>
          <div class="box">
            <div class="icon"></div>
              <div class="text">
                <h1>Email</h1>
                <p>divyaathakur@gmail.com</p>
              </div>
          </div>
        </div>
        <div class="contactForm">
          <form action = "contactform.php" onsubmit = "return validation()" method = "POST">
            <h2>Send Message</h2>
            <div class="inputBox">
              <input type="text" name="fullname" required="required">
              <span>Full Name</span>
            </div>
            <div class="inputBox">
              <input type="text" name="email" required="required">
              <span>Email</span>
            </div>
            <div class="inputBox">
              <textarea required="required" name="message"></textarea>
              <span>Type your Message...</span>
              <div class="inputBox">
                <input type="submit"  value="Send">
              
              </div>
          </form>
        </div>
      </div>

    </section>

 
 
</body>
<footer>
  <h6>do travel</h6>
  
  
      </footer>
    
</html>