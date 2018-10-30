<html>

<head>

<title>Add/Revise Recipe</title>
</head>


<body bgcolor="#D8C4C4">

<table width="80%" align="center" border="1" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
<tr><td><center><h2>Recipe List</h2></center>
<p><a href="index.html">Back to Index</a></p>
<p><a href="recipe1.php">Enter New Recipe</a></p>

<?php 
$user = "planning_ben";
$pass = "ben123r";

$db = mysql_connect(localhost, $user, $pass);

mysql_select_db("planning_recipes",$db);

$query="SELECT id, name from recipelist ORDER BY name;";

$result=mysql_query($query);

while ($line = mysql_fetch_row($result)) {
   $id=$line[0];
   $name=$line[1];
   echo "<p><b>$name</b>- <a href=\"recipe1.php?n=$id\">Update</a></p>";
}
?>

</p></td>
  </tr></table></body></html>
