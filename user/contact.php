<?php
session_start();
include 'connection.php';


if(isset($_POST["submit"]))
{
  $fullname  = $_POST["fullname"];
  $email  = $_POST["email"];
  $contact  = $_POST["contact"];
  $message  = $_POST["message"];
  // $date  = $_POST["date"];
  if (empty($fullname)) {
		$error = "<p style='color:red;font-size:12px;margin:0px;margin-left:0px'>*Please Check your first name </p>";
	}
	if (empty($_POST["email"])) {
		$error2 = "<p style='color:red;font-size:12px;margin:0px;margin-left:0px'>**Please Check your Email </p>";
	  } else {
		//$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $error2 = "<p style='color:red;font-size:12px;margin:0px;margin-left:0px'>Invalid email format</p>";
		}
	  }
	}
	if (empty($contact)) {
		$error5 = "<p style='color:red;font-size:12px;margin:0px;margin-left:0px'> </p>";
    //*Please Check your phone number
	}else{
		if(!preg_match('/^[0-9]{10}+$/', $contact)){
			$error5 = "<p style='color:red;font-size:12px;margin:0px;margin-left:0px'>*Invalid Phone Number</p>";
		}
	}
	if (empty($message)) {
		$error6 = "<p style='color:red;font-size:12px;margin:0px;margin-left:0px'> </p>";
    //*Please Check your address
	} else {
    $exe = $con->query("insert into inquiry (Name,Email,Contact,Message) values('$fullname','$email','$contact','$message')");

    if ($exe) {
      echo "Record Inserted Successfully";
    } else {
      echo "Something Went Wrong.";
    
  }
}

?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us</title>
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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <!-- <script type="text/javascript">
    $(document).ready(function(){

         $("#menu li a").on('click', function(){
    
    $("#menu .active").removeClass('active');
    $(this).parent().addClass('active'); 
    e.preventDefault();
});
    });
 </script>
     -->
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
    
   <?php include'common/header.php';?>

    <div class="unit-5 overlay hero-header">
      <div class="container text-center">
        <h2 class="mb-0">Contact Us</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Contact</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form action="#" name = "myform" onsubmit="return validate()" class="p-5 bg-white rounded Regular shadow" method="Post">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name">
                  <?php echo $error ?>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Email Address">
                  <?php echo $error2 ?>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Contact</label>
                  <input type="text"  name="contact" class="form-control" placeholder="Enter Contact" pattern="[0-9]{10}" title="must be 10 digit" >
                  <span id="numloc"></span> 
                  <?php echo $error5 ?>
                </div>
              </div>
              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 
                  <textarea name="message" id="message" name="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"=""></textarea>
                  <?php echo $error6 ?>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send" name="submit" class="btn btn-primary  py-2 px-4" style="border-radius: 15px;">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white rounded Regular shadow">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">11,12 Gangotri circle, nikol, Ahmedabad-380023.</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+918140550067</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">naturals_icecream04@gmail.com</a></p>

            </div>
            
           
          </div>
        </div>
      </div>
    </div>

   


    

    

    

    

    

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