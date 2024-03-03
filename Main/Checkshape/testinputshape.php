<?php 

    session_start();
    require_once 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Recording Form</title>
</head>
<body>

<form action="shapeDB.php" method="post" id="myForm"> <!-- Assuming your PHP script is in process_form.php -->
<div class="input-size">
            <label for="shoulder">Shoulder:</label>
            <input type="text" id="shoulder" name="shoulder">
            <h for="Centimeter">Inch</h>
            </div>
            <div class="input-size">
                <label for="bust">Bust:</label>
                <input type="text" id="bust" name="bust">
                <h for="Centimeter">Inch</h>
            </div>
            <div class="input-size">
                <label for="waist">Waist:</label>
                <input type="text" id="waist" name="waist">
                <h for="Centimeter">Inch</h>
            </div>
            <div class="input-size">
                <label for="hip">Hips:</label>
                <input type="text" id="hip" name="hip">
                <h for="Centimeter">Inch</h>
            </div>
    
        <div>
        <button type="button" id="calculate" onclick="calculateShape()">CALCULATE</button>
        <button type="reset" id="clear">CLEAR</button>
        </div>
        </form>
        <ad>1 Inch = 2.54 Centimeters</ad>
</body>
<script src="getshape.js"></script>

</html>
