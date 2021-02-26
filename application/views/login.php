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
      input{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20px;
}

button:hover {
  opacity: 0.8;
}

.modal {
  display: none;
  position: fixed;  
  left: 0;
  top: 0;
  width: 50%;
  height: 50%;
  padding-top: 0px;
}


.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 80%;
}

    </style>
<body>

<section >
  <div class="container">
    <div class="row">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
          <div id="id01" class="col-6 modal">
            <form  action="<?php echo base_url()?>main/logins" method="POST" class="modal-content animate border  border-2   border-dark p-5 rounded-bottom rounded bg-dark">
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="email" name="email" >
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-10">
                  <input type="password" class="form-control" placeholder="password" name="password">
                </div>
              </div>
                <input type="submit" class="btn btn-success" style="width: 100px;" value="sign-in">
                <a href="" class=" text-white">Sign-Up</a>  
            </form>  
          </div>
    </div>
  </div>
</section>
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