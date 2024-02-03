<?php
include "config.php";
$ID = $_GET ['id'];
mysqli_query($conf, "DELETE FROM admin WHERE id=$ID");

header('location: Admin_view.php');
?>