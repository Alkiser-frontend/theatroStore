<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/All_theater.css">
    <title> Masrhna | جميع المسارح المتاحه </title>

</head>
<body>
    <center>
        <h1>  جميع المسارح المتاحه </h1>
    </center>
    
    <?php
        include "config.php";
        $result = mysqli_query($conf, "SELECT * FROM the_theater");
        while($row = mysqli_fetch_array($result))
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
                            <label >Theater_Status</label>
                            <p class='card-text'>   $row[Theater_Status]</p>
                            <br>
                            <a href='theater_view.php? id=$row[id]' class='btn btn-danger'> عرض بيانات المسرح </a>
                        </div>
                    </div>
                </main>

            </center>
            ";
            
        };
    
    ?>
    
    
</body>