<HTML>
    <BODY BGCOLOR="lightBLUE" ALIGN="CENTER">
    <?php
session_start();
if (isset($_POST['q1']))
{
$_SESSION['q8a']=$_POST['q1'];}
else
$_SESSION['q8a'] ='(nan)';
$answer = $_SESSION['q8a'];
$_SESSION['par']=$_SESSION['par'];
if ($answer =='c')
$_SESSION['score']++;
$answer ="<BR><br>YOUR ANSWERS:".$_SESSION['q1a'].$_SESSION['q2a'].$_SESSION['q3a'].$_SESSION['q4a'].$_SESSION['q5a'].$_SESSION['q6a'].$_SESSION['q7a'].$_SESSION['q8a'];
echo $answer;
echo "<br><br>PARTICPANT NAME :".$_SESSION['par'];
echo "<br><br>CORRECT ANSWERS:cabdcdac<br>";
echo "<br><br>SCORE=".$_SESSION['score'];


?>



</BODY>
</HTML>