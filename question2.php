<?php
session_start();
if (isset($_POST['q1']))
{
$_SESSION['q1a']=$_POST['q1'];}
else
$_SESSION['q1a'] ='(nan)';
$answer = $_SESSION['q1a'];
$_SESSION['score'] = 0;
if ($answer=='c')
$_SESSION['score']++;
$_SESSION['par']=$_SESSION['par'];
echo $_SESSION['par'];

echo "previous answer is $answer";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>frame1a</title>
</head>
<body>
    <h1> QUESTION  2</h1>
    <form action ="question3.php" method ="POST" target="question">
    q2.Who is the father of Telangana state? <br>
        a.prof. Jayasankar<input type="radio" name ='q1' value="a">
        b.KCR<input type="radio" name ='q1'value='b'> <br> c.k.Harish rao<input type="radio" name ='q1' value='c'> d.Sonia Gandhi<input type="radio" name ='q1' value='d'><br>
        <input type ="submit" value="next" id="tout"><a href="frame1.html" target="question"><input type="button" value="restartquiz"></a>
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