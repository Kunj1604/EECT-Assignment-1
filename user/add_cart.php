<?php
session_start();

include 'connection.php';

$id =$_GET["Menu_id"];
$userid = $_SESSION["userid"];

$result = $con->query("select * from add_menu where Menu_id='$id'");
$row = $result->fetch_object();

$_SESSION["Menu_id"] = $id;
$_SESSION["Title"] = $row->Title;
$_SESSION["Category"] = $row->Category;
$_SESSION["Price"] = $row->Price;
$_SESSION["description"] = $row->Description;


$_SESSION["Image"] = $row->Image;
header('location: cart.php');



?>