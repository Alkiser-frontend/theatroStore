<?php
include_once 'config.php';

    if(isset($_POST ['update_admin'])){
        
        $id    = $_POST ['id'];
        $fname = $_POST ['f_name'];
        $lname = $_POST ['l_name'];
        $email = $_POST ['email'];
        $phone = $_POST ['phone'];
    }
   
    $update = "UPDATE admin SET f_name='$fname' , l_name='$lname' , email='$email' , phone='$phone' WHERE id = $id ";

    mysqli_query($conf, $update);
   

    header('location: Admin_view.php');

?>