<?php
	if (isset($_POST['statement']))
	{
		try
		{
			$conn = new PDO('mysql:host=localhost;dbname=student_KoDanilS20','KoDanilS20','GnMrSRic');
			$query = 'INSERT INTO `statement`(car_number,description) VALUES (:car_number,:description)';
			$stmt = $conn->prepare($query);
			$stmt -> bindParam(':car_number',$_POST['car_number']);
			$stmt -> bindParam(':description',$_POST['description']);
			$stmt -> execute();
			$conn = NULL;

			header('Location: statement.html');
		}
		catch (PDOExceptoion $e)
		{
		print'ERROR > '.$e->getMessage();
		die();
		}
	}
?>