<!DOCTYPE html>
<html>
<head>
<title>fac-REGISTRATION</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
body{
  background-image:url("../img/15.jpg");
background-size:cover;
}
fieldset{
width:350px;
height: 500px;
text-align: center;
padding:20px;
margin:90px 490px;
background-color:rgba(0,0,0,0.5);
}
table,td{
color:white;
text-align:justify;
}
h1{text-align:center;
   color:white;}
</style>

</head>
<body>
<h1>Faculty Registration Form</h1>
<center><button><a href="<?php echo base_url()?>main/index">HOME</a></button></center>
<form action="<?php echo base_url()?>main/regaction" method="POST">
  <fieldset>

     <table>
<tr>
<td>FIRST NAME:</td>
<td><input type="text" name="fname" placeholder="First name"></td>
</tr>
<tr>
<td>LAST NAME:</td>
<td><input type="text" name="lname" placeholder="last name"></td>
</tr>
<tr>
<td>DOB</td>
<td><input type="date" name="dob"></td>
</tr>
<tr>
<td>GENDER</td>
<td><input type="radio" name="gender" >Male
<input  type="radio"  name="gender">Female</td>

</tr>
<tr>
<td>ADDRESS:</td>
<td><textarea name="address" placeholder="address"></textarea></td>

</tr>

<tr>
<td>STATE:</td>
<td><select name="state">
<option>KERALA</option>
<option>TAMIL NADU</option>
<option>KARNATAKA</option>
<option>GOA</option>
<option>RAJASTHAN</option>
<option>GUJRAT</option>
<option>UTTARPRADESH</option></select></td>
</tr>
<tr>
<td>DISTRICT:</td>
<td><select name="district">
<option>PATHANAMTHITTA</option>
<option>KOLLAM</option>
<option>ALAPUZHA</option>
<option>TRIVANDRUM</option>
<option>WAYANAD</option>
<option>KANNUR</option>
<option>EDUKKI</option></select></td>
</tr>
<tr>
<td>PINCODE:</td>
<td><input type="text" name="pincode" placeholder="pincode"></td>

</tr>
<tr>
<td>QUALIFICATION</td>
            <td><select name="qualification">
<option>MSc CS</option>
<option>MCA</option>
<option>Btech</option>
<option>Mtech</option></select></td>
</tr>
<tr>
<td>DEPARTMENT</td>
            <td><select name="department">
                    <option>front-end</option>
<option>back-end</option>
<option>trainee</option></select></td>
</tr>
<tr>
<td>PHONE NO:</td>
<td><input type="text" name="mobile" placeholder="phone number"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email" placeholder="email"></td>
</tr>

<tr>
<td>PASSWORD</td>
<td><input type="password" name="password" placeholder="password"></td>
</tr>
</table>
</br>
<input type="submit" name="submit">
  </fieldset>
</form>
</body>
</html>
