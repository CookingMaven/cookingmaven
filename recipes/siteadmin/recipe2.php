<html><head><title>Add/Revise Recipe</title></head><body bgcolor="#D8C4C4"><form method="POST"><table width="80%" align="center" border="1" cellspacing="0" cellpadding="5" bgcolor="#FFFFFF"><tr><td colspan="3" align="center"><h2>Recipe</h2>
<?php
require "../password.php";  // Sets $user and $pass

$db = mysql_connect(localhost, $user, $pass)
mysql_select_db("planning_recipes",$db);
if($dish_app=='on') {$dish_app=1;}
 else{$dish_app=0;}
if($dish_side=='on') {$dish_side=1;}
 else{$dish_side=0;}
if($dish_main=='on') {$dish_main=1;}
 else{$dish_main=0;}
if($dish_des=='on') {$dish_des=1;}
 else{$dish_des=0;}
if($dish_sn=='on') {$dish_sn=1;}
 else{$dish_sn=0;}
if($dish_bev=='on') {$dish_bev=1;}
 else{$dish_bev=0;}
if($ing_beef=='on') {$ing_beef=1;}
 else{$ing_beef=0;}
if($ing_chx=='on') {$ing_chx=1;}
 else{$ing_chx=0;}
if($ing_pork=='on') {$ing_pork=1;}
 else{$ing_pork=0;}
if($ing_fish=='on') {$ing_fish=1;}
 else{$ing_fish=0;}
if($ing_veg=='on') {$ing_veg=1;}
 else{$ing_veg=0;}
if($ing_dairy=='on') {$ing_dairy=1;}
 else{$ing_dairy=0;}
if($is_kosher=='on') {$is_kosher=1;}
 else{$is_kosher=0;}
if($has_nuts=='on') {$has_nuts=1;}
 else{$has_nuts=0;}
if ($id!="") {$query="UPDATE recipelist SET name='$name', author='$author', difficulty='$difficulty', preptime='$preptime', cooktime='$cooktime', ingredients ='$ingredients', directions ='$directions',servingsize ='$servingsize', description ='$description', dish_app ='$dish_app', dish_side='$dish_side', dish_main ='$dish_main', dish_des ='$dish_des', dish_sn ='$dish_sn', dish_bev ='$dish_bev', ing_beef ='$ing_beef', ing_chx ='$ing_chx', ing_pork ='$ing_pork', ing_fish ='$ing_fish',ing_veg ='$ing_veg', ing_dairy ='$ing_dairy', is_kosher ='$is_kosher',has_nuts ='$has_nuts' WHERE id=$id;";}
else {$testquery="SELECT * FROM recipelist WHERE name='$name'";$result=mysql_query($testquery);if(mysql_num_rows($result)!=0) {die("Recipe has already been entered");}
$query="INSERT INTO recipelist ( name, author, difficulty, preptime, cooktime, ingredients, directions, servingsize, description, dish_app, dish_side, dish_main, dish_des, dish_sn, dish_bev, ing_beef, ing_chx, ing_pork, ing_fish, ing_veg, ing_dairy, is_kosher, has_nuts, entrytime) VALUES ( '$name',  '$author' , '$difficulty' , '$preptime' , '$cooktime', '$ingredients', '$directions', '$servingsize' , '$description' , '$dish_app' , '$dish_side' ,  '$dish_main' , '$dish_des' , '$dish_sn' , '$dish_bev' , '$ing_beef' , '$ing_chx' , '$ing_pork' , '$ing_fish' , '$ing_veg' , '$ing_dairy' , '$is_kosher' , '$has_nuts' , NOW());";}
mysql_query($query);

echo '<br>
Query Updated.  <a href="recipe.php">Return to Index</a>';?><table><tr><td align="right" valign="top"><b>Title:</b></td><td><input type="text" name="name" size="60" value="<?php echo $name;?>"></td></tr><tr><td align="right" valign="top"><b>Author:</b></td><td><input type="text" name="name" size="30" value="<?php echo $author;?>"></td></tr><tr><td align="right" valign="top"><b>Description:</b></td><td><textarea rows="6" name="description" cols="45"><?php echo $description;?></textarea></td></tr><tr><td align="right" valign="top"><b>Ingredients:</b></td><td><textarea rows="10" name="ingredients" cols="60"><?php echo $ingredients;?></textarea></td></tr><tr><td align="right" valign="top"><b>Directions:</b></td><td><textarea rows="4" name="directions" cols="40"><?php echo $directions;?></textarea></td></tr><tr><td align="right" valign="top"><b>Prep Time:</b></td><td><textarea rows="4" name="preptime" cols="40"><?php echo $preptime;?></textarea></td></tr><tr><td align="right" valign="top"><b>Cook Time:</b></td><td><textarea rows="4" name="cooktime" cols="40"><?php echo $cooktime;?></textarea></td></tr><tr><td align="right" valign="top"><b>Servings:</b></td><td><textarea rows="3" name="servingsize" cols="35"><?php echo $servingsize;?></textarea></td></tr></table>  </tr>  <tr>    <td width="50%" valign="top"><p align="center"><B>Type of Dish</B></p>        <p><input type="checkbox" name="dish_app" <?php if ($dish_app==1) {echo "CHECKED";} ?>>Appetizer<br>
<input type="checkbox" name="dish_side" <?php if ($dish_side==1) {echo "CHECKED";} ?>>Side Dishes<br>
<input type="checkbox" name="dish_main" <?php if ($dish_main==1) {echo "CHECKED";} ?>>Main Dishes<br>
<input type="checkbox" name="dish_des" <?php if ($dish_des==1) {echo "CHECKED";} ?>>Dessert<br>
<input type="checkbox" name="dish_sn" <?php if ($dish_sn==1) {echo "CHECKED";} ?>>Snacks<br>
<input type="checkbox" name="dish_bev" <?php if ($dish_bev==1) {echo "CHECKED";} ?>>Beverages</p>                <td width=50%" valign="top"><p align="center"><B>Ingredient Info</B></p><P><input type="checkbox" name="ing_beef" <?php if ($ing_beef==1) {echo "CHECKED";} ?>>Beef<br>
<input type="checkbox" name="ing_chx" <?php if ($ing_chx==1) {echo "CHECKED";} ?>>Chicken<br>
<input type="checkbox" name="ing_pork" <?php if ($ing_pork==1) {echo "CHECKED";} ?>>Pork<br>
<input type="checkbox" name="ing_fish" <?php if ($ing_fish==1) {echo "CHECKED";} ?>>Fish<br>
<input type="checkbox" name="ing_veg" <?php if ($ing_veg==1) {echo "CHECKED";} ?>>Vegetarian<br>
<input type="checkbox" name="ing_dairy" <?php if ($ing_dairy==1) {echo "CHECKED";} ?>>Dairy<br>
<input type="checkbox" name="is_kosher" <?php if ($is_kosher==1) {echo "CHECKED";} ?>>Kosher<br>
<input type="checkbox" name="has_nuts" <?php if ($has_nuts==1) {echo "CHECKED";} ?>>Nuts<br>
        </p></td>  </tr></table></body></html>
