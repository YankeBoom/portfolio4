<?php
	if (isset($_POST['input']))
	{	
	try
	{
	if (!empty($_POST['login']) and !empty($_POST['password']))
	{
		$login = $_POST['login'];
		$password = $_POST['password'];
		$conn = new PDO('mysql:host=localhost;dbname=student_KoDanilS20','KoDanilS20','GnMrSRic');
		$query = 'SELECT*FROM `userss` WHERE login ="'.$login.'" AND password ="'.$password.'"';
		$result = $conn->query($query);

	foreach ($result as $value)
	{
		$_SESSION['id'] = $value['id'];
		$_SESSION['login'] = $value['login'];
		echo $login;
	};
		$conn = NULL;

		header('Location: index.html');
	}
}

	catch(PDOException $e)
	{
		print 'ERROR > '.$e->getMessage();
		die();
		echo "Проверка";
	}
}
?>