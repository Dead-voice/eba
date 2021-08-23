<?php 
include ('db.php');

$login = $_POST['login'];
$password = $_POST['password'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND 	`password` = '$password'");  // выводим записи из базы    


if (mysqli_num_rows($count) == 0) { //проверка есть ли записи в запросе
	echo "Вы не зарегестрированы!";
} else {
	echo "Привет, " . $login . '!';
}



?>

