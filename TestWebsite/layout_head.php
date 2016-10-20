<?php
include 'configure.php';
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Сарашка Работилница "Етър"</title>
<meta charset="utf-8">
<meta name="keywords" content="сарачи, етър, палдъм, хамут, юзда, юлар, ръчна изработка, занаятчийска камара, кожар">
<meta name="description" content="Ръчна изработка на сарашки и кожени изделия.">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="javascript.js"></script>
<script src="zoomPictures.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel='stylesheet prefetch' href='http://photoswipe.s3.amazonaws.com/pswp/dist/photoswipe.css'/>
<link rel='stylesheet prefetch' href='http://photoswipe.s3.amazonaws.com/pswp/dist/default-skin/default-skin.css'/>
<link href="http://bg.allfont.net/allfont.css?fonts=cyrillicold" rel="stylesheet" type="text/css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src='http://photoswipe.s3-eu-west-1.amazonaws.com/pswp/dist/photoswipe.min.js'></script>
<script src='http://photoswipe.s3-eu-west-1.amazonaws.com/pswp/dist/photoswipe-ui-default.min.js'></script>
</head>
<body>

<div id="navbar"> 
    <p id='logo'>Сарашка работилница "Етър"</p>
  <div id="addition">
    <ul>
      <li><a href="index.php">Начало</a></li>
      <li><a href="workplace.html">Работилницата</a></li>
      <li><a>Каталог</a>
        <ul>
          <li>Аксесоари
              <ul>
              <li><a href="art.php">Сарашко изкуство</a></li>
              <li><a href="otherModels.php">Други модели</a></li>
              </ul>
          </li>
          <li>Сарашки изделия
            <ul>
              <li><a href="paldam.php">Палдъм</a></li>
              <li><a href="hamut.php">Хамут</a></li>
              <li><a href="others.php">Други изделия</a></li>
            </ul>
          </li>
          <li>Кожени изделия
          <ul>
              <li><a href="wallets.php">Портфейли</a></li>
              <li><a href="cases.php">Калъфи за очила</a></li>
              <li><a href="keyrings.php">Ключодържатели</a></li>
              <li><a href="belts.php">Колани</a></li>
              <li><a href="leashes.php">Кучешки каишки</a></li>
              <li><a href="bags.php">Чанти</a></li>
            </ul>
          </li>
      </ul>
      </li>
      <li><a href="contact.php">Контакти</a></li>
      <li><a href="cart.php">Кошница</a></li>
    </ul>
  </div>
</div>
<div id="centerColumn">