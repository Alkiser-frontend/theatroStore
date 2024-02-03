<?php

include_once 'config.php';

if(isset($_POST['add']))
{
    $name  = $_POST['name'];
    $BP    = $_POST['BP'];
    $BD  = $_POST['BD'];

    $insert = "insert into `add_card` (name , Bookig_Price , Booking_Date) values ('$name', '$BP', '$BD')";

    mysqli_query($conf, $insert);

    header('location: card.php');
}

?>