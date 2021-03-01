<!DOCTYPE html>
<html>
<head>
	<title>afrs</title>
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
        background-image: url('../img/p2.jpg');
        background-size: cover;
      }
      </style>
<body class="bg">
<div class="text-end">
<i class="fab fa-cc-visa text-end fa-5x text-white"></i>
<i class="fab fa-cc-paypal fa-5x"></i>
<i class="fab fa-cc-amazon-pay fa-5x text-white"></i>
</div>
<h1  class="text-center text-dark">Place Your Payment Here</h1>
<?php if (!empty($products)): foreach ($products as $product): ?>
        <div>
            <!--h2><?php echo $product['name']; ?></h2>
            <p>$<?php echo $product['price']; ?> USD</hp-->
        </div>
        <div class=" container text-center ">
        <button class="btn btn-warning"><a href="<?php echo base_url() . 'products/buy/' . $product['id']; ?>" class="text-dark">
            Pay via PayPal
        </a></button>
    </div>

        <div style="border-bottom: 1px solid #ccc;margin: 20px;"></div>

    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>