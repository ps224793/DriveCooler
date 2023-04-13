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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php  
        include_once "metaimports.html";
        $rows = $db->GetTraining($_GET["TrainingId"]);
        foreach($rows as $row){
            echo "<title>$row[name]</title>" ;
        }
    ?> 
</head>
<?php 
    include_once "./bodylayout.html";
?>
    <div class="col-12 center-block" >
        <iframe width="100%" style="min-height: 300px;"  src="https://www.youtube.com/embed/qQweWffNuD8" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

</div></div>
</body>
</html>