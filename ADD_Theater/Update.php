
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/theater.css">
    <title> Masrhna | تعديل مسرح </title>
</head>
<body>
<?php
include "config.php";
$id   = $_GET['id'];
$up   = mysqli_query ($conf, "SELECT * FROM the_theater WHERE id=$id ");
$data = mysqli_fetch_array($up);
?>
   <center>
    <div class="main">
        <form action="Up.php" method="POST">
            <h1>تعديل بيانات مسرح</h1>

            <div class="data">
                <div class="box">
                    <input type="text" class="id" name="id" value="<?php echo $data ['id']?>">
                    <br>
                    <input type="text" name="name" value="<?php echo $data ['name']?>">
                    <input type="text" name="addrs" value="<?php echo $data ['Theater_Address']?>">
                    <br>
                    <input type="number" name="num_seats" value="<?php echo $data ['Num_Of_Seats']?>">
                    <br>
                    <select name="ad_ID" id="">
                        <option name="ad_ID"> <?php echo $data ['ad_ID']?></option>
                    </select>

                    
                </div>
                <div class="checkbox">
                    <h3>Theater Status</h3>
                    <input type="text" name="TS" value="<?php echo $data ['Theater_Status']?>" required>
                    <br>
                    <h3>Lighting</h3>
                    <input type="text" name="L" value="<?php echo $data ['Lighting']?>" required>
                    <br>
                    <h3>Wired Speaker</h3>
                    <input type="text" name="WS" value="<?php echo $data ['Wired_Speaker']?>" required>
                    <br>
                    <h3>Wireless Speaker</h3>
                    <input type="text" name="WLS" value="<?php echo $data ['Wireless_Speaker']?>" required>
                    <br>
                    <h3>Sound System</h3>
                    <input type="text" name="Ss" value="<?php echo $data ['Sound_System']?>" required>
                    <br>
                    <h3>Smoke Machine</h3>
                    <input type="text" name="SM" value="<?php echo $data ['Smoke_Machine']?>" required>
                    <br>
                </div>  
            </div>
            <div class="button">
                <button name="update_theater" type="submit"> تعديل بيانات المسرح </button>
                <br>
                <br>
                <a href="theater_view.php"> عرض جميع المسارح </a>
            </div>

        </form>
    </div>
    <p>Developer By Team 40</p>
   </center>

</body>
</html>
