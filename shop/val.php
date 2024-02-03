<?php
include_once 'config.php';
$id = $_GET['id'];
$up = mysqli_query($conf,"select * from the_theater where id=$id");
$data = mysqli_fetch_array($up)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/val.css">
    <title> تاكيد عملية الشراء </title>

</head>
<body>
    <center>
        <div class="main">
            <form action="insert_card.php" method="POST">
                <h2> هل تريد تاكيد الحجز؟ </h2>
                <input type="text" name="id"    value='<?php echo $data['id']?>' style="display: none;" >
                <input type="text" name="name"  value='<?php echo $data['name']?>' class="name">
                <input type="text" name="addrs" value='<?php echo $data['Theater_Address']?>'>
                <input type="text" name="TS"    value='<?php echo $data['Theater_Status']?>'>
                <input type="text" name="BP"    value='<?php echo $data['Bookig_Price']?>'>
                <input type="text" name="BD"    value='<?php echo $data['Booking_Date']?>'>
                <button type="submit" name="add" class="add_conf"> تاكيد اضافة المنتج للعربه </button>
                <br>
                <a href="shop.php"> الرجوع لصفحة المسرح </a>
                
                <a href="#"> الرجوع لصفحة جميع المسارح </a>
            </form>
        </div>
        <p>Developer By Team 40</p>
    </center>
    
</body>
</html>