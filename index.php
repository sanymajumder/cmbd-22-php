<?php 

$test1 = "wordpress developer";
//$test2 = "wordpress developer and ecommerce expert";

//$data = $test1.' '.$test2 ;

function pranto($name,$location) {
    echo "this is $name";
    echo "</br>";
    echo "</br>";
    echo "i'm from $location";
    
}

//define ('amount', 200);
// echo amount;

$sign1 = 3;
$sign2 = 8;

$total = $sign1 + $sign2;

echo $total;
echo "</br>";
echo $test1[5];
echo "</br>";
echo "</br>";
echo strtoupper($test1);
echo "</br>";
echo "</br>";
echo strtolower($test1);
echo "</br>";
echo "</br>";
echo str_replace('p','c', $test1);
echo "</br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<!--    <h1>hi this is pranto</h1>-->
    
    <?php 
    
//    echo strlen("$test"); 
    
//    echo $data;
    echo "</br>";
    echo pranto("sany","narayanganj");
    
    
    
    ?>
    
</body>
</html>