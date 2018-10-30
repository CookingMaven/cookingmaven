<html>

<head>

<title>Add/Revise Recipe</title>
</head>

<body bgcolor="#D8C4C4">
<form method="POST" action="recipe2.php">

<table width="80%" align="center" border="1" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
<tr><td colspan="3" align="center"><h2>Add/Edit Recipe</h2>
<?php 
$user = "planning_ben";
$pass = "ben123r";

$db = mysql_connect(localhost, $user, $pass);

mysql_select_db("planning_recipes",$db);

if($n!="") {$query="SELECT * FROM recipelist WHERE (id=$n)";
$result=mysql_query($query);
$name=mysql_result($result,0,"name");
$author=mysql_result($result,0,"author");
$description=mysql_result($result,0,"description");
$ingredients=mysql_result($result,0,"ingredients");
$directions=mysql_result($result,0,"directions");
$preptime=mysql_result($result,0,"preptime");
$cooktime=mysql_result($result,0,"cooktime");
$servingsize=mysql_result($result,0,"servingsize");
$dish_app=mysql_result($result,0,"dish_app");
$dish_side=mysql_result($result,0,"dish_side");
$dish_main=mysql_result($result,0,"dish_main");
$dish_des=mysql_result($result,0,"dish_des");
$dish_sn=mysql_result($result,0,"dish_sn");
$dish_bev=mysql_result($result,0,"dish_bev");
$ing_beef=mysql_result($result,0,"ing_beef");
$ing_chx=mysql_result($result,0,"ing_chx");
$ing_pork=mysql_result($result,0,"ing_pork");
$ing_fish=mysql_result($result,0,"ing_fish");
$ing_veg=mysql_result($result,0,"ing_veg");
$ing_dairy=mysql_result($result,0,"ing_dairy");
$is_kosher=mysql_result($result,0,"is_kosher");
$has_nuts=mysql_result($result,0,"has_nuts");

echo "<input type=\"hidden\" name=\"id\" value=\"$n\">";}

?>

<table><tr><td align="right" valign="top"><b>Name:</b></td><td><input type="text" name="name" size="60" value="<?php echo $name;?>">
</td></tr><tr><td align="right" valign="top"><b>Author:</b></td><td><select name="author">
<option value="<a href='/mavens/maxinepowerbio.php'>Maxine Jindrich Power</a>">Maxine Power</option>
<option value="<a href='/mavens/carolpowerbio.php'>Carol Pokodner Power</a>">Carol Power</option>
<option value="<a href='/mavens/nelliepowerbio.php'>Nellie Grapes Power</a>">Nellie Power</option>
<option value="<a href='/mavens/bessiepokodner.php'>Bessie Weinstein Pokodner</a>">Bessie Pokodner</option>
<option value="<a href='/mavens/helenbaier.php'>Helen Baier Jindrich</a>">Helen Baier</option>
<option value="<a href='/mavens/benjaminpower.php'>Ben Power</a>">Ben Power</option>
<option value="Other">Other</option>


</select>

</td></tr><tr><td align="right" valign="top"><b>Description:</b></td><td><textarea rows="6" name="description" cols="45"><?php echo $description;?></textarea>

</td></tr><tr><td align="right" valign="top"><b>Ingredients:</b></td><td><textarea rows="10" name="ingredients" cols="60"><?php echo $ingredients;?></textarea>

</td></tr><tr><td align="right" valign="top"><b>Directions:</b></td><td><textarea rows="10" name="directions" cols="60"><?php echo $directions;?></textarea>

</td></tr><tr><td align="right" valign="top"><b>Prep Time:</b></td><td><input type="text" name="preptime" size="30" value="<?php echo $preptime;?>">

</td></tr><tr><td align="right" valign="top"><b>Cook Time:</b></td><td><input type="text" name="cooktime" size="30" value="<?php echo $cooktime;?>">

</td></tr><tr><td align="right" valign="top"><b>Servings:</b></td><td><input type="text" name="servingsize" size="30" value="<?php echo $servingsize;?>">

</td></tr></table>

  </tr>
  <tr>
    <td width="50%" valign="top">
<p align="center"><B>Type of Dish</B></p>

        <p>
<input type="checkbox" name="dish_app" <?php if ($dish_app==1) {echo "CHECKED";} ?>>Appetizer<br>
<input type="checkbox" name="dish_side" <?php if ($dish_side==1) {echo "CHECKED";} ?>>Side Dishes<br>
<input type="checkbox" name="dish_main" <?php if ($dish_main==1) {echo "CHECKED";} ?>>Main Dishes<br>
<input type="checkbox" name="dish_des" <?php if ($dish_des==1) {echo "CHECKED";} ?>>Dessert<br>
<input type="checkbox" name="dish_sn" <?php if ($dish_sn==1) {echo "CHECKED";} ?>>Snacks<br>
<input type="checkbox" name="dish_bev" <?php if ($dish_bev==1) {echo "CHECKED";} ?>>Beverages</p>
  
        
    
        
  
    <td width="50%" valign="top">
<p align="center"><B>Ingredient Info</B></p>
<P>
<input type="checkbox" name="ing_beef" <?php if ($ing_beef==1) {echo "CHECKED";} ?>>Beef<br>
<input type="checkbox" name="ing_chx" <?php if ($ing_chx==1) {echo "CHECKED";} ?>>Chicken<br>
<input type="checkbox" name="ing_pork" <?php if ($ing_pork==1) {echo "CHECKED";} ?>>Pork<br>
<input type="checkbox" name="ing_fish" <?php if ($ing_fish==1) {echo "CHECKED";} ?>>Fish<br>
<input type="checkbox" name="ing_veg" <?php if ($ing_veg==1) {echo "CHECKED";} ?>>Vegetarian<br>
<input type="checkbox" name="ing_dairy" <?php if ($ing_dairy==1) {echo "CHECKED";} ?>>Dairy<br>
<input type="checkbox" name="is_kosher" <?php if ($is_kosher==1) {echo "CHECKED";} ?>>Kosher<br>
<input type="checkbox" name="has_nuts" <?php if ($has_nuts==1) {echo "CHECKED";} ?>>Nuts<br>

        <p>&nbsp;</p></td>

      </tr>

</table>
<center><input type="submit" value="Submit">
<input type="reset" value="Reset"></center>

</form>
</body>

</html>
