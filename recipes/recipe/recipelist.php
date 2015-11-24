<?php

require "../password.php";  // Sets $user and $pass

$db = mysql_connect(localhost, $user, $pass);

mysql_select_db("planning_recipes",$db);

$query="SELECT * FROM recipelist WHERE (id=$id)";
$result=mysql_query($query);
$name=mysql_result($result,0,"name");
$author=mysql_result($result,0,"author");

$ingredients=mysql_result($result,0,"ingredients");
$directions=mysql_result($result,0,"directions");
$preptime=mysql_result($result,0,"preptime");
$cooktime=mysql_result($result,0,"cooktime");
$servingsize=mysql_result($result,0,"servingsize");

?>

<html><head>
<title><?php echo $name; ?></title>

</head>
<body bgcolor="#FFE4B5">

<?php require "../topinclude.php"; ?>
<center><table width="750"><tr>
<?php require "../sidepanel.php"; ?>
<td>


<td valign="top">

<center>

<title><?php echo $name; ?></title>
</head><body>

</center>

<h2><font color="#800000"><?php echo $name; ?></font></h2>

<p><a href="https://twitter.com/share" class="twitter-share-button" data-text="See what's new with the @theCookingMaven" data-via="benpower10">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><p>
<p>
<b>Ingredients - </b><dir><?php echo $ingredients; ?></dir>
<b>Directions - </b><dir><?php echo $directions; ?></dir><br>
<b>Servings - </b><?php echo $servingsize; ?>
<br>
<br>
<dir><b>by - </b> <?php echo $author; ?><p>

<b>Prep Time - </b> <?php echo $preptime; ?><p>
<b>Cook Time - </b> <?php echo $cooktime; ?><p></b></dir>

<p><br><a href="index.php"><b>Back</b></a>
</font>

<br>
</td></tr></table>

<?php require "../bottom.php"; ?>
</body></html>

