<?php
session_start();
if (isset($_POST['q1']))
{
$_SESSION['q3a']=$_POST['q1'];}
else
$_SESSION['q3a'] ='(nan)';
$answer = $_SESSION['q3a'];

if ($answer=='b')
$_SESSION['score']++;
$_SESSION['par']=$_SESSION['par'];
echo "previous answers are ".$_SESSION['q1a'].$_SESSION['q2a'].$_SESSION['q3a'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>frame1a</title>
</head>
<body>
    <h1> QUESTION  4</h1>
    <form action ="question5.php" method ="POST" target="question">
    q4.Who was appointed as first governor of Telangana<br>
        a.Kiran Bedi<input type="radio" name ='q1' value="a">
        b.Pon Radhakrishnan<input type="radio" name ='q1'value='b'> <br> c.Tamilsai Soundaryan<input type="radio" name ='q1' value='c'> d.E.S.L Narasimhan<input type="radio" name ='q1' value='d'><br>
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