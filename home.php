<?php
include_once "./DBcooler.php";
$db = new DriveCoolerDB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once "metaimports.html";
    ?>
    <title>Home</title>
</head>
<?php
include "./bodylayout.html";
?>
<div>
    <div class="pl-5 row">
        <img src="assets/hans.jpg" width="100" height="100" style="position: fixed; top: 120px" class="border border-secondary">
        <div style="position: fixed; left: 150px; top: 120px;">
            <h2 class="pl-3">Welkom Hans!</h2>
            <span style="font-size: 40px;" class="material-icons pl-2">thermostat</span>
            <span style="font-size: 40px;" class="material-icons">local_gas_station</span>
            <span style="font-size: 40px;" class="material-icons">directions_car</span>
        </div>
    </div>
    <br>
    <div style="height: 150px"></div>
    <hr style="height:2px;border-width:0;color:black;background-color:black;width: 1000px;">
    <br>
    <div class="pl-4">
        <h2>Trainingen</h2>
    </div>
    <div>
        <div class=""></div>
        <h3></h3>
        <img src="assets/black.png" style="height: 125px; width: 125px">
        <img src="assets/black.png" style="height: 125px; width: 125px">
    </div>
    <?php?>
</div>
<?php
include_once "./bodylayout.html";
?>
<?php
include_once "./scriptimports.html";
?>
</body>
</html>