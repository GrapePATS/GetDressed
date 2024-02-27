<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Dress</title>
    <link rel="stylesheet" type="text/css" href="main_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>

    <header>
        <a href="Me.php" class="me">
            <i class="bi bi-list"></i>
        </a>
        <h1>Get Dressed</h1>
        <form id="search-container" class="Search">
            <button id="search-button" onclick="performSearch()">
                <i class="bi bi-search"></i>
            </button>
            <input type="text" id="search-input" placeholder="Search">
        </form>

        <nav>
            <div class="bodytype">
                <a id="dresses">All</a>
                <a id="apple">Apple</a>
                <a id="hourglass">Hourglass</a>
                <a id="IT">Inverted triangle</a>
                <a id="pear">Pear</a>
                <a id="rectangle">Rectangle</a>
            </div>
        </nav>
    </header>

    <section>
        <?php
    // Connect to server and select database.
        include("config.php");

        $sql = "SELECT * FROM dresses";
        $result = $objCon->query($sql);
        
        
        ?>

        <?php while($row = $result->fetch_assoc()): 
          //  $row = $result->fetch_assoc();
           // print_r($row);
            ?>
        <?php $imageURL = 'Dress/'.$row['Pic_Dress']; ?>

        <div class="product">
            <!--เพิ่มตรงนี้จากของเฟรชเพื่อเชื่อมไปหน้า product -->
            <a href="product.php?id=<?php echo $row['ID']?>">
            <!-- _____________________________________-->
            <img src="<?php echo $imageURL; ?>" alt="Product" width="100%" class= "PicDress">
            <p><?php echo $row['Name_Dress']; ?></p>
            <p class = "Shop"><?php echo $row['Shop']; ?></p>
            <a><i class="bi bi-heart"></i></a>
            </a>
        </div>
        <?php endwhile ?>

        <!-- Add more products as needed -->
    </section>
    
    <nav class="menu">
        <div class="main">
            <a href="Home.php">
                <i class="bi bi-house-door-fill"></i>
            </a>
            <a href="Like.php">
                <i class="bi bi-heart"></i>
            </a>
            <a>
                <i class="bi bi-chat-dots"></i>
            </a>
            <a>
                <i class="bi bi-bell"></i>
            </a>
            <a>
                <i class="bi bi-person"></i>
            </a>
        </div>
    </nav>

    <script>
        
    </script>
</body>
</html>
