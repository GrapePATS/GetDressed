<?php 

    session_start();
    require_once 'localdb.php';

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
        <img src="../AppLogo.jpg" alt="get dressed logo" class="image">
    </div>
    <div class="container1">
        <h1>Enter your size</h1>
        <img src="../bodyimg.jpg" alt="body" class="bodyim">
        
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
        <script>
        const form = document.getElementById("myForm");
        const calculateButton = document.getElementById("calculate");

        form.addEventListener("input", function () {
        let isFormValid = true;

        for (let i = 0; i < form.length - 2; i++) {
            if (form[i].value.trim() === "") {
            isFormValid = false;
            break;
            }
        }

        calculateButton.disabled = !isFormValid;
        });
        </script>
        <button type="button" id="calculate" onclick="calculateShape()">CALCULATE</button>
        <button type="reset" id="clear">CLEAR</button>
        </div>
        </form>
        <ad>1 Inch = 2.54 Centimeters</ad>
        <script src="getshape.js"></script>
</body>
    </div>
</body>
</html>