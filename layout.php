<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php
  include_once "metaimports.html";
  ?>
  <!-- Bootstrap CSS -->

  <title>Hello, world!</title>
</head>

<body class="container-fluid overflow-hidden vh-100">
  <div id="navBar" style="height:70px;background-color:#4D9FFF" class="row">
    <div class="col-12 row">
      <div class="col-10 d-block p-3">
        <h1 style="top:0px;font-size:35px" class="position-relative ">Drive cooler!</h1>
      </div>
      <div class="col-2 d-block p-3">
        <span style="font-size: 50px;left: 15px;" onclick="menu()" class="material-icons position-relative">menu</span>
      </div>
    </div>
    <div id="expanded" style="display: none;" class="col-12 row">
    <div  class="col">
        <a class="headerlinks" href="home.php">Home</a>
      </div>
      <div class="col">
        <a class="headerlinks" href="result.php">Resultaten</a>
      </div>
      <div class="col">
        <a class="headerlinks" href="">Log uit</a>
      </div>
    </div>
  </div>
  <div class="row h-100">
      <!-- echo hier -->
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <?php
  include_once "scriptimports.html";
  ?>
</body>

</html>