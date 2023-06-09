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
<?php
$rows = $db->GetAllTraining();

?>
<div class="pl-5 pt-4 col-md-3 col-12">
    <div class="col-12 row mt-2 mb-3">
        <div class="col-4">
            <img src="assets/hans.jpg" width="100" height="100" class="borderborder-secondary">


        </div>
        <div style="right:-10px" class="col position-relative ">
            <h2>Welkom Hans!</h2>

            <span style="font-size: 40px;color: green;" class="material-icons pl-2">thermostat</span>
            <span style="font-size: 40px;color:yellow" class="material-icons">local_gas_station</span>
            <span style="font-size: 40px;color:red;" class="material-icons">directions_car</span>
        </div>
        <p>€20</p>
    </div>
    <div class="col d-none d-md-flex pt-5">
        <?php
        include "./result.html";
        ?>
    </div>
</div>
<br>
<div class="pl-4 col-12 mt-4 col-md-9">
    <h2>Trainingen</h2>
    <div style="height:100vh" class="row w-100">
        <?php
        $rows = $db->GetAllTraining();
        foreach ($rows as $row) {
            echo '<div style="max-width:300px;max-height:300px;background-color:lightgray;" class="col-12 col-md-4 m-3 overflow-hidden border">';
            echo "<p>$row[name]<p>";
            echo "<img style='width:100%' class='p-3' src=assets/$row[imgLocation] >";
            echo "<a href=http://drivecooler/Training.php?TrainingId=$row[id] class=stretched-link> <a/>";
            echo '</div>';
        }
        ?>
    </div>
    <?php
    include_once "./bodylayout.html";
    ?>
    <?php
    include_once "./scriptimports.html";
    ?>
    </body>

</html>