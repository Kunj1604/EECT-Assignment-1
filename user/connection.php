<?php

$con = new mysqli("localhost","root", "", "icecream");
$errno =$con->connect_errno;
if($errno!=0)
{
	echo $con->connect_error;
	exit;
}
?>