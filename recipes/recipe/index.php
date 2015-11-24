<html><head>
<title>The Cooking Maven - Recipes</title>

</head>
<body bgcolor="#FFE4B5">

<?php require "../topinclude.php"; ?>
<center><table width="750"><tr>
<?php require "../sidepanel.php"; ?>
<td>


<td valign="top">



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
<H2><font color="#800000">Recipe Index</font></H2>

Find our Maven's favorite recipes here.  Let us know what you think on Twitter <a href="http://www.twitter.com/thecookingmaven" target="new">@theCookingMaven</a>.

<ul>
<?php 
require "../password.php";  // Sets $user and $pass

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


