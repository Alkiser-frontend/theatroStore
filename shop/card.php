<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title> عربة التسوق | المسارح المحجوزه </title>
</head>
<body>
    
    <center>
        <h3> المسرح المحجوز </h3>
    </center>
    <?php
   include_once 'config.php';
   $result = mysqli_query($conf, "select * from `add_card`");
   while($row = mysqli_fetch_array($result))
   {
    echo "
    
        <center>
            <main>
                <form>
                <label> teathro name </label>
                <br>
                <input type='text' value=$row[name]>
                <br>
                <label> teathro price </label>
                <br>
                <input type='text' value=$row[Bookig_Price]>
                <br>
                <label> booking date </label>
                <br>
                <input type='text' value=$row[Booking_Date]>
                <br>
                <label> Delete teathero </label>
                <br>
                <a href='del_card.php? id=$row[id]' class='del'> ازالة </a>
                
                </form>
            </main>
        </center>
    ";
   }
   ?>
   <center>
        <a href="shop.php" class="retrn"> الرجوع لصفحة المسارح </a>
   </center>
    
</body>
</html'