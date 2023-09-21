<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number</title>
</head>
<body>

<?php
session start();
/*$Number = rand(0,9);
while(count($Number)<3) {
    print_r($Number);
}*/

$Number = array();

while (count($Number) < 3) { //當$Number小於三個
    $RandomNumber = rand(0, 9);  //隨機跑出數字
    
    if (!in_array($RandomNumber, $Number)) { //確認$RandomNumber數字是否有重複
        $Number[] = $RandomNumber;  //沒有就丟回陣列
    }
}
print_r($Number); //讓數字排整齊



?>





</body>
</html>