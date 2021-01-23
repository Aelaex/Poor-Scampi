<?php
session_start();
?>
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
<script src="jquery.js"></script>
<script>
    $(function(){
        $("#header").load("header.html");
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<div id="wrapper" style="min-height:100%;background-color:#fbfbfb">
    <div id="header"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.html">
            <img src="Icon.png" width="30" height="30" alt="">
        </a>

    </nav>
    <h3>Das sind unsere zahlen</h3>
    <?php
    $Einsatzt = $_POST["Einsatzt"];
    $Guthaben = $_SESSION["Guthaben"];
    if ($Guthaben < $Einsatzt){
        echo "<script>window.location = 'tomuchmoney.html'</script>";
    }
    $Guthaben = $Guthaben - $Einsatzt;
    else if ($Guthaben < 0){
        echo "<script>window.location = 'tomuchmoney.html'</script>";
    }
    $_SESSION["Guthaben"] = $Guthaben;
    ?>

    <?php
    $random0 =  rand(1,49);

    $random = array($random0);
    $random0 =  rand(1,49);
    $arrlength = count($random);
    for($y = 0; $y < 5; $y++){
        for($x = 0; $x < $arrlength; $x++) {
        while ($random0 == $random[$x]){
            $random0 = rand(1,49);
        }}
    $random[$x] = $random0;
    $arrlength = count($random);
    $random0 = rand(1,49);
    }
    sort($random);

    for($x = 0; $x < $arrlength -1; $x++) {
        echo "<img src='Pictures/Kugel/zahlenkugel-v1-200px-".$random[$x].".png' >";
        }
    ?>
    <h3>Das sind deine zahlen</h3>
     <?php
     $i = 0;

     $Zahl = array($_POST["Zahl1"],$_POST["Zahl2"],$_POST["Zahl3"],$_POST["Zahl4"],$_POST["Zahl5"]);
     sort($Zahl);

     for($x = 0; $x < $arrlength -1; $x++) {
         echo "<img src='Pictures/Kugel/zahlenkugel-v1-200px-".$Zahl[$x].".png' >";
     }

     for($y = 0; $y < 5; $y++) {
     for($x = 0; $x < $arrlength; $x++) {
         if ($Zahl[$y] == $random[$x]){$i++;}
     }
     }

     if ($i > 0){
         $Gewinn = 0;
         $Gewinn = $Einsatzt * $i;
         echo "<p>Sie haben Gewonnen " .$i. " Zahlen sind richtig. Sie haben ".$Gewinn." Euro gewonnen</p>";
         $Guthaben = $Guthaben +$Gewinn;
         $_SESSION["Guthaben"] = $Guthaben;

     }
     ?>
    <form action="eingabe.php">
        <div class="center">
            <input  class="btn btn-primary"  onclick="compare()" type="submit" value="Nochmal">
        </div>
    </form>
    </form>
    <script type="text/javascript">
        var form = document.getElementById('form'),
            button = form['submit'];
        window.onsubmit = function(e) {
            return !!form.getAttribute('data-allow-submit');
        };
        button.onclick = function() {
            form.setAttribute('data-allow-submit', 1);
            form.submit();
        };
    </script>


</div>
</body>
</html>