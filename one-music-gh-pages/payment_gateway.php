<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="../css/payment_gateway.css">
	<title>Payment method</title>
</head>
<body>
  
  <div class="" style="display:none">
    <?php
      include 'esewa_configration.php'; 
    ?>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-6 form ">
              <h4>Please Choose Payment Method !!!</h4>
              <div class="row">
                  <div class="col-6">
                  <?php
                  if(isset($_POST['submit'])){
                     $name = $_POST['name'];
                     $price = $_POST['price'];
                  }
                  
                  ?>
                      <form action='<?php echo $epay_url?>' method="POST" class="p-0">
                          <input  value="<?php $price ?>" name="tAmt" type="hidden">
                          <input  value="<?php $name ?>" name="name" type="hidden">
                          <input value="0" name="amt" type="hidden">
                          <input value="0" name="txAmt" type="hidden">
                          <input value="0" name="psc" type="hidden">
                          <input value="0" name="pdc" type="hidden">
                          <input value="0"  name="scd" type="hidden">
                          <input value="0" name="pid" type="hidden">
                          <input value="0" type="hidden" name="su">
                          <input value="0" type="hidden" name="fu">
                          <input type="submit" id="esewa" class="m-0" name="submit"  value="e-Sewa">
                      </form>
                  </div>
              </div>
               <br>
              <a class="login-a mt-4"  href="pri">Cancel payment!!</a>
              
          </div>
      </div>
  </div>
</body>
</html>
