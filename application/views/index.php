<!DOCTYPE html>
<html>
    <head>
        <title>Afrs</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/style.css">
    </head>
    <style>
    	body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%;  Full height 
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

    
    </style>
<body>
	<!--header section started--->
 <header>
	<nav class="bg">
		<div class="container-fluid py-3 text-white">
			<div class="row">
				<div class="col-3">
				     <i class="fas fa-map-marker-alt">Chavadimukk,Sreekariyam</i>
				</div>
				<div class="col-3">
				     <i class="fa fa-phone">-9605805161</i>
				</div>
				<div class="col-3">
				     <i class="fa fa-envelope"> team2@gmail.com</i>
				</div>
				<div class="col-3 text-end">
				     <i class="fab fa-facebook"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-google"></i>
					<i class="fab fa-pinterest"></i>
				</div>

			</div>

		</div>
	</nav>
</header>
<!-- header section ended -->
<!--menu section-->

	 <nav class="navbar navbar-expand-lg bgtop">
		<div class="container">
			<img src="../img/logo1.jpg">
			<div>
					<ul class="navbar-nav">
						<li class="nav-item "><button type="button" class="btn btn-light" id="">Home</button></li>
						<li class="nav-item"><button type="button" class="btn btn-light" id="">About</button></li>
						<li class="nav-item"><button type="button" class="btn btn-light" id="">Services</button></li>
						<li class="nav-item"><button type="button" class="btn btn-light">Contact</button></li>
							<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn btn-light">Login</button>
						<li><button  onclick="document.getElementById('id02').style.display='block'" style="width:auto;"class="btn btn-light"><i class="fa fa-search mt-1	 px-1" aria-hidden="true"></i></button></li>
					</ul>
		    </div>
		</div>	
	</nav>


 <!-- menu section ended -->
<!--section1 started--->
 <section>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/banner2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>"The sky is waiting for You"</h1>
        <p>you can easily book any ticket you need to travel safely thanks to our detailed system of searching and booking airline tickets.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/banner3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/banner4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<!--section1 ended-->
<!---section 2--->
<section>
	<div class="container-fluid py-5 align-items-center">
		<h1 class="text-center"> SERVICES</h1>
		<div class="row mt-5">
			
			<div class="col-1 "> 
				<img src="../img/search.png" class="w-75">
			</div>
			<div class="col-3">	
				<h1>The World's Travel Search Engine</h1>
				<p>You can use our search engine to find any flight you want and select a desired destination and price.</p>
			</div>
			<div class="col-1"> 
				<img src="../img/flight.png" class="w-100">
			</div>
			<div class="col-3">	
				<h1>Cheap and Beneficial Air Tickets</h1>
				<p>We provide affordable tickets to the flights of almost all existing airlines so you don’t need to look for them..</p>
			</div>
			<div class="col-1"> 
				<img src="../img/phone.jpg" class="w-100">
			</div>
			<div class="col-3">	
				<h1>Our Support Lines are Open 24/7</h1>
				<p>Our 24/7 support operators are always ready to help you select a proper flight according to your needs..</p>
			</div>
		</div>
	</div>
</section>
<!-- section 2 ended-->
<!--section 3--->
<section>
	<div class="container-fluid py-5">
		<div class="row px-5">
			<div class="col-3">
				<img src="../img/indigo.png" class="w-100">
			</div>
			<div class="col-3">
				<img src="../img/jet.jpg" class="w-100">
			</div>
			<div class="col-3">
				<img src="../img/airindia.png" class="w-100">
			</div>
			<div class="col-3">
				<img src="../img/emirates.png" class="w-75">
			</div>
		</div>
	</div>
</section>

<!--searchform-->
<!-- <div class="container">
--form--
        <form class="form-group"> -->
          <div id="id02" class="modal container ">
  
  <form class="modal-content animate form-group" action="<?php echo base_url()?>main/searchaction" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
            <h1 class="text-center text-white">Search Flight Details</h1>

            <div id="form">
                <h3 class="text-white">Book a Flight</h3>
                <div id="input3">
                    <span id="input-group" class="text-primary">Select Your Fare</span>
                    <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">One Way</label>
                    <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">Round Trip</label>
                </div>
            <div id="input">
                <input type="text" id="group" placeholder="From">
                <input type="text" id="group" placeholder="To">
                <input type="date" id="group" placeholder="Departure Date">
                <!-- <input type="text" id="group" placeholder="Departure Time"> -->
               
               
                </div>
                <!-- <div id="input2">
                    <input type="number" id="group" placeholder="Passengers">
                   
                </div> -->
               <!--  <div id="input3">
                   
                    <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">Armed Force</label>
                    <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">Senior Citizen</label>
                     <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">Family and Friends</label>
                   
                </div>
                -->
               
                <button type="submit" class="btn btn-primary text-white">Search Flight</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div>
        </form>
    </div>
<!--search form ends-->

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="<?php echo base_url()?>main/logins" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Your Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="<?php echo base_url()?>main/regform">sign-up</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>


<!---section 2 ended-->
<!--footer---->
<footer class="text-center footer">
	<h1 > Contact Us</h1>
	<p>
	  PKM Tours and Travels</br>
	  Bhavani Building
	  Sreekaryam Trivandrum</br>
	  phone:+91 89656423</br>
	  email:pkmtours@gmail.com
	</p>
</footer>
<!---footer ended-->
<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">

</body>		
</html>