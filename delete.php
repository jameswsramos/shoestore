<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoes Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
   <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-1" role="banner">
	<div class="container">
        <div class="row align-items-center">
            <h1><a href="index.php">Shoes Store</a></h1><br><br>
          </div>

        </div>
      </div>
      
    </header>
<body>
<br><br>
<hr>
<div class="container">
<?php
	$delete_id = $_GET['delete_id'];
 
	$data = file_get_contents('products.json');
	$data = json_decode($data, true);
 
	unset($data[$delete_id]);
 
	//encode back to json
	$data = json_encode($data, JSON_PRETTY_PRINT);
	file_put_contents('products.json', $data);
 
	header('location: index.php');	
?>
</hr><hr></hr>
</div>
</body>
</html>