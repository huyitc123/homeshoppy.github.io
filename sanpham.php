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
    <link rel="stylesheet" href="sanpham.css">
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