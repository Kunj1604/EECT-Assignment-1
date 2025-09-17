<?php
error_reporting(0);
session_start();


include 'connection.php';
if(!isset($_SESSION["userid"]))
{
  header('location:index.php');
}

 
$sum="";
if(isset($_POST['submit']))
{
  $no1=$_POST['no1'];
  $no2=$_POST['no2'];
  $sum=$no1*$no2;
  
$_SESSION["fororder"] = $sum;
    $_SESSION["totalqua"] = $no2;
 
    }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Your Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <form method="post">
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
   <?php include'common/header.php';?>

   

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-12 mb-5">
              <h1 style="color: black" align="center">Shopping Cart</h1>
           <table class="table table-bordered" style="margin-top: 30px;">
             <tr style="background-color: tomato; color: white">
               <th>Menu Id</th>
               <th>Image</th>
               <th>Price</th>
               <th>Title</th>
               <th>Quantity</th>
             </tr>
             <tr>
               <th><?php echo $_SESSION["Menu_id"]?></th>
               <th><img src="../admin/upload/<?php echo $_SESSION["Image"]?>" height="80" width="80"></th>
                
                 <th><?php echo $_SESSION["Price"]." Rs"?><input type="hidden" name="no1" value="<?php echo $_SESSION["Price"]?>"></th>
                  <th><?php echo $_SESSION["Title"]?> Title</th>
                  <th><input type="number" name="no2" value="1"></th>
             </tr>
             <tr>
              <?php
              $no1=$_SESSION["Price"];
              ?>
              <td>Total Amount: <?php echo $sum;?></td>

               <td colspan="3"><a href="clear_cart.php" style="color: blue; border-radius: 10px; border: 1px solid black; padding: 7px; background-color: tomato; text-shadow: 1px 1px black; color: white">Clear Cart</a>
             <input type="submit" name="submit" value="Total" style="color: blue; border-radius: 10px; border: 1px solid black; padding: 7px; background-color: MediumSeaGreen; color: white; text-shadow: 1px 1px black;">
             <td>
              <a href="order1.php" style="color: blue; border-radius: 10px; border: 1px solid black; padding: 7px; background-color: MediumSeaGreen; color: white; text-shadow: 1px 1px black;">Place Order</a>
              
             </tr>
           </table>
          </div> 
          </div>
        </div>
      </div>
    </div>   
</form>
    

    <?php include 'common/footer.php'?>
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