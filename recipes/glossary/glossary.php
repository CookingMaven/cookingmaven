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
<meta name="google-site-verification" content="B-OKVOgNtID50Ym604C8JMs8i6ibePuk-wJIFsj7QpI" />

</head>
<body bgcolor="#EFECE3">

<?php require "../topinclude.php"; ?>
<center><table width="780" cellpadding="5"><tr>


<td valign="top">

<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="5" width="100%">
<tr><td bgcolor="#800000" align="left" colspan="2">
<center><font size="6" color="#FFFFFF"><b><?php echo $title; ?></b></font></center>
</td></tr></table>


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

