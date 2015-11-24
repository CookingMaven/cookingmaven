<html>
<head>
<title>Add/Revise Terms</title>
</head>
<body bgcolor="#D8C4C4">
<table width="80%" align="center" border="1" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
<tr><td><center><h2>Glossary Term List</h2></center>
<p><a href="index.html">Back to Index</a></p>
<p><a href="glossary1.php">NEW TERM</a></p>
<?php
require "../password.php";  // Sets $user and $pass
$db = mysql_connect(localhost, $user, $pass);  mysql_select_db("planning_recipes",$db);
$query="SELECT id, term, lastupdate from glossary ORDER BY term;";  $result=mysql_query($query);
while ($line = mysql_fetch_row($result)) {
    $id=$line[0];
    $term=$line[1];
    $lastupdate=$line[2];
    echo "<p><b>$term</b> - <a href=\"glossary1.php?n=$id\">Update</a> - $lastupdate</p>"; } ?>  </p></td>
</tr></table></body></html>
