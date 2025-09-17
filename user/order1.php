<?php 
session_start();

//echo '<pre>';
//print_r($_SESSION);
//Set useful variables for paypal form
// $paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
// $paypal_id = 'alkesh.info@gmail.com'; //Business Email


?>

  <!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
        button{
        height: 200px;
        width: 900px;
        align-items: center;
        color: white;
        background-color: red;
        border-radius: 20px;
        border:solid black 5px;
        font-size: 60px;
      }
    </style>
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
    <div class="site-section">
      <div class="container">
        <div class="container"><div class="container"><div class="container"><div class="container"><div class="container"><div class="container">

    <button id="rzp-button1"><font size="7">Pay with Razorpay</font></button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_Zai5oRcNqHW9e4", // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo $_SESSION["fororder"]; ?>" * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Natural's ice-cream",
    "description": "We fill Tummy so Yummy",
    "image": "images/cup.jpg",
    // "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step
    // "account_id": "acc_Ef7ArAsdU5t0XL",
    "handler": function (response){
        if (typeof response.razorpay_payment_id == 'undefined' ||  response.razorpay_payment_id < 1) {
  redirect_url = 'index.php';
} else {
  redirect_url = 'success.php';
}
location.href = redirect_url;

        // alert(response.razorpay_payment_id);
        // alert(response.razorpay_order_id);
        // alert(response.razorpay_signature)
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}

// <input type='hidden' name='return' value='http://localhost:7882/Dhosa/user/success.php'>
</script>


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
