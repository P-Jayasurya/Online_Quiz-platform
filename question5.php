<?php
session_start();
if (isset($_POST['q1']))
{
$_SESSION['q4a']=$_POST['q1'];}
else
$_SESSION['q4a'] ='(nan)';
$answer = $_SESSION['q4a'];

if ($answer=='d')
$_SESSION['score']++;
$_SESSION['par']=$_SESSION['par'];
echo "previous answers are ".$_SESSION['q1a'].$_SESSION['q2a'].$_SESSION['q3a'].$_SESSION['q4a'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>frame1a</title>
</head>
<body>
    <h1> QUESTION  5</h1>
    <form action ="question6.php" method ="POST" target="question">
    q5.What is the capital city of Telangana?<br>
        a.Warangal<input type="radio" name ='q1' value="a">
        b.Karimnagar<input type="radio" name ='q1'value='b'> <br> c.Hyderabad<input type="radio" name ='q1' value='c'> d.Medak<input type="radio" name ='q1' value='d'><br>
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