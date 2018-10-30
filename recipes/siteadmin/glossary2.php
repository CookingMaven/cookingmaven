<html>

<head>

<title>Add/Revise Terms</title>
</head>


<body bgcolor="#D8C4C4">
<form method="POST">

<table width="80%" align="center" border="1" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
<tr><td colspan="3" align="center"><h2>Glossary Term</h2>

<?php 
$user = "planning_ben";
$pass = "ben123r";

$db = mysql_connect(localhost, $user, $pass);

mysql_select_db("planning_recipes",$db);

if($dom_bus=='on') {$dom_bus=1;} else{$dom_bus=0;}
if($dom_gen=='on') {$dom_gen=1;} else{$dom_gen=0;}
if($dom_mil=='on') {$dom_mil=1;} else{$dom_mil=0;}
if($dom_nfp=='on') {$dom_nfp=1;} else{$dom_nfp=0;}
if($dom_pers=='on') {$dom_pers=1;} else{$dom_pers=0;}
if($dom_pub=='on') {$dom_pub=1;} else{$dom_pub=0;}
if($sit_budget=='on') {$sit_budget=1;} else{$sit_budget=0;}
if($sit_cont=='on') {$sit_cont=1;} else{$sit_cont=0;}
if($sit_crisis=='on') {$sit_crisis=1;} else{$sit_crisis=0;}
if($sit_dm=='on') {$sit_dm=1;} else{$sit_dm=0;}
if($sit_fin=='on') {$sit_fin=1;} else{$sit_fin=0;}
if($sit_nv=='on') {$sit_nv=1;} else{$sit_nv=0;}
if($sit_oper=='on') {$sit_oper=1;} else{$sit_oper=0;}
if($sit_proj=='on') {$sit_proj=1;} else{$sit_proj=0;}
if($sit_strat=='on') {$sit_strat=1;} else{$sit_strat=0;}
if($top_defobj=='on') {$top_defobj=1;} else{$top_defobj=0;}
if($top_devplan=='on') {$top_devplan=1;} else{$top_devplan=0;}
if($top_ethsoc=='on') {$top_ethsoc=1;} else{$top_ethsoc=0;}
if($top_evalplan=='on') {$top_evalplan=1;} else{$top_evalplan=0;}
if($top_findinfo=='on') {$top_findinfo=1;} else{$top_findinfo=0;}
if($top_implplan=='on') {$top_implplan=1;} else{$top_implplan=0;}
if($top_planrole=='on') {$top_planrole=1;} else{$top_planrole=0;}
if($top_planproc=='on') {$top_planproc=1;} else{$top_planproc=0;}
if($top_situation=='on') {$top_situation=1;} else{$top_situation=0;}

if ($id!="") {
$query="UPDATE glossary SET term='$term',
definition='$definition', relatedterms='$relatedterms', source='$source' WHERE id=$id;";}

else {

$testquery="SELECT * FROM glossary WHERE term='$term'";
$result=mysql_query($testquery);
if(mysql_num_rows($result)!=0) {die("Term has already been entered");}

$query="INSERT INTO glossary ( term , definition , relatedterms ,
 source , entrydate) VALUES (
 '$term' , '$definition' , '$relatedterms' , '$source' , NOW());";}

mysql_query($query);
echo 'Query Updated.  <a href="glossary.php">Return to Index</a>';
?>

<p><b>Term</b><br> <input type="text" name="term" size="40" value="<?php echo $term;?>"></p>

        <p><b>Definition</b><br> <textarea rows="5" name="definition" cols="55"><?php echo $definition;?></textarea>
<p><b>Related Terms</b><br> <textarea rows="3" name="relatedterms" cols="35"><?php echo $relatedterms;?></textarea>

<p><b>Source</b><br> <textarea rows="2" name="source" cols="35"><?php echo $source;?></textarea></p>
<p>&nbsp;</p>
  </tr>
</table></body></html>