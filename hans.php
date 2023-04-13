<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <?php
    include_once "metaimports.html";
    ?>
    <title>Welkom, Bob</title>
</head>
<?php
include_once "bodylayout.html";
?>
<body class="container-fluid vh-100">
<div class="pt-4">
    <div class="pl-5 row">
        <img class="border border-secondary" src="assets/hans.jpg" height="125" width="125">
        <h3 class="pt-5 pl-3 pb-5">Overzicht Hans</h3>
    </div>
    <hr style="height:2px;border-width:0;color:black;background-color:black;width: 1000px;">
    <div>
        <div class="pl-4 overflow-scroll pt-2">
            <h2 style="font-size: 25px">Gedragsbeoordelingen:</h2>
            <div class="pl-2">
                <div style="height: 10px"></div>
                <div style="height: 60px">
                    <div style="width: 315px; height: 60px" class="row">
                        <span style="font-size: 35px;color: green;" class="material-icons position-relative mt-1">thermostat</span>
                        <p style="font-size: 20px" class="col   p-1">4 tree's saved!</p>
                    </div>
                </div>
                <div style="height: 60px">
                    <div style="width: 315px; height: 60px" class="row">
                        <span style="font-size: 35px;color: orange;" class="material-icons position-relative">local_gas_station</span>
                        <p style="font-size: 20px" class="col   p-1">Fuel usage has increased!</p>
                    </div>
                </div>
                <div style="height: 60px">
                    <div style="width: 315px; height: 60px" class="row">
                        <span style="font-size: 35px;color: red;" class="material-icons position-relative">directions_car</span>
                        <p style="font-size: 20px" class="col p-1">Driving did not improve!</p>
                    </div>
                </div>
            </div>
            <h2 style="font-size: 25px">Resultaten:</h2>
            <div>
                <p style="color: green ; font-size: 25px;">Training one completed</p>
                <p style="color: green ;font-size: 25px">Training two completed</p>
                <p style="color: red ; font-size: 25px;">Training three failed</p>
                <p style="color: green ;font-size: 25px">Training four completed</p>
                <p style="color: orange ; font-size: 25px;">Training five not started</p>
                <p style="color: orange ;font-size: 25px">Training six not started</p>
            </div>
    </div>
</div>
<?php
include_once "scriptimports.html";
?>
</html>