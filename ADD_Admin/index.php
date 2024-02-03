
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Masrhna | اضافة مسؤول </title>
</head>
<body>

    

   <center>
    <div class="main">
        <form action="insert Admin.php" method="POST">
            <h1>اضافة مسؤول</h1>
            <div class="data">
                <div class="box">
                    <input type="text" placeholder="id" name="id">
                    <input type="text" placeholder="Frist_name" name="f_name">
                    <input type="text" placeholder="Last_name" name="l_name">
                    <br>
                    <input type="text" placeholder="Email" name="email">
                    <input type="tel" placeholder="Phone" name="phone">
                    
                </div>
                <!-- <div class="checkbox">
                    <h3>Lighting</h3>
                    <label for="">Prepared</label>
                    <input type="radio" value="Prepared" name="lighting">
                    <label for="">Not Prepared</label>
                    <input type="radio" value="Not Prepared" name="lighting">
                    <br>
                    <h3>Theaer Status</h3>
                    <label for="Prepared">Prepared</label>
                    <input type="radio" id="Prepared" value="Prepared" name="Theaer Status">
                    <label for="Not Prepared">Not Prepared</label>
                    <input type="radio" id="Not Prepared" value="Not Prepared" name="Theaer Status">
                    <br>
                    <h3>Wired Speaker</h3>
                    <label for="Prepared">Prepared</label>
                    <input type="radio" id="Prepared" value="Prepared" name="Wired Speaker">
                    <label for="Not Prepared">Not Prepared</label>
                    <input type="radio" id="Not Prepared" value="Not Prepared" name="Wired Speaker">
                    <br>
                    <h3>Sound System</h3>
                    <label for="Prepared">Prepared</label>
                    <input type="radio" id="Prepared" value="Prepared" name="Sound System">
                    <label for="Not Prepared">Not Prepared</label>
                    <input type="radio" id="Not Prepared" value="Not Prepared" name="Sound System">
                    <br>
                    <h3>Smoke Machine</h3>
                    <label for="Prepared">Prepared</label>
                    <input type="radio" id="Prepared" value="Prepared" name="Smoke Machine">
                    <label for="Not Prepared">Not Prepared</label>
                    <input type="radio" id="Not Prepared" value="Not Prepared" name="Smoke Machine">
                    <br>
                    <h3>Wireless Speaker</h3>
                    <label for="Prepared">Prepared</label>
                    <input type="radio" id="Prepared" value="Prepared" name="Wireless Speaker">
                    <label for="Not Prepared">Not Prepared</label>
                    <input type="radio" id="Not Prepared" value="Not Prepared" name="Wireless Speaker">
                </div>   -->
            </div>
            <div class="button">
                <!-- <label for="img" class="img"> اختيار الصوره </label>
                <input type="file" name="iamge" id="img" style="display: none;"> -->
                <button name="Add_Admin"> اضافة مسؤول </button>
            </div>
            <a href="Admin_view.php"> عرض جميع المسؤولين </a>
        </form>
    </div>
    <p>Developer By Team 40</p>
   </center>

   
   <!-- <script src="mine.js"></script> -->

</body>
</html>
