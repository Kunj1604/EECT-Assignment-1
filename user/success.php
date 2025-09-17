<?php
session_start();

include 'connection.php';

// $Menu_id= $_SESSION["Menu_id"];
// $Title = $_SESSION["Title"];
// $Price= $_SESSION["Price"]; 
// $user_id = $_SESSION["userid"];
// $description = $_SESSION["description"];
// $totalprice=$_SESSION["fororder"];
// $totalqua=$_SESSION["total_quantity"];
// $date = date('Y-m-d');




// $exe = $con->query("insert into orders(Menu_id,Title,Price,user_id,description) values('$Menu_id','$Title','$Price',$user_id','$description')");
//$sql = "insert into orders (Menu_id,Title,Price,user_id,description,order_date,quantity,totalprice) values (?,?,?,?,?,?,?,?)";
//$stmt = $con ->prepare($sql);
//$stmt -> bind_param("ssssssss", $Menu_id, $Title, $Price, $user_id, $description, $date, $totalqua, $totalprice);
//$stmt -> execute();


// $row = $con->query("select * from orders where user_id='$id'");

// $result = $row->fetch_object();

// 	 $_SESSION["orderid"] = $result->order_id; 
unset($_SESSION["Menu_id"]);
unset($_SESSION["Title"]);
unset($_SESSION["Price"]); 
unset($_SESSION["Image"]);
unset($_SESSION["description"]);
unset($_SESSION["fororder"]);
unset($_SESSION["total_quantity"]);

//header( "refresh:5;url=http://localhost/dhosa/user/index.php" );
header( "refresh:5;url=http://localhost/ice-cream/user/index.php" );


?>
<?php



// $id = $_SESSION["userid"];
// $result = $con->query("select * from orders where user_id='$id'");
// $row = $result->fetch_object();

//    $rowcount = $result->num_rows;

//   if($rowcount==1)
//   {
//     $row = $result->fetch_object();

//     $orderid = $row->order_id;

//     $_SESSION["orderid"] = $orderid;

//     header("location:dashboard.php");

  
//   }
//   else
//   {
//     echo "<script>alert('Invalid Email Or Password');</script>";
//   }

?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Natural's ice-cream</title>
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

    <!-- <div class="unit-5 overlay" style="background-image: url('images/bg1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Payment Confirmation</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Success</span></p>
      </div>
    </div> -->

    <div class="unit-5 overlay hero-header" >
      <div class="container text-center">
        <h2 class="mb-0">Payment Confirmation</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Success</span></p>
      </div>
    </div>
    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">


          <div class="col-md-12 col-lg-2 mb-5"></div>   
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            <h2>Your order has been placed Successfully...You can grab your ice-cream by visiting our store!</h2>
            <!-- <h2>Your Payment has been done Successfully...You will be Redirected to home Page in 5 Seconds</h2>  -->

          </div>
          <!-- <a href="print.php" style="color: blue; border-radius: 10px; border: 1px solid black; padding: 7px; background-color: MediumSeaGreen; color: white; text-shadow: 1px 1px black;">Generate invoice</a> -->

          <!-- <div>
            <form action="" method="post">
              <input type="submit" name="" value="generate invoice" >
            </form> 
          </div> -->

        
        </div>
      </div>
    </div>

   


    

    

    
  


    <?php include'common/footer.php';?>
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







