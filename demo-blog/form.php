<?php 

include ('db.php');


?>
	<form method="post" action="handle.php">
		 	<input type="text" placeholder="Ваш логин">
		 	<input type="text" placeholder="Ваш пароль">
		 	<hr>
			<input type="submit" value="Отправить">
 	</form>


<?php  
//$result = mysqli_query($connection, "SELECT * FROM `articles_categories`");

/*
$r1 = mysqli_fetch_assoc($result);
$r2 = mysqli_fetch_assoc($result);
$r3 = mysqli_fetch_assoc($result);
$r4 = mysqli_fetch_assoc($result);
print_r($r4);
*/
/*
while (($record = mysqli_fetch_assoc($result))) {
		print_r($record);
		echo '<hr>';
}
*/

//echo 'Записей найдено: ' . mysqli_num_rows($result);
/*
if (mysqli_num_rows($result) == 0 ) {
	echo 'Категорий не найдено!';
} else {
	?> 
		<ul>
				<?php 
						while ($category = mysqli_fetch_assoc($result)) {
							$articles_count = mysqli_query($connection, "SELECT COUNT(`id`) AS `total_count` 
								FROM `articles` WHERE `categorie_id` = " . $category['id']);
							$articles_count_result = mysqli_fetch_assoc($articles_count);
							echo '<li>' . $category['title'] . ' ('. $articles_count_result['total_count'] .') </li>';
						}
				 ?>
		</ul>
-->
<?php
}
 ?>
*/	


 /*<?php 
 mysqli_close($connection);
  ?>
  */