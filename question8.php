<?php
session_start();
if (isset($_POST['q1']))
{
$_SESSION['q7a']=$_POST['q1'];}
else
$_SESSION['q7a'] ='(nan)';
$answer = $_SESSION['q7a'];

if ($answer=='a')
$_SESSION['score']++;
$_SESSION['par']=$_SESSION['par'];
echo "previous answers are ".$_SESSION['q1a'].$_SESSION['q2a'].$_SESSION['q3a'].$_SESSION['q4a'].$_SESSION['q5a'].$_SESSION['q6a'].$_SESSION['q7a'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>frame1a</title>
</head>
<body>
    <h1> QUESTION  8</h1>
    <form action ="evaluation.php" method ="POST" target="question">
    q8.What was the military operation that conducted to merge hyderabad with Bharath...?<br>
        a.operation Thunder<input type="radio" name ='q1' value="a">
        b.Operation Hyderabad<input type="radio" name ='q1'value='b'> <br> c.operation polo<input type="radio" name ='q1' value='c'> d.Operation Strom<input type="radio" name ='q1' value='d'><br>
        <input type ="submit" value="finish quiz" id="tout">

        <p id="p" > hello</P>
    <script > 
    var t=10;
    
  inte=setTimeout(timer,1000,t); 
  
  function timer(time){
  ti=time.toString();
  document.getElementById("p").innerHTML = "timeleft : "+ti+" sec";
  t=t-1;
  if (t <0){
  clearInterval(inte); 
  document.getElementById("tout").click();
}
  
  else
   inte=setTimeout(timer,1000,t);
  }
  
  
  </script>
    </body>
</html>