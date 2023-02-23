<?php

// define('NAME','Anshu Kumar');
// define('COLLEGE','BITM');
// echo NAME;
// echo '<br>';
// echo COLLEGE;



// $arr = array('NIT','MIT','BITM','SIT');
// echo $arr[2];
// echo "<br>";
// for($i=0;$i<4;$i++){ 
//     echo $arr[$i];
//     echo "<br>";
// }



// $arr = array('name'=>'Anshu','college'=>'BITM','number'=>'9631289302','location'=>'Dubai');
// foreach ($arr as $key=>$value){
//     echo $key. "=>".$value;
//     echo"<br>";
// }



// $arr = array(
//     array('name'=>'Anshu','college'=>'BITM','number'=>'9631289302','location'=>'Dubai'),
//     array('name'=>'Ankita','college'=>'BITM','number'=>'8102737541','location'=>'Kolkata'),
// );
// foreach ($arr as $a){
//     foreach ($a as $key=>$value){
//         echo $key. "=>".$value;
//         echo"<br>";
//     }
//     echo "<br><br>";
// }



// class Vehicle{

//     function getName(){
//         return $this -> name;
//     }
//     function setName($name){
//         $this -> name = $name;
//     }
//     function getColor(){
//         return $this -> color;
//     }
//     function setColor($color){
//         $this -> color = $color;
//     }
// }
// $obj = new Vehicle();
// $obj -> setName("Maruti");
// $obj -> setColor("Pink");
// echo $obj -> getName();
// echo "<br>";
// echo $obj -> getColor();
// echo "<br>";



?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <?php

    $sum = 0;
    $a = 0;
    $b = 0;

    if(isset($_POST['ok'])){
        $a = $_POST['num1'];
        $a = $_POST['num2'];
        $sum = $a + $b;
        
    }

    ?>
    
    <div class="container">
        <form class="row g-3 mt-5 p-5 shadow" id="form" action="form.php" method="post">
            <div class="col-md-6">
                <label>Username</label>
                <input type="" class="form-control" id="username" name="num1">
                <div class="error"></div>
            </div>
            <div class="col-md-6">
                <label>Email</label>
                <input type="email" class="form-control" id="email" name="num2">
                <div class="error"></div>
            </div>
            <div class="col-12">
                <button type="submit" id="submit" class="btn btn-primary" name="ok">Sign in</button>
            </div>
            <h1><?php echo $sum; ?></h1>
        </form>
    </div>

  </body>
</html>