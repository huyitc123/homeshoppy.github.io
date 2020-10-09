<?php
	session_start();
	include('db/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HomeShoppe</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS -->
    <link rel="icon" href="images/logo.png" />
    
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="den">
      <div class="icon">
        <a href="https://www.facebook.com/huyleeitc?ref=bookmarks"
          ><div class="fa fa-facebook-square"></div
        ></a>
        <a href=""><div class="fa fa-twitter"></div></a>
        <a href=""><div class="fa fa-google-plus"></div></a>
        <a href=""><div class="fa fa-tumblr"></div></a>
      </div>
      <div class="call">
        <h3>CALL FOR ME:+0858302499</h3>
      </div>
      <div class="open">
        <h3>WELCOM HOME SHOPPE AND OPENING HOURS : 24H</h3>
      </div>
      <div class="bag">
        <div class="fa fa-shopping-bag"></div>
      </div>
    </div>
    <!-- END HEADER -->
     
    <div class="logo">
      <a href="index.php"><img src="images/logo.png" alt="" class="img-fluid" /></a>
    </div>

    <!-- end logo -->
    
    <div class="container">
      <nav class="navbar navbar-expand-sm" style="margin-bottom: 10px;margin: 0;padding: 0;height: 53px;border-radius:10px;">
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a style="border-top-left-radius:10px;border-bottom-left-radius:10px;" href="index.php">Trang chủ</a>  
            </li>
            <li class="nav-item">
              <a href="sanpham.php">Sản Phẩm</a>  
            </li>
            <li class="nav-item">
              <a href="vanchuyen.php">Vận Chuyển</a>  
            </li>
            <li class="nav-item">
              <a href="tintuc.php">Tin tức</a>  
            </li>
            <li class="nav-item">
              <a href="call.php">Liên hệ</a>  
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button style="background-color:#bb1a20;color: #fff;border: none;margin-right: 20px;" class="btn btn-outline-success my-2 my-sm-0" type="submit";>Search</button>
          </form>
        </div>
      </nav>
    </div>
    <!-- End menu -->
    <div class="headerslide" style="margin-top: 10px;">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <ul class="list-group">
              <li style="background-color: #bb1a20;font-size: 16px;" class="list-group-item active">CATEGORIES</li>
              <?php 
              $sql_category = mysqli_query($con,'SELECT * FROM category ORDER BY category_id');
                ?>
                <?php 
                while($row_category = mysqli_fetch_array($sql_category)) {
               ?>  
              <a href=""
                ><li style="border-bottom: 1px solid #EEE;"  class="list-group-item">
                  <span class="fa fa-caret-right"></span><?php echo $row_category['category_name'] ?>
                </li></a
              >
              <?php
            }
          ?> 
            </ul>
          </div>
          <div style="border: 1px solid #EEE;border-radius: 10px;" class="col-md-9">
            <div id="anhslide" class="carousel slide" data-ride="carousel" data-interval:="5000">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
           
                  <img src="images/slide-1-image.png" alt="" class="img-fluid" style="width:400px;height:300px; margin-top: 50px;">
                  <div class="carousel-caption d-none d-md-block">
                    <h3 style="color:#bb1a20;font-size: 50px;">CLEARANCE SALE</h3>
                    <p style="color:black;font-size: 20px;">UPTo 20% OFF</p>
                    <p style="color:black;font-size: 20px;">Loa vi tính,âm thanh chất lượng cao</p>
                    <div style="padding:7px 10px;cursor: pointer; background:#bb1a20;color: white;border:none;" class="btn btn-warning">Shop Now</div>
                  </div>
                </div>
                <?php
                    $sql_slider = mysqli_query($con,"SELECT * FROM slider ORDER BY slider_id");
                    while($row_slider = mysqli_fetch_array($sql_slider)) {
                ?>
                <div class="carousel-item">
                  <img src="images/<?php echo $row_slider['slider_image'] ?>" alt="" class="img-fluid" style="width:400px;height:300px; margin-top: 50px;">
                  <div class="carousel-caption d-none d-md-block">
                    <h3 style="color:#bb1a20;font-size: 50px;"><?php echo $row_slider['slider_sale'] ?></h3>
                    <p style="color:black;font-size: 20px;"><?php echo $row_slider['slider_upto'] ?></p>
                    <p style="color:black;font-size: 20px;"><?php echo $row_slider['slider_infor'] ?></p>
                    <div style="padding:7px 10px;cursor: pointer; background:#bb1a20;color: white;border: none; " class="btn btn-warning">Shop Now</div>
                  </div>
                </div>
                    <?php } ?>
              </div>
            </div>
            <div class="bottom">
              <h3>Mua Hàng Chất Lượng Chỉ Có Ở HomeShoppe</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end slide -->
    <div class="container">
      <div class="newproduct" style="border: 1px solid  #EEE; margin-top: 30px; border-radius:10px ;">
        <h3 style="margin-top: 10px;font-family: 'ambleregular';font-size: 22px;color: #383838;text-transform: uppercase; margin-left: 10px ;">sản phẩm mới</h3>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?php 
        $sql_sanphamnew = mysqli_query($con,'SELECT * FROM sanphamnew ORDER BY sanpham_id');
    ?>
    <?php 
          while($row_sanphamnew = mysqli_fetch_array($sql_sanphamnew)) {
         ?> 
         <div style="border: 1px solid  #EEE;margin:15px;margin-left: 21px;" class="col-md-2">
         
          <img src="images/<?php echo $row_sanphamnew['sanpham_anh'] ?>" alt=""class="img-fluid" style="width:150px;height:150px; margin-left: 8px;">
           <a style="text-decoration:none;" href=""><h2 style="text-align: center;font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 15px;text-transform: uppercase;color:cornflowerblue;"><?php echo $row_sanphamnew['sanpham_name'] ?></h2></a>
           <h2 style="text-align: center;"><?php echo $row_sanphamnew['sanpham_gia'] ?></h2>
           <button style="background-color:#bb1a20;color: #fff;border: none;margin-left:20px;" class="btn btn-outline-success my-2 my-sm-0" type="submit";>Add to cart</button>
          
          </div>
   <?php } ?>
          </div>
         </div>
<!-- End new product -->
<div class="container">
  <div class="featureproduct" style="border: 1px solid  #EEE; margin-top: 30px; border-radius:10px ;">
    <h3 style="margin-top: 10px;font-family: 'ambleregular';font-size: 22px;color: #383838;text-transform: uppercase; margin-left: 10px ;">Sản phẩm bán chạy</h3>
  </div>
</div>
<div class="container">
  <div class="row">
    <?php 
    $sql_sanphambanchay = mysqli_query($con,'SELECT * FROM sanphambanchay ORDER BY banchay_id');
?>
<?php 
      while($row_sanphambanchay = mysqli_fetch_array($sql_sanphambanchay)) {
     ?> 
     <div style="border: 1px solid  #EEE;margin:15px;margin-left: 21px;" class="col-md-2">
     
      <img src="images/<?php echo $row_sanphambanchay['banchay_anh'] ?>" alt=""class="img-fluid" style="width:150px;height:150px; margin-left: 8px;">
      <a style="text-decoration:none;" href=""><h2 style="text-align: center;font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 15px;text-transform: uppercase;color:cornflowerblue;"><?php echo $row_sanphambanchay['banchay_ten'] ?></h2></a>
       <h2 style="text-align: center;"><?php echo $row_sanphambanchay['banchay_gia'] ?></h2>
       <button style="background-color:#bb1a20;color: #fff;border: none;margin-left:20px;" class="btn btn-outline-success my-2 my-sm-0" type="submit";>Add to cart</button>
      
      </div>
<?php } ?>
      </div>
     </div>
 <!-- end feuture product -->  
 <div style="margin-top:50px;"class="footer">
   <div class="noidung">
   <h3 style="text-align: center;">Follow Me:  <a href="https://www.facebook.com/huyleeitc?ref=bookmarks"
    ><div style="color:#bb1a20 ;" class="fa fa-facebook-square"></div
  ></a></h3>
 <h6 style="text-align: center;">© 2013 home_shoppe. All rights reserved | Designed by HUY LÊ based on <a style="text-decoration: none; color:#bb1a20 ;"href="">W3layout</a></h6>
 <a href=""></a>
</div>
 </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
