<?php 


$connection = mysqli_connect( //подключение к базе данных
		$config['db']['server'],
		$config['db']['username'],
		$config['db']['password'],
		$config['db']['name']
);

if ($connection == false) {
	echo 'Не удалось подключиться к базе данных!<br>';
	echo mysqli_connect_error();
	exit();
} 