<?php
include_once 'config.php';

    if(isset($_POST ['Add_Admin'])){
        
        $id    = $_POST ['id'];
        $fname = $_POST ['f_name'];
        $lname = $_POST ['l_name'];
        $email = $_POST ['email'];
        $phone = $_POST ['phone'];
    }
   
    $insert = "insert into `admin` (id , f_name , l_name , email , phone) VALUES ('$id' , '$fname' , '$lname' , '$email' , '$phone' )";

    mysqli_query($conf, $insert);
   

    header('location: index.php');

?>