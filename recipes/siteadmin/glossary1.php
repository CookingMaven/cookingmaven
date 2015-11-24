<html>

<head>

<title>Add/Revise Terms</title>
</head>

<body bgcolor="#D8C4C4">
<form method="POST" action="glossary2.php">

<table width="80%" align="center" border="1" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
<tr><td colspan="3" align="center"><h2>Add/Edit Glossary Terms</h2>
<?php 
require "../password.php";  // Sets $user and $pass

$db = mysql_connect(localhost, $user, $pass);

mysql_select_db("planning_recipes",$db);

if($n!="") {$query="SELECT * FROM glossary WHERE (id=$n)";
$result=mysql_query($query);
$term=mysql_result($result,0,"term");
$definition=mysql_result($result,0,"definition");
$relatedterms=mysql_result($result,0,"relatedterms");
$source=mysql_result($result,0,"source");


echo "<input type=\"hidden\" name=\"id\" value=\"$n\">";}

?>

<p><b>Term</b><br> <input type="text" name="term" size="40" value="<?php echo $term;?>"></p>

<p><b>Definition</b><br> <textarea rows="5" name="definition" cols="55"><?php echo $definition;?></textarea>

<p><b>Related Terms</b><br> <textarea rows="3" name="relatedterms" cols="35"><?php echo $relatedterms;?></textarea>


<p><b>Source</b><br> <textarea rows="2" name="source" cols="35"><?php echo $source;?></textarea></p>
<p>&nbsp;</p>
  </tr>
  

</table>
<center><input type="submit" value="Submit">
<input type="reset" value="Reset"></center>

</form>
</body>

</html>
