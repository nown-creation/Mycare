<?php
	session_start();
	if(!isset($_SESSION['login'])){
    header("Location:login.php");
    exit(); 
	
	
	if(isset($_POST['submit1']))
	{
		
		$msg = "You have a doubt from a customer"."\r".$name. "\r". $email ."\r". $mobile ."\r" .$doubts;

		$msg = wordwrap($msg,200);
		$headers = "From:".$email."\n\r"."cc : yoursite";

		$value = mail("mycarebio@gmail.com","MYCARE-Doubts",$msg,$headers);
		echo $value;
	}
	else
	{
		error_reporting(-1);
		ini_set('display_errors', 'On');
		set_error_handler("var_dump");
	}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

		<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,400;0,500;0,600;0,800;1,200&display=swap" rel="stylesheet">
    
    <!--owl-carousel-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  
    <!--fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
  <link rel = "icon" href = "img/logo.png"type = "image/x-icon">
  <title>MY CARE</title>
  </head>

  <body>
  
<div class="header" id="header">
<div class="header-inner" id="header-inner">
<div class="container">
  <nav class="navbar navbar-expand-lg my-navbar py-lg-0 py-sm-0 py-0 px-lg-0">
<a class="navbar-brand" href="#"><img src="img/logo.png" style="border-radius:10px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" data-scroll="out">
  <div id="nav-icon1">
  <span></span>
  <span></span>
  <span></span>
</div>
  </span>
  </button>

  <div class="collapse navbar-collapse mobile-menu d-flex flex-lg-row flex-column flex-xl-row justify-content-lg-end justify-content-md-start" id="navbarSupportedContent">
    <ul class="navbar-nav align-self-stretch">
      <li class="nav-item">
        <a class="nav-link " href="#home-section">Home</a>
      </li>
    
     <li class="nav-item">
        <a class="nav-link underline" href="#aboutus"> About Us</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#service"> Service</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#gallery">Gallery </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#contact"> contact us</a>
      </li>
    
   
      
    </ul>

        <form class="form-inline my-2 my-lg-0 ml-2 align-self-stretch">
      <a href="login.php" class="header-btn">Logout
					  
	</a>
        </form>

  </div>
</nav>
</div>
</div>
</div>


  <div class="intro-section custom-owl-carousel" id="home-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mr-auto">

            <div class="owl-carousel slide-one-item-alt-text">
              <div class="slide-text">
                <h1>Hair Setting</h1>
                <p class="mb-5">Setting your hair right can give you a perfect look for the occasion.You can just walk in and trust us for it.</p>
                <p><a href="hair.php" class="btn btn-outline-light py-3 px-5">BOOK</a></p>
              </div>
              <div class="slide-text">
                <h1>Skin Treatment</h1>
                <p class="mb-5">We offer great skin treatments for different kinds of skin so you start feeling better with every sitting.</p>
                <p><a href="skin.php" class="btn btn-outline-light py-3 px-5">BOOK</a></p>
              </div>
              <div class="slide-text">
                <h1>Bridal Henna</h1>
                <p class="mb-5">A romantic way of enhancing the beauty of your bridal look, a smile and dark stained henna are the most beautiful makeups a bride can wear.</p>
                <p><a href="bride_h.php" class="btn btn-outline-light py-3 px-5">BOOK</a></p>
              </div>
              <div class="slide-text">
                <h1>Bridal Make Up</h1>
                <p class="mb-5">Wish to experiment with a new look? Fear not. We are here to guide and help you with a makeover.</p>
                <p><a href="bride.php" class="btn btn-outline-light py-3 px-5">BOOK</a></p>
              </div>
            </div>

          </div>
          <div class="col-lg-6 ml-auto">
                        
            <div class="owl-carousel slide-one-item-alt">
              <img src="img/HAR.jpg" alt="Image" class="img-fluid">
              <img src="img/MAK2.jpg" alt="Image" class="img-fluid">
              <img src="img/MEH1.jpg" alt="Image" class="img-fluid">
			  <img src="img/bridal.jpg" alt="Image" class="img-fluid">
              
            </div>

            <div class="owl-custom-direction">
              <a href="#" class="custom-prev"><i class="fas fa-chevron-left"></i></a>
              <a href="#" class="custom-next"><i class="fas fa-chevron-right"></i></span></a>
            </div>

          </div>
        </div>
      </div>
    </div><br>
	
	<section id="aboutus">
		<div class = "image">
                <!-- image here -->
				<img src="img/about-image.jpg" width="500px" height="650px">
            </div>

            <div class = "content">
                <h2>About Us</h2>
                <span><!-- line here --></span>
				<h5>We are a team of 2 certified beauty professionals with over
				5 years of experience and certifications that commend our work.</h5>
		<p>If you are looking for the best beauty services ranging from threading, facial, haircuts and more,
		you can walk in here. Graduating from the best beauty schools, and working with top beauty professionals 
		we have mastered the skills of delivering the best beauty and spa services in town.Over the years we have 
		served hundreds of happy clients who trust us for their look for important occasions like weddings,
		corporate parties, concerts, events and more. So, whether it is a quick touch-up or detailed beauty
		therapies, we are here to help you.</p>
		
		</div>
		</section>
			
		<div class="expandnotes">
		<center><h2>click below to know More about our mission and us:</h2><br>
		
		<div class="button"><button style="width:90px; " onclick="myFunction()">Mission</button>
		<button style="width:80px; " onclick="myFunction1()">Work</button></div><br>
			<div id="myDIV">
			<button style="width:60px; border-radius:25px;float:right; margin-right:5px;" 
			onclick="Function()">close</button>
			<br><br><h3>Mission</h3><span><img src="icons/hr.svg"><br><br>
			<h3>We offer high-quality beauty and spa services to make your day!</h3>
				<p>Our mission is to provide a friendly, personalized service through a team of highly
				skilled and creative professionals. Teamwork is our most valuable asset which ensures 
				our clients are always a priority, and we strive to exceed your expectations.</p>
				
			</div>
			<div id="myDIV1">
			<button style="width:60px; border-radius:25px;float:right; margin-right:5px;" 
			onclick="Function1()">close</button>
			<br><br><h3>Who we are?</h3><img src="icons/hr.svg"><br><br>
			<h3>We are a team of 2 certified beauty professionals with an extensive experience known to
				have covered major concerts and events in town</h3>
				<p>We are known for the affordable and hassle-free services that we offer to all our
				 clients who’ve been trusting us since years. So, if you are looking for a combination 
				 of reasonable and professional beauty services, you won’t regret coming to us. 
				 We’ve mastered the art of understanding client requirements and delivering the best.
				 </p>
				
			</div>
			</div>
		</center>
		
		<section id="more">
		<div class = "content">
                
				<h2>Why Choose Us?</h2>
			<p><i class="fa fa-arrow-right"></i> Honest and flat-rated beauty services</p>
			<p><i class="fa fa-arrow-right"></i> One to one friendly and personal service</p>
			<p><i class="fa fa-arrow-right"></i> Flexible and reliable service to meet your needs</p>
            </div>

            <div class = "content">
            <h2>Our Values</h2>
				<p><i class="fa fa-arrow-right"></i> The highest level of enthusiasm for our profession</p>
				<p><i class="fa fa-arrow-right"></i> Focus on cleanliness & maintenance</p>
				<p><i class="fa fa-arrow-right"></i> Keep creativity and artistry at their best</p>
		</div>
		</section>
		
		<!-- Service Section -->
    <section id="service">

        <div class="mainheading">
            <h1>What We Offer</h1><center><img src="icons/hr.svg"></center><br>
			<p>“Makeup is malleable and mercurial: The biggest joy
			I have every day is the opportunity</p><p>to create, to play, and to invent 
			with something I’ve loved forever.” </p>
        </div>

        <div id="cards">

            <div id="box1" class="boxcustom">
               <center> <img src="img/makeup.jpg" alt="Make Up"></center>

                <h2 class="subheading"> Make Up</h2>

                <p>Wish to experiment with a new look? Fear not. We are here to guide
					and help you with a makeover.</p>

                <a class="readmore" href="bride.php" >Book Now </a>

            </div>
			<div id="box2" class="boxcustom">
                <center><img src="img/col.jpg" alt="Hair Color"></center>

                <h2 class="subheading"> Hair Color</h2>

                <p>Setting your hair right can give you a perfect look for the occasion.
					You can just walk in and trust us for it.</p>

                <a class="readmore" href="hair.php" >Book Now </a>

            </div>
            
            <div id="box3" class="boxcustom">
                <center><img src="img/cut.jpg" alt="Hair cut"></center>

                <h2 class="subheading"> Hair cutting</h2>

                <p>Our hair spa sessions are known to result in smooth and healthy hair growth. 
                </p>

                <a class="readmore" href="hair.php" >Book Now </a>

            </div>
            <div id="box4" class="boxcustom">
                <center><img src="img/MEh4.jpg" alt="Bridal Henna"></center>

                <h2 class="subheading">Bridal Henna</h2>

                <p>A smile and dark stained henna are the most beautiful makeups a bride can wear. </p>

                <a class="readmore" href="bride_h.php" >Book Now</a>

            </div>
            <div id="box5" class="boxcustom">
               <center><img src="img/service4.jpeg" alt="Skin Treatment"></center>

					<h2 class="subheading">Skin Treatment</h2>

                <p>We offer great skin treatments for different kinds of skin so you start 
					feeling better with every sitting.</p>
                <a class="readmore" href="skin.php" >Book Now</a>

            </div>
            <div id="box6" class="boxcustom">
                <center><img src="img/mission.jpg" alt="Bridal Makeup"></center>
				
				<h2 class="subheading">Bridal Makeup</h2>

                <P>Wish to experiment with a new look? Fear not. We are here to guide
					and help you with a makeover.</P>
                

                <a class="readmore" href="bride.php" >Book Now </a>
            </div>
        </div>
    </section>
	
			<section id= "gallery"class="gallery">
					<center><h1 >GALLERY</h1><img src="./icons/hr.svg">
					<p>Here’s a quick look at the beauty transformations that we have worked on.
						Whether it </p><p>is a temporary makeup or a complete makeover, you can trust us.</p></center>
						
					
					<div class="img" align="center">
						<img src="img/henna1.jpg" height="300px" width="250px"alt="">
					
						<img src="img/service.jpg" height="300px"width="250px" alt="">
					
						<img src="img/gal3.jpg"	height="300px" width="250px" alt="">

						<img src="img/gal5.jpg"  height="300px"width="250px" alt="">
						
						
					</div>
					<br>
					<br>
					
				</section>
				
		<section id="contact">
		<div class = "image">
                <!-- image here -->
				<img src="img/logo1.png" width="450px" height="450px" style="border-radius:450px;">
            </div>

            <div class = "content">
                <h2>Contact Us...</h2>
                <span><!-- line here --></span>
				<p>If you have any queries calrify it by sending your doubts to us.</p>
				 <form action="index.php" method="post">
				 <div class="form-group">
					<label for="exampleInputName">Name</label>
					<input type="text" class="form-control" id="exampleInputName" placeholder="Name" name="name">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
					<label for="exampleInputPhone">Phone Number</label>
					<input type="tel" class="form-control" id="exampleInputPhone" aria-describedby="phoneHelp" placeholder="Enter Phone Number" name="mobile">
					<small id="PhoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
				  </div>
				  <div class="form-group">
					<label for="exampleFormControlTextarea1">Enter Your Doubts..</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "doubts"></textarea>
				  </div>
				  
				  <button type="submit" class="btn btn-primary" height="20px" name="submit1">Submit</button>
				</form>
		
		</div>
		</section>
				
				
				<footer class="contact2">
				<div class="container" id="contact2">
                        <div class="box">
						
                            <h3>Contact us</h3>
                            <div>
                                    <img src="./icons/phone-2.svg" alt="">
                                    <div>
                                        <span>Call us:  </span>
                                        <span>(+91)9600300392</span>
									
                                    </div>
                                </div>
                                <div>
                                    <img src="./icons/bag-2.svg" alt="">
                                    <div>
                                        <span>G-mail :</span>
                                        <span>mycarbio@gmail.com</span>
                                    </div>
                                </div>
                                <div>
                                    <img src="./icons/clock-2.svg" alt="">
                                    <div>
                                         <span>Address:</span>
                                        <span>13/1 Avp layout , 1 st street, GandhiNagar,Tiruppur-641603</span>
                                    </div>
                                </div>
                        </div>
				</footer>
				<footer class="contact1">
                    <div class="container" id="contacts">
                        <div class="box">
						
                            <h3>Contact us</h3>
                            <div>
                                    
                                    <div>
                                        <img src="./icons/phone-2.svg" alt=""> <span>Call us:  </span>
                                        <span>(+91)9600300392</span>
									
                                    </div>
                                </div><br><br>
                                <div>
                                    
                                    <div>
                                       <img src="./icons/bag-2.svg" alt=""> <span>G-mail :</span>
                                        <span>mycarebio@gmail.com</span>
                                    </div>
                                </div><br><br>
                                <div>
                                    
                                    <div>
                                        <img src="./icons/clock-2.svg" alt=""> <span>Address:</span>
                                        <span>13/1 Avp layout , 1 st street, GandhiNagar,Tiruppur-641603</span>
                                    </div>
                                </div>
							
                        </div>
                        <div class="box">
						
                            <h3>Service</h3>
                            <ul>
                                <li>
                                    <a >Casual Make Up</a>
                                </li>
                                <li>
                                    <a >Hair Styling</a>
                                </li>
                                <li>
                                    <a >Skin Treatment</a>
                                </li>
                                <li>
                                    <a >Fashion Make Up</a>
                                </li>
								<li>
                                    <a >Bridal Make Up</a>
                                </li>
								<li>
                                    <a >Professional Photoshoots</a>
                                </li>
                            </ul>
                       
						</div>
						
                        <div class="box">
                            <h3>Timing </h3>
                            <div>
                                <ul>
                                    <li>
                                        <a ><img src="./icons/clock-2.svg" alt="">
                                           Monday – 10.00-08.00
                                        </a>
                                    </li>
									<li>
                                        <a >
                                           Tuesday – 10.00-08.00
                                        </a>
                                    </li>
									<li>
                                        <a ><img src="./icons/clock-2.svg" alt="">
                                           Wednesday – 10.00-08.00
                                        </a>
                                    </li>
									<li>
                                        <a >
                                           Thursday – 10.00-08.00
                                        </a>
                                    </li>
									<li>
                                        <a ><img src="./icons/clock-2.svg" alt="">
                                           Friday – 10.00-08.00
                                        </a>
                                    </li>
									<li>
                                        <a >
                                           Saturday – 10.00-08.00
                                        </a>
                                    </li>
									<li>
                                        <a ><img src="./icons/clock-2.svg" alt="">
                                           Sunday – 10.00-08.00
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        
						</div>
                        
                 
					<div>
                </footer>
  
  <footer class="copyright">
                    <div>
                        Copyright © 2020 .All rights reserved by MyCare | Powered by Maycare.</a>.
                    </div>
                </footer>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
   
   
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

    <script>


    $('.slide-one-item-alt').owlCarousel({
      center: false,
      items: 1,
    dots:false,
      loop: true,
      margin: 0,
      smartSpeed: 1000,
      autoplay: true,
      pauseOnHover: true,
      onDragged: function(event) {
        console.log('event : ',event.relatedTarget['_drag']['direction'])
        if ( event.relatedTarget['_drag']['direction'] == 'left') {
          $('.slide-one-item-alt-text').trigger('next.owl.carousel');
        } else {
          $('.slide-one-item-alt-text').trigger('prev.owl.carousel');
        }
      }
    });
    
    
    $('.slide-one-item-alt-text').owlCarousel({
      center: false,
      items: 1,
      dots:false,
      loop: true,
      margin: 0,
      smartSpeed: 1000,
      autoplay: true,
      pauseOnHover: true,
      onDragged: function(event) {
        console.log('event : ',event.relatedTarget['_drag']['direction'])
        if ( event.relatedTarget['_drag']['direction'] == 'left') {
          $('.slide-one-item-alt').trigger('next.owl.carousel');
        } else {
          $('.slide-one-item-alt').trigger('prev.owl.carousel');
        }
      }
    });

    


    $('.custom-next').click(function(e) {
      e.preventDefault();
      $('.slide-one-item-alt').trigger('next.owl.carousel');
      $('.slide-one-item-alt-text').trigger('next.owl.carousel');
    });
    
    $('.custom-prev').click(function(e) {
      e.preventDefault();
      $('.slide-one-item-alt').trigger('prev.owl.carousel');
      $('.slide-one-item-alt-text').trigger('prev.owl.carousel');
    });

</script>

<script>
  
  $(document).ready(function(){
    $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
      $(this).toggleClass('ham-open');
    });
  });
</script>

<script>
  
  $(document).ready(function(){
    $('.navbar-toggler,.overlay').on("click",function(){
      $(".mobile-menu,.overlay").toggleClass('open-nav');
    });
  });
</script>

<script>
  
  $(document).ready(function(){
      $(window).scroll(function(){
        if($(window).scrollTop() < 60){
          $('.header-inner').removeClass('navbar-scroll');
        }else{
          $('.header-inner').addClass('navbar-scroll');
        }
      });
  });
</script>

   <script>
	
	function myFunction() {
		
		
	  var x = document.getElementById("myDIV");
	  if (window.getComputedStyle(x).display === "none") {
		x.style.display = "block";
	  }
	 } 
	 
	 function Function() {
	  var x = document.getElementById("myDIV");
	  if (window.getComputedStyle(x).display === "block") {
		x.style.display = "none";
	  }
	 }
	 function myFunction1() {
		
		
	  var x = document.getElementById("myDIV1");
	  if (window.getComputedStyle(x).display === "none") {
		x.style.display = "block";
	  }
	 } 
	 
	 function Function1() {
	  var x = document.getElementById("myDIV1");
	  if (window.getComputedStyle(x).display === "block") {
		x.style.display = "none";
	  }
	 }
</script>
 </body>
</html>