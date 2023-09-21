<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number</title>
</head>
<body>

<?php
 //讓數字排整齊
 session_start();

$Number = array(); //創造陣列

while (count($Number) < 3) { //當$Number小於三個
    $RandomNumber = rand(0, 9);  //隨機跑出數字
    
    if (!in_array($RandomNumber, $Number)) {    //確認$RandomNumber數字是否有重複
        $Number[] = $RandomNumber;              //沒有就丟回陣列
    }
    
}
    print_r($Number);
    header('Location: index.php'); //轉回去index.php(主頁)

$_SESSION['pass'] = $Number;
$a =0;
if($a < 50){
    $a++;
}
if (!isset($_SESSION['Btn'])) {
    $_SESSION['Btn'] = 0;
}
else{
    $_SESSION['Btn']+1; 
}


header('Location: index.php'); //轉回去index.php(主頁)




?>





</body>
</html>