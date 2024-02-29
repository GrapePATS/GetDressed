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
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $shoulder = isset($_POST["shoulder"]) ? htmlspecialchars($_POST["shoulder"]) : '';
    
    // Check if the connection is successful (assuming $conn is defined in config.php)
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO shapedata(shoulder) VALUES('$shoulder')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
<!--
    <div class="container">
        <img src="logo/gd2.png" alt="get dressed logo" class="image">
    </div>
    <div class="container1">
        <h1>Enter your size</h1>
        <img src="body.jpg" alt="body" class="bodyim">-->
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