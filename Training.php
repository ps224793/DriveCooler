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
    foreach ($rows as $row) {
        echo "<title>$row[name]</title>";
    }
    ?>
</head>
<?php
include_once "./bodylayout.html";
?>
<div class="col-12">
    <div class="row mt-5">
        <div class="col-12 col-md-7 center-block">
            <?php
            foreach ($rows as $row) {
                if ($row["videoEmbed"] != "")
                    echo '<iframe width=100% style=";min-height:450px;"  ' . "src=$row[videoEmbed] allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>";
                echo "<h1>$row[name]</h1>";
            }
            ?>
        </div>

        <div class="col-12 col-md-4 center-block">
            <?php
            foreach ($rows as $row) {
                echo "<p>$row[description]</p>";
            }
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <form>

            </form>
            <button style="width: 100%;" class="btn btn-primary">complete course</button>
        </div>
    </div>
</div>
</div>
</body>

</html>