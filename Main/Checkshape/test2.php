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

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="input-size">
                <label for="shoulder">Shoulder:</label>
                <input type="number" id="shoulder" name="shoulder">
                <h for="Centimeter">Inch</h>
            <!--</div>
            <button type="button" id="calculate">CALCULATE</button>
            <button type="reset" id="clear">CLEAR</button>
            </div>-->
        </form>
    </div>
</body>
</html>