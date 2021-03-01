
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
            <link rel="stylesheet" href="../css/styl.css">
    </head>
    <style>
      .bg
      {
        background-image: url('../img/air.jpg');
        background-size: cover;
      }
      *
{
padding:0px;
margin:0px;
}

.menubar
{
background-color:black;
text-align:center;

}
.menubar ul
{
list-style:none;
display:inline-flex;
padding:15px;

}
.menubar ul li a
{
text-decoration:none;
color:white;
padding:15px;
}
.menubar ul li
{
padding:10px;

}
.menubar ul li a:hover
{
background-color:green;
border-radius:10px;

}
.submenu
{
display:none;
}
.menubar ul li:hover .submenu
{
display:block;
position:absolute;
background-color:black;
border-radius:10px;

}
.menubar ul li:hover .submenu ul
{
display:block;
}
.submenu ul li
{
border-bottom:2px solid green;
}
.row
{

display:flex;
}
.col h2
{
text-align:center;
text-decoration:underline;
}
.ft
{
background-color:black;
padding:50px;
text-align:center;
color:white;
}

.first
{
background-image:url("../img/fg.jpg");
background-size:cover;



}
h1
{
font-size: 60px;
}




</style>
  
<body class="bg">
<!-- main section start -->
<section class="">
<div class="container ">
  <nav class="menubar navbar-light">

<ul>
<li> <a href="<?php echo base_url()?>main/index">HOME </a></li>
<li> <a href="#">ADD</a>
<div class="submenu">
<ul>
<li> <a href="<?php echo base_url()?>main/addflight">Add Flight Details</a></li>
<li> <a href="<?php echo base_url()?>main/airport">Add Airport</a></li>
<li> <a href="<?php echo base_url()?>main/notification">Add Flight Status</a></li>
</ul>
</div>
</li>

<li> <a href="#">VIEW</a>
<div class="submenu">
<ul>
<li> <a href="<?php echo base_url()?>main/reguserview">Registered User</a></li>
<li> <a href="<?php echo base_url()?>main/viewbooking">Bookings</a></li>
<li> <a href="<?php echo base_url()?>main/updateflight">Flight details</a></li>
<li> <a href="<?php echo base_url()?>main/viewnotification">Flight Status</a></li>
</ul>
</div>
</li>
<li> <a href="#">PAYMENT DETAILS</a>
  <li> <a href="<?php echo base_url()?>main/logout">LOGOUT</a>
</ul>
</nav>


<div class="row">


<div class="col-6 py-5 mt-5 text-right">
  

  <h4 class="text-white text-center p-5 mb-5">" YOU DON'T NEED MAGIC TO DISAPPEAR.ALL YOU NEED IS A DESTINATION "</h4>

<!-- <img src="../img/ai.jpg" alt="sample" class=" img"> -->
</div>
<div class="col-6 box1 mt-5 bg-dark ">


<form action="<?php echo base_url()?>main/insrtair" method="POST" class="border  border-2 border-dark p-5 rounded-bottom rounded ">
  <h3 class="text-white h2 " style="text-decoration: underline;">AIRPORT DETAILS</h3></u>

  <div class="row mt-5 ">
    <div class="col-10 mb-3  ">
    	
      <input type="text" class="form-control" placeholder="Airport name" name="aname">
    </div>
  </div>
  <div class="row">
      <div class="col-10 mb-3">
            <input type="text" class="form-control" placeholder="Abbrevation" name="abname"required >
          </div>
        </div>
        <div class="row mb-3">
    <div class="col-10">
      <input type="text" class="form-control" placeholder="City"  name="city" required="">
    </div>
  </div>


<div class="row mb-3">
    <div class="col-10">
      <input type="text" class="form-control" placeholder="State" name="state" required >
    </div>
  </div>
  
  <div class="row mb-3">
    <div class="col-10">
      <input type="text" class="form-control" placeholder="Pincode" name="pincode" required >
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      <input type="timezone" class="form-control" placeholder="Time Zone" name="timezone" required  >
    </div>
  </div>
  <input type="submit" name="submit" class="btn btn-info" value="Submit">

  
 
  </form>
 
</div>

</div>
</div>
</section>
<!-- main section end -->


<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>