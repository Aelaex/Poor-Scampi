<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" style="height: 10%;
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
<!--Header Loader-->
<script src="jquery.js"></script>
<script>
    $(function(){
        $("#header").load("header.html");
    });
</script>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "www.yoursite.com";
    };
</script>

<div id="wrapper" style="min-height:100%;background-color:#fbfbfb">
    <!--Header Loader-->
    <div id="header"></div>

    <!--Splitter-->
    <div class="row" id="mainrow" style="min-height:95%">
        <div class="col-sm-auto">
            <img src="Pictures/outerborders.gif" align="left" height="55%"/>
            <br>
            <img src="Pictures/outerborders.gif" align="left" height="55%"/>
        </div>

        <div class="container">
            <?php
                echo "<p> Guten Tag ".$_POST["mail"]." :)</p><br>";
                echo "<p> Dein Aktuelles Guthaben beträgt";
                echo "<p>".$_POST["mail"]."</p>";

                echo "Favorite color is " . $_SESSION["value"] . ".<br>";


            ?>
        </div>

        <div class="col-sm-auto">
            <img src="Pictures/outerborders.gif" align="right" height="55%"/>
            <br/>
            <img src="Pictures/outerborders.gif" align="right" height="55%"/>
        </div>
    </div>
</div>








</body>
</html>