<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wishlish</title>
    <link rel="stylesheet" type="text/css" href="main_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <!--<button class="head">
        <i class="bi bi-arrow-left-circle-fill"></i>
    </button>-->
    
    <header>
        
        <h1>My Wishlish</h1>
        <form id="search-container" class="Search">
            <button id="search-button" onclick="performSearch()">
                <i class="bi bi-search"></i>
            </button>
            <input type="text" id="search-input" placeholder="Search">
        </form>

        <nav>
            <div class="bodytype">
                <button id="all">All</button>
                <button id="shirt">Shirt</button>
                <button id="dress">Dress</button>
                <button id="jacket">Jacket</button>
                <button id="pant">Pant</button>
                <button id="tshirt">T-Shirt</button>
                <button id="skirt">Skirt</button>
            </div>
        </nav>
    </header>

    <section>
        
        <!-- สินค้าชื่นชอบของผู้ใช้ -->

    </section>


    <nav class="menu">
        <div class="main">
            <a href="Home.php">
                <i class="bi bi-house-door"></i>
            </a>
            <a href="Like.html">
                <i class="bi bi-heart-fill"></i>
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
        function addToCart(productName, price) {
            alert(`Added ${productName} to cart. Price: $${price}`);
            // You can implement more sophisticated cart functionality here
        }
    </script>
</body>
</html>
