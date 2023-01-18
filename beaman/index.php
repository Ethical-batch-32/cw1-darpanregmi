<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>
<body>
    <section id="header">
        <div>
        <img src="yogalol.webp" class="header-img">
        </div>
    </section>
    <section id="banner">
        <div class="banner-text">
            <h1>Yoga & Meditate Center</h1>
            <p>Here To Meet Your Health Goals</p>
            <!-- notification message -->
  	        <?php if (isset($_SESSION['success'])) : ?>
              <div class="error success" >
      	        <h3>
                  <?php 
                  	echo $_SESSION['success']; 
                  	unset($_SESSION['success']);
                  ?>
              	</h3>
              </div>
          	<?php endif ?>

            <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) : ?>
            	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
           <?php endif ?>
        </div>
    </section>
    <div id="sideNav">
        <nav> 
            <ul>
                <li><a href="#banner">HOME</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#footer">Connect with Us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <div id="menubtn">
        <img src="menubutton.png" id="menu">
    </div>
    <!----Features-->
    <section id="features">
        <div class="title-text">
            <p>Features</p>
            <h1> Why Choose Us?</h1>
        </div>
        <div class="features-box">
            <div class="allfeatures">
                <h1>Fresh Morning Environment</h1>
                <div class="allfeatures-desc">
                    <div class="allfeatures-text">
                        <p>Doing yoga in the morning when you are in a fresh environment is very essential for good health. Our yoga center provides a peaceful park inside it which is filled with greenery for doing yoga and meditation.</p>
                    </div>
                </div>
                <h1>Affordable Cost</h1>
                <div class="allfeatures-desc">
                    <div class="allfeatures-text">
                        <p>Our service is very cheap. It only costs Rs.1000 each month for one person.</p>
                    </div>
                </div>
                <h1>Experienced Yoga Instructors</h1>
                <div class="allfeatures-desc">
                    <div class="allfeatures-text">
                        <p>We have esperienced yoga instructors to help you practice proper yoga and meditation.</p>
                    </div>
                </div>
            </div>
            <div class="features-image">
                <img src="yogaiscool.jpg">
            </div>
        </div>
    </section>
    <section id="service">
        <div class="title-text">
            <p>Services</p>
            <h1>We Provide Better Services For Your Health</h1>
        </div>
        <div class="service-box">
            <div class="single-service">
                <img src="weightloss.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Weight Loss Exercices</h3>
                    <hr>
                    <p> We suggest better diet plans and exercises to lose weight in a healthy way.</p>
                </div>
            </div>
            <div class="single-service">
                <img src="yoga.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Various Yoga Practise</h3>
                    <hr>
                    <p> We perform and teach various sets of yoga practises which boosts your immunity system.</p>
                </div>
            </div>
            <div class="single-service">
                <img src="yogainpark.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Fresh Environment</h3>
                    <hr>
                    <p> We provide far better and healthy environment to practise yoga.</p>
                </div>
            </div>
            <div class="single-service">
                <img src="yogateacher.jpg">
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3>Personal Yoga Instructor</h3>
                    <hr>
                    <p> You can book a skilled yoga instructor for yourself with a little extra pay.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials-->
    <section id="testimonials">
        <div class="title-text">
            <p>Testimonials</p>
            <h1>What Our Customers Tell About Us</h1>
        </div>
        <div class="testimonials-row">
            <div class="testimonials-col">
                <div class="user">
                    <img src="image1.jpg">
                    <div class="user-info">
                        <h4>Avinash Adhikari<i class="fa fa-twitter" style="color:#00acee"></i></h4>
                        <small>@aviadhikari</small>
                    </div>
                </div>
                <p>Yoga & Meditate Center helped me reached my fitness goals. 
                    I am down by 30 pounds with better metabolism.</p>
            </div>
            <div class="testimonials-col">
                <div class="user">
                    <img src="image2.jpg">
                    <div class="user-info">
                        <h4>Priyansh Regmi<i class="fa fa-twitter" style="color:#00acee"></i></h4>
                        <small>@prinepali123</small>
                    </div>
                </div>
                <p>Doing yoga and meditation during in mornings in Yoga & Meditate Center 
                    helped me boost my immunity. I am healthy more than ever.</p>
            </div>
            <div class="testimonials-col">
                <div class="user">
                    <img src="image3.jpg">
                    <div class="user-info">
                        <h4>Krishna Poudel<i class="fa fa-twitter" style="color:#00acee"></i></h4>
                        <small>@duplicateKP</small>
                    </div>
                </div>
                <p>Yoga & Meditate Center has tons of skilled professionals who 
                    helped me do better yoga.</p>
            </div>
        </div>
    </section>
<!--footer-->
    <section id="footer">
        <div class="title-text">
            <p>Connect With Us</p>
            <h1>Make A Trip To Our Center</h1>
        </div>
        <div class="footer-row">
         <div class="footer-left">
             <h1>Opening Hours</h1>
             <p><i class="fa fa-clock-o"></i> Sunday to Friday - 5am to 10am</p>
             <p><i class="fa fa-clock-o"></i> Saturday - 6am to 10am</p>
         </div>
         <div class="footer-right">
             <h1>Be In Touch With Us</h1>
             <p>New Padma Colony, Nagarjun, KTM City <i class="fa fa-map-marker"></i></p>
             <p>darpanregmee246@gmail.com <i class="fa fa-paper-plane"></i></p>
             <p>+977-9869706456 <i class="fa fa-phone"></i></p>
         </div>
        </div>
        <div class="social-links">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube-play"></i>
            <p>Copyright @ Darpan Regmi Pvt. Ltd.</p>
        </div>
    </section>
    <script>
        var menubtn = document.getElementById("menubtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")

        sideNav.style.right = "-250px";
        menubtn.onclick = function(){
            if(sideNav.style.right== "-250px"){
                sideNav.style.right="0";
                menu.src="closebutton.png";
            }
            else{
                sideNav.style.right = "-250px";
                menu.src = "menubutton.png";
            }
        }
        var scroll = new SmoothScroll('a[href*="#"]', {
	        speed: 1100,
	        speedAsDuration: true
        });
    </script>
<body>
</html>