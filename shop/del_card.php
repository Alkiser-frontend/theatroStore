<?php

include_once 'config.php';

$id = $_GET['id'];
mysqli_query($conf, "delete from add_card where id=$id");

header('location: card.php');

?>



