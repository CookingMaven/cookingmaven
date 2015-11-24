<?php

require "../password.php";  // Sets $user and $pass

$db = mysql_connect(localhost, $user, $pass);

mysql_select_db("planning_recipes",$db);

$query="SELECT * FROM glossary WHERE (id=$id)";
$result=mysql_query($query);
$title=mysql_result($result,0,"term");
$definition=mysql_result($result,0,"definition");
$related=mysql_result($result,0,"relatedterms");
$source=mysql_result($result,0,"source");?>


<html><head>
<title><?php echo $title; ?></title>

</head>
<body bgcolor="#FFE4B5">

<?php require "../topinclude.php"; ?>
<center><table width="750"><tr>
<?php require "../sidepanel.php"; ?>

<td>
<td valign="top">



<h2><font color="#800000"><?php echo $title; ?></font></h2>

<?php echo $definition;
if ($related!="") {echo "
<p><b>Related Terms:</b> $related</p>";}
if ($source!="") {echo "
<p><b>Source:</b> $source</p>";}?>
<p><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Main Body Ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1748896305444686"
     data-ad-slot="3746382868"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<p>
<p><br><a href="index.php"><b>Back</b></a>



</td></tr></table>
<?php require "../bottom.php"; ?>
</body></html>

