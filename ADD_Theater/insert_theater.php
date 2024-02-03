<?php
include ('config.php');

if(isset($_POST ['ADD_Theater']))
    $ad_id            = $_POST  ['ad_ID'];
    $T_name           = $_POST  ['name'];
    $addrs            = $_POST  ['addrs'];
    $num_seats        = $_POST  ['num_seats'];
    $Theater_Status   = $_POST  ['TS'];
    $Lighting         = $_POST  ['L'];
    $Wired_Speaker    = $_POST  ['WS'];
    $Wireless_Speaker = $_POST  ['WLS'];
    $Sound_System     = $_POST  ['Ss'];
    $Smoke_Machine    = $_POST  ['SM'];
    $image            = $_FILES ['iamge'];
    $image_location   = $_FILES ['iamge']['tmp_name'];
    $image_name       = $_FILES ['iamge']['name'];
    $image_up         = "I.F.T/" . $image_name;

    $insert = "INSERT INTO `the_theater` (ad_ID , name , theater_Address , num_of_seats , Theater_Status , Lighting 
    , Wired_Speaker , Wireless_Speaker , Sound_System , Smoke_Machine , image)
    VALUES ('$ad_id' , '$T_name' , '$addrs' , '$num_seats' , '$Theater_Status' , '$Lighting'
    , '$Wired_Speaker' , '$Wireless_Speaker' , '$Sound_System' , '$Smoke_Machine' , '$image_up')";


    mysqli_query($conf, $insert);

    if(move_uploaded_file($image_location, 'I.F.T/' . $image_name))
    {
        echo "<script> alert(' تم رفع المسرح بنجاح ') </script>";
    };

header('location: index.php');
?>