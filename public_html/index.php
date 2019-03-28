<!DOCTYPE html>
<html>
<head>
    <title>Arduino Sensor Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
<!--    <meta http-equiv="refresh" content="30">-->
</head>
<body>

<div class="header">
    <h1>Martin Karlsson</h1>
</div>

<div class="topnav">
    <a href="https://driftier-operations.000webhostapp.com">Home</a>
<!--    <a href="#">Link</a>-->
<!--    <a href="#">Link</a>-->
    <a href="#" style="float:right">Link</a>
    <div class="dropdown">
        <button class="dropbtn">Sensors
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="temphumid.php">Martin</a>
            <a href="temphumid2.php">Timmie</a>
            <a href="#">Sens 3</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="leftcolumn">
        <div class="card">
            <?php
            include($content);
            if (empty($content))
            {
                include("startContent.php");
            }
            ?>
        </div>
    </div>

    <div class="rightcolumn">
        <div class="card">
            <h2>About Me</h2>
            <p>Hi my name is Martin<br>
                I study system developing IOT at STI</p>
        </div>
        <div class="card">
            <h3>Popular Post</h3>
            <div class="fakeimg"><p>Image</p></div>
            <div class="fakeimg"><p>Image</p></div>
            <div class="fakeimg"><p>Image</p></div>
        </div>
        <div class="card">
            <h3>Follow Me</h3>
            <a href="https://github.com/ch4uwa">Github</a>
            <br>
            <a href="https://www.linkedin.com/in/martin-karlsson-7012a5113/">LinkedIn</a>
            <br>
            <a href="https://www.sti.se/">STI</a>
            <br>
        </div>
    </div>
</div>

<div class="footer">
    <h2>Martin Karlsson<br></h2>
</div>


</body>

</html>