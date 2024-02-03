
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Masrhna | تعديل مسؤول </title>
</head>
<body>
<?php
include "config.php";
$id   = $_GET['id'];
$up   = mysqli_query($conf, "SELECT * FROM admin WHERE id=$id ");
$data = mysqli_fetch_array($up);
?>
    

   <center>
    <div class="main">
        <form action="Up.php" method="POST">
            <h1>تعديل بيانات مسؤول</h1>
            <div class="data">
                <div class="box">
                    <input type="text" name="id" value="<?php echo $data['id']?>">
                    <br>
                    <input type="text" name="f_name" value="<?php echo $data['f_name']?>">
                    <input type="text" name="l_name" value="<?php echo $data['l_name']?>">
                    <br>
                    <input type="text" name="email" value="<?php echo $data['email']?>">
                    <input type="tel" name="phone" value="<?php echo $data ['phone']?>">
                </div>
            </div>
            <div class="button">
                <button name="update_admin" type="submit"> تعديل بيانات المسؤول </button>
                <br>
                <br>
                <a href="Admin_view.php"> عرض جميع المسؤولين </a>
            </div>

        </form>
    </div>
    <p>Developer By Team 40</p>
   </center>

</body>
</html>
