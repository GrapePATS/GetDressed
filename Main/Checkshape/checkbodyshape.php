<?php 

    session_start();
    require_once 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Dressed</title>
    <link rel="stylesheet" href="checkbodyshape.css">
</head>
<body>
    <div class="container">
        <img src="logo/gd2.png" alt="get dressed logo" class="image">
    </div>
    <div class="container1">
        <h1>Enter your size</h1>
        <img src="body.jpg" alt="body" class="bodyim">
        <form method="post" action="testja.php">
            <div class="input-size">
                <label for="shoulder">Shoulder:</label>
                <input type="number" id="shoulder" name="shoulder">
                <h for="Centimeter">Inch</h>
            </div>
            <div class="input-size">
                <label for="bust">Bust:</label>
                <input type="number" id="bust" name="bust">
                <h for="Centimeter">Inch</h>
            </div>
            <div class="input-size">
                <label for="waist">Waist:</label>
                <input type="number" id="waist" name="waist">
                <h for="Centimeter">Inch</h>
            </div>
            <div class="input-size">
                <label for="hip">Hips:</label>
                <input type="number" id="hips" name="hip"> <!--แก้ตัวแปร hips -> hip ตามตารางใน database -->
                <h for="Centimeter">Inch</h>
            </div>
            <div>
            <button type="submit" id="calculate">CALCULATE</button><!--แก้ type button -->
            <!--<button type="button" id="calculate">CALCULATE</button>-->
            <button type="reset" id="clear">CLEAR</button>
            </div>
            <ad>1 Inch = 2.54 Centimeters</ad>
        </form>
    </div>
</body>
</html>