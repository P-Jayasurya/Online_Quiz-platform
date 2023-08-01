<?php
session_start();
if (isset($_POST['q1']))
{
$_SESSION['q2a']=$_POST['q1'];}
else
$_SESSION['q2a'] ='(nan)';
$answer = $_SESSION['q2a'];

if ($answer=='a')
$_SESSION['score']++;
$_SESSION['par']=$_SESSION['par'];
echo "previous answers is ".$_SESSION['q1a'].$_SESSION['q2a'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>frame1a</title>
</head>
<body>
    <h1> QUESTION  3</h1>
    <form action ="question4.php" method ="POST" target="question">
    q3.The Telangana state was formed on _______, 2014<br>
        a.july 22<input type="radio" name ='q1' value="a">
        b.june 2<input type="radio" name ='q1'value='b'> <br> c.january 26<input type="radio" name ='q1' value='c'> d.june 22<input type="radio" name ='q1' value='d'><br>
        <input type ="submit" value="next" id="tout"> <a href="frame1.html" target="question"><input type="button" value="restartquiz"></a>

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