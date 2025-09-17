<?php
error_reporting(0);
session_start();
include 'connection.php';

//add views
$con->query("insert into views(view)values('1')");


// $companies = $con->query("select * from company");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Natural's &mdash; ice-cream</title>
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
    
    <!-- header -->
     <?php include'Common/header.php';?>
    <!-- header -->

    <div class="site-blocks-cover hero-header" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container ">
        <div class="row row-custom align-items-center">
          <div class="col-md-6" >
            <h1 class="mb-2 text-black w-75"><span class="font-weight-bold" style="color: white; !important">Made from Our Own Organic Milk</span></h1>
          </div>
          <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="images\home.png" style="max-width:800px;height:500px;margin-left:-135px" alt="">
                        </div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2 class="text-black">Here is our hot picks</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a class="mb-3 d-block img-a"><img src="images/cup.jpg" alt="Image" class="img-fluid rounded"></a>
            <span class="d-block text-gray-500 text-normal small mb-3">&bullet; By <a href="#">Natural's ice-cream</a> <span class="mx-2"></span></span>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a class="text-black">chocolate cup ice-cream</a></h2>
            <p>Delicious and yummy ice-cream.</p>
            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a class="mb-3 d-block img-a"><img src="images/mixcone.jpg" alt="Image" class="img-fluid rounded"></a>
            <span class="d-block text-gray-500 text-normal small mb-3">&bullet; By <a href="#">Natural's ice-cream</a> <span class="mx-2"></span></span>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a class="text-black">Mix fruit cone</a></h2>
            <p>In-cone-ceviable.</p>
            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a class="mb-3 d-block img-a"><img src="images/chocobar.jpg" alt="Image" class="img-fluid rounded"></a>
            <span class="d-block text-gray-500 text-normal small mb-3">&bullet; By <a href="#">Natural's ice-cream</a> <span class="mx-2"></span></span>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a class="text-black">Chocobar</a></h2>
            <p>Simply dilicious.</p>
            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a class="mb-3 d-block img-a"><img src="images/familypack.jpg" alt="Image" class="img-fluid rounded"></a>
            <span class="d-block text-gray-500 text-normal small mb-3">&bullet; By <a href="#">Natural's ice-cream</a> <span class="mx-2"></span></span>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a class="text-black">Sundae </a></h2>
            <p>That is special iteam.</p>
            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a class="mb-3 d-block img-a"><img src="images/pistacup.jpg" alt="Image" class="img-fluid rounded"></a>
            <span class="d-block text-gray-500 text-normal small mb-3">&bullet; By <a href="#">Natural's ice-cream</a> <span class="mx-2"></span></span>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a class="text-black">Pista cup ice-cream</a></h2>
            <p>Will scream for ice-cream.</p>
            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a class="mb-3 d-block img-a"><img src="images/kesarpista.jpg" alt="Image" class="img-fluid rounded"></a>
            <span class="d-block text-gray-500 text-normal small mb-3">&bullet; By <a href="#">Natural's ice-cream</a> <span class="mx-2"></span></span>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a class="text-black">Kesar pista kulfi</a></h2>
            <p>keep calm and eat kulfi.</p>
            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a class="mb-3 d-block img-a"><img src="images/mangocup.jpg" alt="Image" class="img-fluid rounded"></a>
            <span class="d-block text-gray-500 text-normal small mb-3">&bullet; By <a href="#">Natural's ice-cream</a> <span class="mx-2"></span></span>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a class="text-black">Mango cup ice-cream</a></h2>
            <p>This is the flavor of summer.</p>
            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-3" data-aos="fade">
            <div class="position-relative unit-8">
            <a class="mb-3 d-block img-a"><img src="images/chocolatecone.jpg" alt="Image" class="img-fluid rounded"></a>
            <span class="d-block text-gray-500 text-normal small mb-3">&bullet; By <a href="#">Natural's ice-cream</a> <span class="mx-2"></span></span>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><a class="text-black">Chocolate cone </a></h2>
            <p>In-cone-ceviable.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <!-- footer -->
    <?php include 'Common/footer.php';?>
    <!-- footer -->

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
  
  <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  <script src="js/main.js"></script>
  <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main1.js"></script>
  </body>
</html>