<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  
        include_once "metaimports.html";
        $rows = $db->GetTraining($_GET["TrainingId"]);
        foreach($rows as $row){
            echo "<title>$row[name]</title>" ;
        }
    ?> 
    <title>Document</title>
</head>

<?php 
    include_once "./scriptimports.html";
?>
</body>
</html>