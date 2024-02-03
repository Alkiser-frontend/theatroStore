<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/Admin_view.css">
    <title> Masrhna | جميع المسؤلين </title>

</head>
<body>
    <center>
        <h1> جميع المسؤلين </h1>
    </center>
    <?php
    include "config.php";
    $result = mysqli_query($conf, "SELECT * FROM admin");
    while($row = mysqli_fetch_array($result))
    {
        echo "
        <center>
            <main class='main'>
                <div class='card' style='width: 21rem;'>
                    <!-- <img src='...' class='card-img-top' alt='...'> -->
                    <div class='card-body'>
                        <h4 class='card-title'> $row[f_name] $row[l_name]</h4>
                        <p class='card-text'>   $row[email]</p>
                        <p class='card-text'>   $row[phone]</p>
                        <a href='delete.php? id=$row[id]' class='btn btn-danger'>حذف المسؤول</a>
                        <a href='Update.php? id=$row[id]' class='btn btn-primary'> تعديل بيانات المسؤول </a>
                        
                    </div>
                </div>
            </main>

        </center>
        ";
    }

    ?>
    
    
</body>