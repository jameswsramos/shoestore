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
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h3 class="mb-"><a href="landing.php" class="text-white h3 mb-0">Shoes Store</a></h2>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="landing.php">Beranda</a></li>
                  <li><a href="login.php">Login</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(img/shoe3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            

            <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">SHOES STORE</h1>

          </div>
        </div>
      </div>
    </div>  
<script>
  var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">

    <div class="site-section">
      <div class="container">
		<?php
 $file = "products.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);
?>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<ul id="myUL">
  <li><a href="#">Adele</a></li>
  <li><a href="#">Agnes</a></li>

  <li><a href="#">Billy</a></li>
  <li><a href="#">Bob</a></li>

  <li><a href="#">Calvin</a></li>
  <li><a href="#">Christina</a></li>
  <li><a href="#">Cindy</a></li>
</ul>
<?php
foreach ($data as $d) { ?>
	 <div class="row">
	  <div class="col-sm-4 card">
<?php
   echo '<img src="' . $d['image_url'].'">';
   echo  "Merek: ".$d['brand_name']."<br>";
   echo "Nama Barang : ".$d['name']."<br>";
   echo "Gender : ".$d['gender']."<br>";
   echo "Harga Awal : Rp".$d['price']."<br>";
   echo "Harga Diskon: Rp".$d['promo_price']."<br>";
   echo "Start Promo: ".$d['start_promo']."<br>";
   echo "End Promo: ".$d['end_promo']."<br><br>";
  ?>
   <select class="form-control" name="combo1" id="combo1">
	<option value="">Pilih</option>
	<option value="size 1"><?$d["sizes"][0]["size"]?></option>
	<option value="size 2"><?$d["sizes"][0]["size"]?></option>
	<option value="size 3"><?$d["sizes"][0]["size"]?></option>
	<option value="size 4"><?$d["sizes"][0]["size"]?></option>
</select>
<select class="form-control" name="combo2" id="combo2">
	<option value="">Pilih</option>
	<option value="color 1"><?$d["sizes"][0]["colors"]?></option>
	<option value="color 2"><?$d["sizes"][0]["colors"]?></option>
	<option value="color 3"><?$d["sizes"][0]["colors"]?></option>
	<option value="color 4"><?$d["sizes"][0]["colors"]?></option>
	<option value="color 5"><?$d["sizes"][0]["colors"]?></option>
</select>
<div class="slidecontainer">
  <input type="range" min="100" max="600" value="150" class="slider" id="myRange">
</div>
</div>
</div>
<?php
   }
?>
    <div id="shopping-cart">
        <div class="txt-heading">
            <div class="txt-heading-label">Shopping Cart</div>

            <a id="btnEmpty" href="index.php?action=empty"><img
                src="empty-cart.png" alt="empty-cart" title="Empty Cart"
                class="float-right" /></a>
            <div class="cart-status">
                <div>Total Quantity: <?php echo $item_quantity; ?></div>
                <div>Total Price: <?php echo $item_price; ?></div>
            </div>
        </div>
      </div>
    </div>
 </div>
   

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6">
                <h2 class="footer-heading mb-4">CONTACT US</h2>
                <p> Shoes <br> Jl. X <br> Surabaya <br> 0315939494 </p>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a><br><br>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>