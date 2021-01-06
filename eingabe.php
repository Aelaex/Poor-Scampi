<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Poor-Scampi</title>
    <link rel="stylesheet" href="css/plusminus.css">
    <link rel="icon" href="Icon.png">
</head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="overflow:hidden">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/PlusMinus.js"> </script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-brand" href="home.html">
                    <img src="Icon.png" width="30" height="30" alt="">Home
                </a>
            </li>
            <li class="navar-nav">
                <a class="navbar-brand" href="registaion.html">
                    Registration
                </a>
            </li>
            <li class="navar-nav">
                <a class="nav-item nav-link disabled" href="adminconsole.html">Admin-Konsole</a>
            </li>
        </ul>
    </div>
</nav>
<body style="overflow:hidden;height: 100%; margin: 0;">

<div id="wrapper" style="min-height:100%;background-color:#fbfbfb">

<form action="rand.php" method="post">

    <div class="center">
        <?php
        // to change a session variable, just overwrite it
        $Guthaben =  $_SESSION["Guthaben"];
        echo "<input type='hidden' value='".$Guthaben."' name='Guthaben' >";

        echo "<p>Sie haben so viel: ".$Guthaben." €</p>";
        ?>
    </div>

    <div class="center">
        Zahl1: <input type="number" class="form-control bfh-number" min="1" max="49" data-wrap="true" name="Zahl1">
    </div>
    <div class="center">
        Zahl2: <input type="number" class="form-control bfh-number" min="1" max="49" data-wrap="true" name="Zahl2">
    </div>
    <div class="center">
        Zahl3: <input type="number" class="form-control bfh-number" min="1" max="49" data-wrap="true" name="Zahl3">
    </div>
    <div class="center">
        Zahl4: <input type="number" class="form-control bfh-number" min="1" max="49" data-wrap="true" name="Zahl4">
    </div>
    <div class="center">
        Zahl5: <input type="number" class="form-control bfh-number" min="1" max="49" data-wrap="true" name="Zahl5">
    </div>
    <div class="center">
        Einsatzt: <input type="number" class="form-control bfh-number" min="1"  data-wrap="true" name="Einsatzt">
    </div>
    <div class="center">
        <input  class="btn btn-primary"  onclick="compare()" type="submit" value="Submit">
    </div>


</form>
    <script>

        function compare()
        {

            var Numbers = [document.getElementById("Zahl1").value, document.getElementById("Zahl2").value, document.getElementById("Zahl3").value, document.getElementById("Zahl4").value, document.getElementById("Zahl5").value]

            var y
            var x
            for(y = 0; y < 5; y++) {
                for(x = 0; x < Numbers.length; x++) {
                    if(Numbers[y] == Numbers[x])
                    {
                        alert("The numbers are equal");
                    }
                    }
                }
            }
        }

    </script>
</div>

</body>
</html>
