<?php error_reporting(0);?> 
<header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">

          
          <div>
          <img src = "./images/logo1.png" width="170px" height="90px"/> <br>
          <!-- <h1 class="mb-0"><a class="text-black h2 mb-0"><b>Only</b><i><b>D</b>hosa</i></a></h1> -->
            <!-- <?php if (isset($_SESSION['userid'])) {
              echo "<b>Welcome</b>, ".$_SESSION['Firstnameforsession'];
            } ?> -->
          </div>

          <div class="col-xl-10 d-none d-xl-block">
          <!-- col-10 col-xl-10 -->
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="active"><a href="about.php">About</a></li>
                <li class="active"><a href="menu.php">Menu</a></li>
                 <?php 
                  if(isset($_SESSION["userid"]))
                  {
                    ?>
                    <li class="has-children active">
                  <a>Varieties</a>
                  <ul class="dropdown">
                    <li><a href="family.php">Family pack</a></li>
                    <li><a href="cup.php">Cup ice-cream</a></li>
                    <li><a href="candy.php">Candy</a></li>
                    <li><a href="cone.php">Cone</a></li>
                  </ul>
                </li>
                    <li class="active"><a href="feedback.php">Feedback</a></li>
                    <li class="active"><a href="contact.php">Contact</a></li> 
                    <!--<li class="active"><a href="myorders.php">My Bucket</a></li>-->
                    <li class="active"><a href="logout.php"><span class="rounded bg-danger py-2 px-3 text-white"><span class="h5 mr-2">+</span> Logout</span></a></li>
                    <?php
                  }
                  else
                  {
                    ?>
                    <li><a href="login.php">
                    <span class="rounded bg-danger py-2 px-3 text-white"><span class="h5 mr-2">+</span> Login</span></a></li>
                    <?php
                  }
                ?>
                  
                <?php 
                  if (isset($_SESSION['userid'])) {
                    echo "<b>Welcome</b>, ".$_SESSION['Firstnameforsession'];
                  } 
                ?>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>
      </div>
    </header>
    