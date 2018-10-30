<?php

$user = "planning_ben";
$pass = "ben123r";

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
<meta name="google-site-verification" content="B-OKVOgNtID50Ym604C8JMs8i6ibePuk-wJIFsj7QpI" />

</head>
<body bgcolor="#EFECE3">

<?php require "../topinclude.php"; ?>
<center><table width="780" cellpadding="5"><tr>


<td valign="top">

<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="5" width="100%">
<tr><td bgcolor="#800000" align="left" colspan="2">
<center><font size="6" color="#FFFFFF"><b><?php echo $name; ?></b></font></center>
</td></tr></table>

<p>

<body>
<center>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 468X60 Ad -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:60px"
     data-ad-client="ca-pub-1748896305444686"
     data-ad-slot="1640535265"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
<p>

<p><a href="https://twitter.com/share" class="twitter-share-button" data-text="See what's new with the @theCookingMaven" data-via="theCookingMaven">Tweet</a>
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

