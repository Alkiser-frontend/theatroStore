
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Masrhna | اضافة مسرح </title>
</head>
<body>

    

   <center>
    <div class="main">
        <form action="insert_theater.php" method="POST" enctype="multipart/form-data">
            <h1>اضافة مسرح</h1>
            <div class="data">
                <div class="box">

                    <input type="text" placeholder="Theaer Name" name="name">
                    <input type="text" placeholder="Theaer Address" name="addrs">
                    <br>
                    <input type="number" placeholder="Num Of seats" name="num_seats">
                    <br>
                    <select name="ad_ID" id="">
                        <option value="" name="ad_ID">admin_ID</option>
                        <option value="1" name="ad_ID">1</option>
                        <option value="2" name="ad_ID">2</option>
                        <option value="3" name="ad_ID">3</option>
                        <option value="4" name="ad_ID">4</option>
                        <option value="5" name="ad_ID">5</option>
                        <option value="6" name="ad_ID">6</option>
                        <option value="7" name="ad_ID">7</option>
                    </select>

                    
                </div>
                <div class="checkbox">
                    <h3>Theater Status</h3>
                    <label> Prepared </label>
                    <input type="radio" name="TS" value=" متاح " required>
                    <label> Not Prepared </label>
                    <input type="radio" name="TS" value=" غير متاح "required>
                    <br>
                    <h3>Lighting</h3>
                    <label> Prepared </label>
                    <input type="radio" name="L" value=" مجهز " required>
                    <label> Not Prepared </label>
                    <input type="radio" name="L" value=" غير مجهز " required>
                    <br>
                    <h3>Wired Speaker</h3>
                    <label> Prepared </label>
                    <input type="radio" name="WS" value=" مجهز " required>
                    <label> Not Prepared </label>
                    <input type="radio" name="WS" value=" غير مجهز " required>
                    <br>
                    <h3>Wireless Speaker</h3>
                    <label> Prepared </label>
                    <input type="radio" name="WLS" value=" مجهز " required>
                    <label> Not Prepared </label>
                    <input type="radio" name="WLS" value=" غير مجهز " required>
                    <br>
                    <h3>Sound System</h3>
                    <label> Prepared </label>
                    <input type="radio" name="Ss" value=" مجهز " required>
                    <label> Not Prepared </label>
                    <input type="radio" name="Ss" value=" غير مجهز " required>
                    <br>
                    <h3>Smoke Machine</h3>
                    <label> Prepared </label>
                    <input type="radio" name="SM" value=" مجهز " required>
                    <label> Not Prepared </label>
                    <input type="radio" name="SM" value=" غير مجهز " required>
                    <br>
                </div>  
            </div>
            <div class="button">
                <label for="img" class="img"> اختيار الصوره </label>
                <input type="file" name="iamge" id="img" style="display: none;">
                <button name="ADD_Theater"> اضافة مسرح </button>
            </div>
            <a href="All_theaters.php"> عرض جميع المسارح </a>
        </form>
    </div>
    <p>Developer By Team 40</p>
   </center>

   
   <!-- <script src="mine.js"></script> -->

</body>
</html>
