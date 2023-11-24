<nav class="navbar navbar-inverse navabar-fixed-top">
   <div class="container">
       <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
           </button>
           <a href="index.php" class="navbar-brand logo-wrapper">
           <img src="img/lifestyleStore.png" alt="Logo" width="50" height="40">
           Guitar Shop</a>
       </div>
       
       <div class="collapse navbar-collapse" id="myNavbar">
        
            <div>
            <ul class="nav navbar-nav" id="Menu">
               <li><a href="index.php">Trang chủ</a></li>
               <li><a href="products.php">Sản phẩm</a></li>
               <li><a href="contact.php">Liên hệ</a></li>
            </ul>
            </div>

        <div>
           <ul class="nav navbar-nav navbar-right">
               <?php
               if(isset($_SESSION['email'])){
               ?>
               <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</a></li>
               <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Cài đặt</a></li>
               <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a></li>
               <?php
               }else{
                ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Đăng ký</a></li>
               <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
               <?php
               }
               ?>
               
           </ul>
        </div>
    </div>
    </div>
   </div>

</nav>