<html>
<head>
<title>The Cooking Maven</title>
<meta name="google-site-verification" content="B-OKVOgNtID50Ym604C8JMs8i6ibePuk-wJIFsj7QpI" />
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1748896305444686",
    enable_page_level_ads: true
  });
</script>

</head>
<body bgcolor="#EFECE3">

<?php require "../topinclude.php"; ?>
<center><table width="780" cellpadding="5"><tr>


<td valign="top">

<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="5" width="100%">
<tr><td bgcolor="#800000" align="left" colspan="2">
<center><font size="6" color="#FFFFFF"><b>Recipe Box</b></font></center>
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

Find our Mavens' favorite recipes in the family Recipe Box.  Let us know when you try out our favorites by tweeting at <a href="http://www.twitter.com/thecookingmaven" target="new">@theCookingMaven</a> or following him on Instagram <a href="http://www.instagram.com/theDisneyMaven" targer="new">@theDisneyMaven</a> and sharing your experiences.

<ul>
<?php 
$user = "planning_ben";
$pass = "ben123r";

$db = mysql_connect(localhost, $user, $pass);

mysql_select_db("planning_recipes",$db);

$query="SELECT id, name, description FROM recipelist ORDER BY name;";
$result=mysql_query($query);
while ($line = mysql_fetch_row($result)) {
   $id=$line[0];
   $name=$line[1];
   $description=$line[2];
   echo "<li> <A HREF=\"$id.php\">$name</A> - $description <br>
";
   } ?>

</ul></td></tr></table>
<?php require "../bottom.php"; ?>
</body></html>


