<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Guitar Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Ưu đãi ngập tràn.</h1>
                       <p>Giảm 10% cho đơn hàng đầu tiên.</p>
                       <a href="products.php" class="btn btn-danger">Mua ngay</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/guitar.jpg" alt="">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Guitar</p>
                                        <p>Guitar Classic, Acoustic.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/drum.jpg" alt="";>
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Trống</p>
                                    <p>Trống cơ, trống điện.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/piano.jpg" alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Đàn</p>
                                   <p>Đàn piano, organ.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div><center><img src="img/thuong-hieu-1.webp" alt="" width="100%"></center>
            <br><br> <br>
           <footer class="footer"> 
            <?php
                require 'footer.php';
            ?>
           </footer>
        </div>
    </body>
</html>