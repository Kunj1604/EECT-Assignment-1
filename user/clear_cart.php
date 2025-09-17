<?php
session_start();

unset($_SESSION["Menu_id"]);
unset($_SESSION["Title"]);
unset($_SESSION["Price"]);
unset($_SESSION["no2"]); 
unset($_SESSION["sum"]);
unset($_SESSION["description"]);

header('location: index.php');



?>