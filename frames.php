<?php
session_start();
$_SESSION['par']=$_POST['name'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>frames</title>
</head>

<frameset rows ="40% ,60%"  >
    <frameset cols ="33.3%, 33.3% ,33.3%">
       <frame src= "currency.php" >
        <frame src ="simple.html">
        <frame src ="grade.html">

    </frameset>
    <frameset rows ="80% , 20%">
        <frame src="frame1.html" name ="question">
        <frame src="details.php" >
    </frameset>
</frameset>

</html>