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
<body class="bg1">
<!------header section---->
<!--container-->
<div class="container">
<!----form---->
<form class="form-group" action="<?php echo base_url()?>main/flyinsrt" method="POST" >
            <h1 class="text-center text-white">Admin Dashboard</h1>

            <div id="forms" >
                <h3 class="text-white">Flight Details</h3>
           
            <div id="input">
                <input type="text" id="group" placeholder="Company Name" name="cname">
                <input type="text" id="group" placeholder="Flight ID" name="flightid"><br>
                <input type="text" id="group" placeholder="From" name="flyfrom">
                <input type="text" id="group" placeholder="To" name="flyto"><br>
       
            <div id="input1" >
                 <label for="group" class="text-white">Departure Time</label>
                <input type="time" id="group" placeholder="Departure Time" name="dtime">
               
                 <label for="group" class="text-white">Arrival Time</label>
                <input type="time" id="group" placeholder="Arrival Time" name="atime"><br>
               
             </div>
                <input type="text" id="group" placeholder= "Economy Class">
                <input type="number" id="group" placeholder= "Seat Capacity" name="eseat">
                <input type="text" id="group" placeholder="Cost" name="ecost">
                <input type="text" id="group" placeholder= "Bussiness  Class">
                <input type="number" id="group" placeholder= "Seat Capacity" name="bseat">
                <input type="text" id="group" placeholder="Cost" name="bcost">
                <input type="text" id="group" placeholder= "First Class">
                <input type="number" id="group" placeholder= "Seat Capacity" name="fseat">
                <input type="text" id="group" placeholder="Cost" name="fcost">
                </div>
               
               
                <div id="input4">
                    <input type="date" id="group" placeholder="Date" name="date">
                   
               
                   
                </div>
               
               
                <button type="submit" class="btn btn-warning text-white" name="update" style="width: 80px;" >update</button>
               
            </div>
        </form>
    </div>
</body>


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
