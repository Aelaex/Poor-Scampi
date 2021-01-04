<!DOCTYPE html>
<html lang="en" style="height: 100%;
      margin: 0;">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Poor-Scampi</title>
    <link rel="icon" href="Icon.png">
</head>
<body style="overflow:hidden;height: 100%; margin: 0;">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<div id="wrapper" style="min-height:100%;background-color:#fbfbfb">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.html">
            <img src="Icon.png" width="30" height="30" alt="">
        </a>

    </nav>
    <h3>Das sind unsere zahlen</h3>
    <?php
    $random1 =  rand(1,49);
    $random2 = rand(1,49);
    $random3 = rand(1,49);
    $random4 = rand(1,49);
    $random5 = rand(1,49);
    $random6 = rand(1,49);
    $random = array($random1,$random2,$random3,$random4,$random5,$random6);

    $arrlength = count($random);
    for($x = 0; $x < $arrlength; $x++) {
        while ($random[2] == $random[$x]){
            $random[2] = rand(1,49);
        }}

    for($x = 0; $x < $arrlength; $x++) {
        while ($random[3] == $random[$x]){
            $random[3] = rand(1,49);
        }}
    for($x = 0; $x < $arrlength; $x++) {
        while ($random[4] == $random[$x]){
            $random[4] = rand(1,49);
        }}
    for($x = 0; $x < $arrlength; $x++) {
        while ($random[5] == $random[$x]){
            $random[5] = rand(1,49);
        }}
    for($x = 0; $x < $arrlength; $x++) {
        while ($random[6] == $random[$x]){
            $random[6] = rand(1,49);
        }}


    echo "<img src='Pictures/Kugel/zahlenkugel-v1-200px-".$random[1].".png' >";
    echo "<img src='Pictures/Kugel/zahlenkugel-v1-200px-".$random2.".png' >";
    echo "<img src='Pictures/Kugel/zahlenkugel-v1-200px-".$random3.".png' >";
    echo "<img src='Pictures/Kugel/zahlenkugel-v1-200px-".$random4.".png' >";
    echo "<img src='Pictures/Kugel/zahlenkugel-v1-200px-".$random5.".png' >";
    echo "<img src='Pictures/Kugel/zahlenkugel-v1-200px-".$random6.".png' >";

    ?>
    <h3>Das sind deine zahlen</h3>
     <?php
     $i = 0;

     $Zahl1 = $_POST["Zahl1"];
     $Zahl2 = $_POST["Zahl2"];
     $Zahl3 = $_POST["Zahl3"];
     $Zahl4 = $_POST["Zahl4"];
     $Zahl5 = $_POST["Zahl5"];
     $Zahl6 = $_POST["Zahl6"];
     echo "<img src='Pictures/Kugel/zahlenkugel-v1-200px-".$Zahl1.".png' >";
     echo "<img src='Pictures/Kugel/zahlenkugel-v1-200px-".$Zahl2.".png' >";
     echo "<img src='Pictures/Kugel/zahlenkugel-v1-200px-".$Zahl3.".png' >";
     echo "<img src='Pictures/Kugel/zahlenkugel-v1-200px-".$Zahl4.".png' >";
     echo "<img src='Pictures/Kugel/zahlenkugel-v1-200px-".$Zahl5.".png' >";
     echo "<img src='Pictures/Kugel/zahlenkugel-v1-200px-".$Zahl6.".png' >";

     for($x = 0; $x < $arrlength; $x++) {
         if ($Zahl1 == $random[$x]){$i++;}
     }
     for($x = 0; $x < $arrlength; $x++) {
         if ($Zahl2 == $random[$x]){$i++;}
     }

     for($x = 0; $x < $arrlength; $x++) {
         if ($Zahl3 == $random[$x]){$i++;}
     }

     for($x = 0; $x < $arrlength; $x++) {
         if ($Zahl4 == $random[$x]){$i++;}
     }

     for($x = 0; $x < $arrlength; $x++) {
         if ($Zahl5 == $random[$x]){$i++;}
     }

     for($x = 0; $x < $arrlength; $x++) {
         if ($Zahl6 == $random[$x]){$i++;}
     }

     if ($i > 0){
         echo "Sie haben Gewonnen " .$i. " Zahlen sind richtig";
     }
     ?>





</div>
</body>
</html>