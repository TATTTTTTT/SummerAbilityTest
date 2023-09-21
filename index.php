<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="number.php" id="form1" name="form1">
    <input type="submit" name="submit" id="submit" value="送出"> 
    </form>
    <?php
    //input那行是按鈕
session_start();

if(isset($_SESSION['pass'])){ //當$_SESSION['pass']有存在(isset)時
 $Pass1 = $_SESSION['pass']; //$_SESSION['pass']值跑到$Pass1
    print_r($Pass1); //顯示出陣列$Pass1



$a = $_SESSION['Btn']++;
 echo $a."=".$Pass1[0].",".$Pass1[1].",".$Pass1[2]."<br>";

}







?>
<form action="clear.php" id="form1" name="form1">
    <input type="submit" name="submit" id="submit" value="送出"> 
    </form>
</body>
</html>