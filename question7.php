<?php
session_start();
if (isset($_POST['q1']))
{
$_SESSION['q6a']=$_POST['q1'];}
else
$_SESSION['q6a'] ='(nan)';
$answer = $_SESSION['q6a'];

if ($answer=='d')
$_SESSION['score']++;
$_SESSION['par']=$_SESSION['par'];
echo "previous answers are ".$_SESSION['q1a'].$_SESSION['q2a'].$_SESSION['q3a'].$_SESSION['q4a'].$_SESSION['q5a'].$_SESSION['q6a'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>frame1a</title>
</head>
<body>
    <h1> QUESTION  7</h1>
    <form action ="question8.php" method ="POST" target="question">
    q7.Bathukamma is a part of which festival?<br>
        a.Dasara<input type="radio" name ='q1' value="a">
        b.Diwali<input type="radio" name ='q1'value='b'> <br> c.Sankranthi<input type="radio" name ='q1' value='c'> d.Mahasivarathri<input type="radio" name ='q1' value='d'><br>
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