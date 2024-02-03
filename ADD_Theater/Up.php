<?php
include_once 'config.php';

    if(isset($_POST ['update_theater'])){
        
        $id        = $_POST ['id'];
        $name      = $_POST ['name'];
        $addrs     = $_POST ['addrs'];
        $num_seats = $_POST ['num_seats'];
        $TS        = $_POST ['TS'];
        $L         = $_POST ['L'];
        $WS        = $_POST ['WS'];
        $WLS       = $_POST ['WLS'];
        $Ss        = $_POST ['Ss'];
        $SM        = $_POST ['SM'];
    }
   
    $update = "UPDATE the_theater SET name='$name' , Theater_Address='$addrs' , Num_Of_Seats='$num_seats' 
    , Theater_Status='$TS' , Lighting='$L' , Wired_Speaker='$WS' , Wireless_Speaker='$WLS' 
    , Sound_System='$Ss' , Smoke_Machine='$SM' WHERE id=$id ";

    mysqli_query($conf, $update);
   

    header('location: theater_view.php');

?>