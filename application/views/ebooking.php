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
        .bg1{
    background-image: url(../img/3.jpg);
    background-size: cover;
}
#form{
    background-color: #000;
    height:550px;
    width:700px;
    margin:auto;
    padding:20px;
    opacity: 0.7;

}
#form h3{
    border-bottom: 2px solid #3399ff;
    width:210px;
    padding: 5px;
}
::placeholder{
    color:#fff
}
#input #group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input2 #group{
    width:195px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input3 #group{
    margin-left: 50px;
}
#input4 #group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input4 #group1{
    width:615px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input5 h3{
    border-bottom: 2px solid #3399ff;
    width:220px;
    padding: 5px;
}
#input6 #group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input6 #group1{
    width:615px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}


    </style>
<!-- <body class="bg1"> -->
    <body>
<!------header section---->
<!--container-->
<!-- <div class="container"> -->
<!----form---->
        <!-- <form class="form-group">
            <h1 class="text-center text-white">Airline Booking Form</h1>

            <div id="form">
                <h3 class="text-white">Economy Class Booking </h3>
           
            <div id="input">
                
                </div>
                <div id="input6">
                    <input type="text" id="group" name="fname" placeholder="Full Name"><br>
                    <input type="number" id="group" name="mobile" placeholder="Phone Number">
                    <input type="email" id="group1"  name="email" placeholder="Email">
                    <input type="number" id="group1"  name="aadhar" placeholder="Aadhar Number">
                </div>
                <div id="input2">
                    <input type="number" id="group" name="adult" placeholder="Adult">
                    <input type="number" id="group" name="children" placeholder="Children(2-11years)">
                    <input type="number" id="group" name="infant" placeholder="infant(under 2years)">
                    <input type="number" id="group" name="citizen" placeholder="senior citizen">
                </div>
               
                <div id="input4">
                    <input type="text" id="group" placeholder="Return Date">
                    <input type="text" id="group" placeholder="Return time">
                   
                </div>
                <div id="input5">
                    <h3 class="text-white">Personal Details</h3>
                </div>
                
                <button type="submit" class="btn btn-warning text-white">Submit Form</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div>
        </form>
    </div>
</body> -->
<form action="" class="form-control">
  <!--  General -->
  <div class="form-group">
    <h2 class="heading">Booking & contact</h2>
    <div class="controls">
        <label for="name">Name</label>
      <input type="text" id="name" class="floatLabel" name="name">
      
    </div>
    <div class="controls">
        <label for="email">Email</label>
      <input type="text" id="email" class="floatLabel" name="email">
      
    </div>      
    <div class="controls">
        <label for="phone">Phone</label>
      <input type="tel" id="phone" class="floatLabel" name="phone">
      
    </div>
    <div class="controls">
        <label for="phone">Phone</label>
      <input type="tel" id="phone" class="floatLabel" name="phone">
      
    </div>
    <div class="controls">
        <label for="phone">Phone</label>
      <input type="tel" id="phone" class="floatLabel" name="phone">
      
    </div>
    <div class="controls">
        <label for="phone">Phone</label>
      <input type="tel" id="phone" class="floatLabel" name="phone">
      
    </div>
    <button type="submit" value="Submit" >Submit</button>

      
</form>



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
</script>
</body>
</html>

