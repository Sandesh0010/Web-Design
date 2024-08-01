<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <h1> Your Result</h1>
    <?php 
    $english=40;
    $maths=500;
    $science=50;
    $p=(($english+$maths+$science)/300)*100;
    echo"English=$english<br>";
    echo"Maths=$maths<br>";
    echo"Science=$science</br>";
    $total=$english+$maths+$science;
    echo"Total=$total<br>";
    echo"Percentage=$p<br>";
    if($p<50)
    {
        echo "<h1 style='color:red'>You are fail</h1>";
    }
    else if ($p>=50&& $p<=100){
        echo "<h1 style='color:green'>You are pass</h1>";
    }
    else{
        echo "<h1 style='color:red'>Invalid Marks</h1>";
    }
    ?>
</body>
</html>