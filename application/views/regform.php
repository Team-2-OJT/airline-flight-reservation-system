<!DOCTYPE html>
<html>
    <head>
        <title>Assignment2</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="css/styl.css">
    </head>
<body>
<!-- main section start -->
<section class="">
<div class="container ">
<div class="row">


<div class="col-6 py-5 mt-5 text-right">
<h3 class="text-primary h2">REGISTRATION</h3>
<img src="img/sg.jpg" alt="sample" class="img-fluid img">
</div>
<div class="col-6 box1">

<form action="tablestudent.php" method="get" class="border  border-2 border-light p-5 rounded-bottom rounded">

  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="username" name="name" >
    </div>
  </div>
 
  <div class="mb-3">
  <textarea class="form-control" placeholder="address" rows="3" name="address"></textarea>
</div>
<div class="mb-3">
<input class="form-check-input" name="gender" type="radio"  value="female"id=female>
<label class="form-check-label " for=female  >female</label>
<input class="form-check-input" name="gender" value="male" type="radio" id=male>
<label class="form-check-label " for=female >male</label>
</div>
<div class="row mb-3">
    <div class="col-sm-10">
      <input type="number" class="form-control" placeholder="phone-no" name="phone" >
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="number" class="form-control" placeholder="age"  name="age">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="email" class="form-control" placeholder="email" name="email" >
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="password" class="form-control" placeholder="password" name="pass" >
    </div>
  </div>
  <input type="submit" class="btn btn-primary" value="sign-up">

  <a href="signin.php">Sign-In</a>
 
  </form>
 
</div>

</div>
</div>
</section>
<!-- main section end -->
<section class="">


</section>


<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>