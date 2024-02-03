<?php
include "config.php";
$ID = $_GET ['id'];
mysqli_query ($conf, "DELETE FROM `the_theater` WHERE id = $ID");

header('location: theater_view.php');
?>