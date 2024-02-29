<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Page</title>
  <link rel="stylesheet" href="product_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
  
</head>

<body>
  
  <header>
    <nav class = "Topbar">
      <div>
        <a href = "/GetDressed/Main/Home.php">
          <i class="fa-solid fa-arrow-left-long"></i>
        </a>
      </div>
      <a class = "navbar-brand">
        <img src = "AppLogo.jpg" alt = "site icon" id="Logo">
      </a>
    </nav>
  </header>

  <main>
    <section id="productdetail">
    <?php
    // เชื่อมกับดาต้าเบส(Table dresses)
        include("config.php");
        $ID = $_GET['id'];
        
        if(isset($_GET['id_Type'])) {
          $Body = $_GET['id_Type'];
          $sql = "SELECT * FROM dresses WHERE BDType = '$Body'";
          $result = $objCon->query($sql);
      } else {
        $sql = "SELECT * FROM dresses WHERE ID = $ID";
        $result = $objCon->query($sql);
      }
          $sqltype = "SELECT * FROM bdtype"; //สร้างอีกตาราง ชื่อ bdtype ที่มีเฉพาะหมวดหมู่ของรูปร่างเท่านั้น
          $resulttype = $objCon->query($sqltype);
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
    ?> 
    <?php while($row = $result->fetch_assoc()): ?>
    <?php // กำหนดตัวแปรข้อมูล
      $imageURL = 'Dress/'.$row['Pic_Dress'];  // : ลิ้ง(ที่อยู่)รูปภาพ 
      $Shape = $row['BDType'];                 // : Shape ex. Pear Rectangle

    ?>
      <!--ส่วนแสดงรูปภาพ -->
      <div class="morepic">
        <img src="<?php echo $imageURL; ?>" width="100%" id="MainImg" alt=""> <!--รูปภาพหลัก -->      
        <div class="sub-img-group"> <!--รูปภาพย่อย -->  
          <div class="sub-img-col">
          <img src="<?php echo $imageURL; ?>" width="100%" id="MainImg" class="subIMG" alt="">
          </div>
          <div class="sub-img-col">
          <img src="<?php echo $imageURL; ?>" width="100%" id="MainImg" class="subIMG" alt="">
          </div>
          <div class="sub-img-col">
          <img src="<?php echo $imageURL; ?>" width="100%" id="MainImg" class="subIMG" alt="">
          </div> 
          
        </div>
      </div>
     
      <div>
        <!--แสดง tag shape (Link ไป main ได้)--> 
      <?php while($rowtype = $resulttype->fetch_assoc()): ?>
      <?php if($rowtype['BDType']==$Shape): ?>
      <a href="Home.php?id_Type=<?php echo $rowtype['BDType']; ?>">
      <h4>#<?php echo $Shape; ?></h4>
      </a>
      <?php endif; ?>
      <?php endwhile; ?>
      
        <!--แสดงผลชื่อ,ข้อมูลเสื้อผ้า--> 
        <h1><?php echo $row['Name_Dress'];?></h1>
        <span><p><?php echo $row['Detail'];?></p></span>
      <div>
      <br>
        <!--ส่วนเลือกไซส์เสื้อผ้า--> 
        <h3>Size : <select>
          <option>select size</option>
          <option> S </option>
          <option> M </option>
          <option> L </option>
          <option> Xl </option>
          <option> 2Xl </option>
        </select>
        </h3>
      </div>
      <!--ส่วนเลือกสีเสื้อผ้า--> 
      <div><h3>Color : </h3></div>
      <div class = "color-groups">
        <div class = "color color-white active-color"></div>
        <div class = "color color-black"></div>
        <div class = "color color-yellow"></div>
        <div class = "color color-blue"></div>
        <div class = "color color-red"></div>
      </div>
    </div>
    </section>
  </main>

  <footer>
      <nav class="BottomBar">
        <!--ปุ่มลองเสื้อผ้ากับลิ้งไปร้านค้า--> 
         <a class="navLink" id="tryBTN" href="trydress.html">Try this &nbsp<i class="fa-solid fa-camera"></i></a></li>
        <a class="navLink" id="shopBTN" href="<?php echo  $row['Link']; ?>">Go to Shop &nbsp<i class="fa-solid fa-bag-shopping"></i></a></li>
      </nav>
    <br><br><br>
  </footer>
  <?php endwhile ?>
  
</body>
</html>