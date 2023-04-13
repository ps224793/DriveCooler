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
    <title>Document</title>
</head>
<?php
include_once "bodylayout.html";
?>
<div>
    <div class="pl-4 overflow-scroll pt-2">
        <h2 style="font-size: 25px">Gedragsbeoordelingen:</h2>
        <div class="pl-2">
            <div style="height: 10px"></div>
            <div style="height: 60px">
                <div style="width: 315px; height: 60px" class="row">
                    <span style="font-size: 35px" class="material-icons position-relative mt-1">thermostat</span>
                    <p style="font-size: 20px" class="col   p-1">You saved 4 trees this month!</p>
                </div>
            </div>
            <div style="height: 60px">
                <div style="width: 315px; height: 60px" class="row">
                    <span style="font-size: 35px" class="material-icons position-relative">local_gas_station</span>
                    <p style="font-size: 20px" class="col   p-1">Fuel usage increased!</p>
                </div>
            </div>
            <div style="height: 60px">
                <div style="width: 315px; height: 60px" class="row">
                    <span style="font-size: 35px" class="material-icons position-relative">directions_car</span>
                    <p style="font-size: 20px" class="col   p-1">Driving did not improve!</p>
                </div>
            </div>
        </div>
        <h2 style="font-size: 25px">Resultaten:</h2>
        <div style="height: 10px"></div>
        <div style="height: 80px; ">
            <div style="width: 325px; height: 70px; padding-left: 15px" class="row">
                <p style="text-align: center; font-size: 25px" class="col   p-1 pt-2">Training one completed</p>
            </div>
        </div>
        <div style="height: 80px;">
            <div style="width: 325px; height: 70px; padding-left: 15px" class="row">
                <p style="text-align: center; font-size: 25px" class="col   p-1 pt-2">Training two completed</p>
            </div>
        </div>
        <div style="height: 80px;">
            <div style="width: 325px; height: 70px; padding-left: 15px" class="row">
                <p style="text-align: center; font-size: 25px; padding-right: 57px" class="col pt-2">Training three failed</p>
            </div>
        </div>
        <div style="height: 80px;">
            <div style="width: 325px; height: 70px; padding-left: 15px" class="row">
                <p style="text-align: center; font-size: 25px" class="col   p-1 pt-2">Training four completed</p>
            </div>
        </div>
        <div style="height: 80px;">
            <div style="width: 325px; height: 70px; padding-left: 15px" class="row">
                <p style="text-align: center; font-size: 25px" class="col   p-1 pt-2">Training five not started</p>
            </div>
        </div>
        <div style="height: 80px;">
            <div style="width: 325px; height: 70px; padding-left: 15px" class="row">
                <p style="text-align: center; font-size: 25px" class="col   p-1 pt-2">Training six not started</p>
            </div>
        </div>
    </div>
</div>
<?php
include_once "scriptimports.html";
?>
</html>