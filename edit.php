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
	$edit_id = $_GET['edit_id'];
	//get json data
	$data = file_get_contents('users.json');
	$data_array = json_decode($data, true);
	$row = $data_array[$edit_id];	
?>
<?php
if(isset($_POST['btnUpdate']))
{	
	
	$update_arr = array(
			'id' => $_POST['id'],
			'brand_id_post' => $_POST['brand_id'],
			'name_post' => $_POST['name'],
			'sku_post' => $_POST['sku'],
			'gender_post' => $_POST['gender'],
			'display_post' => $_POST['is_displayed'],
			'description_post' => $_POST['description'],
			'mupper_post' => $_POST['material_upper'],
			'mouter_post' => $_POST['material_outer_sole'],
			'care_post' => $_POST['care_label'],
			'ukuran_post' => $_POST['measurements'],
			'price_post' => $_POST['price'],
			'pdisc_post' => $_POST['promo_price'],
			'stock_post' => $_POST['total_stock'],
			'StartPromo_post' => $_POST['start_promo'],
			'EndPromo_post' => $_POST['end_promo'],
		);
 
		$data_array[$edit_id] = $update_arr;
 
		$data = json_encode($data_array, JSON_PRETTY_PRINT);
		file_put_contents('users.json', $data);
 
		header('location: index.php');
}
?>
 
<form method="post" name="frmUpdate">
    <table align="center">
       <table align="center">
        <tr>
            <td colspan="2" align="center">Tambah Record</td>
        </tr>
 
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="<?php echo $row['id'];?>"> </td>
        </tr>
        <tr>
            <td>Brand ID</td>
            <td><input type="text" name="brand_id_post" value="<?php echo $row['brand_id'];?>"> </td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td><textarea name="name_post" rows="4" cols="16"><?php echo $row['name'];?></textarea> </td>
        </tr>
        <tr>
            <td>SKU</td>
            <td><input type="text" name="sku_post" value="<?php echo $row['sku'];?>"> </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><input type="text" name="gender_post" value="<?php echo $row['gender'];?>"> </td>
        </tr>
		 <td>Display</td>
            <td><input type="text" name="display_post" value="<?php echo $row['is_displayed'];?>"> </td>
        </tr>
		<td>Deskripsi</td>
            <td><input type="text" name="description_post" value="<?php echo $row['description'];?>"> </td>
        </tr>
		<td>Material Atas</td>
            <td><input type="text" name="mupper_post" value="<?php echo $row['material_upper'];?>"> </td>
        </tr>
		<td>Sol</td>
            <td><input type="text" name="mouter_post" value="<?php echo $row['material_outer_sole'];?>"> </td>
        </tr>
		<td>Care Label</td>
            <td><input type="text" name="care_post" value="<?php echo $row['care_label'];?>"> </td>
        </tr>
		<td>Ukuran</td>
            <td><input type="text" name="display_post" value="<?php echo $row['measurements'];?>"> </td>
        </tr>
		<td>Harga Awal</td>
            <td><input type="text" name="price_post" value="<?php echo $row['price'];?>"> </td>
        </tr>
		<td>Harga Promo</td>
            <td><input type="text" name="pdisc_post" value="<?php echo $row['promo_price'];?>"> </td>
        </tr>
		<td>Start Promo</td>
            <td><input type="text" name="StartPromo_post" value="<?php echo $row['start_promo'];?>"> </td>
        </tr>
		<td>End Promo</td>
            <td><input type="text" name="EndPromo_post" value="<?php echo $row['end_promo'];?>"> </td>
        </tr>
		<td>Stock</td>
            <td><input type="text" name="stock_post" value="<?php echo $row['total_stock'];?>"> </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Add" name="btnAdd"> </td>
        </tr>
    </table>
</form></hr><hr></hr>
</div>
</body>
</html>