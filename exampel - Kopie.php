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

    <?php
    class Test{
        public $result;
        public function __construct(){
            if(isset($_POST['submit'])){
                $this->result=$this->myfunction();
            }
        }
        private function myfunction(){
            //some actions
            return "values";
        }
    }

    if(isset($_POST)){
        $test = new Test();
        $result=$test->result;
    }
    ?>
    <form method="post" action="" enctype="multipart/form-data" name="uploadForm">
        <input name="test" />
        <input type="submit" name="submit" />
    </form>

    <div id="data"><?php echo $result; ?></div>

</div>
</body>
</html>