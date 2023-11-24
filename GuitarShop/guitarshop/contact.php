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
        <section id="contact">
  <div class="container">
  <div class="contact-images">
      <img src="img/MP-care.png" alt="Hình ảnh 1">
 
    </div>
    <h2>Liên hệ</h2>
    
    <div class="contact-row">
      <div class="contact-info">
        <h3>Thông tin liên hệ</h3>
        <ul>
          <li><i class="fas fa-map-marker-alt"></i> Địa chỉ: Nông Trang - Việt Trì - Phú Thọ</li>
          <li><i class="fas fa-phone"></i> Điện thoại: 84849528493</li>
          <li><i class="fas fa-envelope"></i> Email: guitarshop@gmail.com</li>
        </ul>
      </div>
      
      <form class="contact-form">
        <h3>Gửi tin nhắn</h3>
        <form>
          <input type="text" id="name" name="name" placeholder="Họ và tên" required>
          <input type="email" id="email" name="email" placeholder="Địa chỉ email" required>
          <textarea id="message" name="message" placeholder="Nội dung tin nhắn" required></textarea>
          <button type="submit">Gửi</button>
        </form>
      </div>
    </div>
    

  </div>
</section>

        </div>
        <div>

           <footer class="footer">
           <?php
                require 'footer.php';
            ?>
           </footer>
        </div>
    </body>
</html>