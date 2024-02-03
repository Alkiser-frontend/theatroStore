<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/theater_view.css">
    <title> Masrhna | عرض بيانات المسرح </title>

</head>
<body>
    <center>
        <h1> عرض بينات المسرح </h1>
        
    </center>
    
    <?php
    include "config.php";
    $result = mysqli_query($conf, "SELECT * FROM the_theater");
    if($row = mysqli_fetch_array($result))
    {
        echo "
        <center>
            <main class='main'>
                <div class='card' style='width: 21rem;'>
                    <!-- <img src='...' class='card-img-top' alt='...'> -->
                    <div class='card-body'>
                        <label >theater_name</label>
                        <h4 class='card-text'>  $row[name] </h4>
                        <br>
                        <label >theater_Address</label>
                        <p class='card-text'>   $row[Theater_Address]</p>
                        <br>
                        <label >num_of_seats</label>
                        <p class='card-text'>   $row[Num_Of_Seats]</p>
                        <br>
                        <label >Theater_Status</label>
                        <p class='card-text'>   $row[Theater_Status]</p>
                        <br>
                        <label>Lighting</label>
                        <p class='card-text'>   $row[Lighting]</p>
                        <br>
                        <label>Wired_Speaker</label>
                        <p class='card-text'>   $row[Wired_Speaker]</p>
                        <br>
                        <label>Wireless_Speaker</label>
                        <p class='card-text'>   $row[Wireless_Speaker]</p>
                        <br>
                        <label>Sound_System</label>
                        <p class='card-text'>   $row[Sound_System]</p>
                        <br>
                        <label>Smoke_Machine</label>
                        <p class='card-text'>   $row[Smoke_Machine]</p>
                        <br>
                        <a href='delete.php? id=$row[id]' class='btn btn-danger'> حذف المسرح </a>
                        <a href='Update.php? id=$row[id]' class='btn btn-primary'> تعديل بيانات المسارح </a>
                        
                    </div>
                </div>
            </main>

        </center>
        ";
    }
    else
    {
        echo " 
        <center>
            <h1>
                *عذرا لا يوجد مسارح متاحه الان* 
            </h1> 
        </center>
        ";
    }
      
        
    

    ?>
    
    
</body>