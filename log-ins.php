<?php
	session_start();

	if (isset($_POST['add'])) {
		try {
			$conn = new PDO('mysql:host=localhost;dbname=student_KoDanilS20','KoDanilS20','GnMrSRic');
			$query = 'SELECT * FROM `userss` WHERE `user_login` = "'.$_POST['login'].'" && `user_password` = "'.$_POST['password'].'"';
			$result = $conn->query($query);
			$rows = $result->rowCount();
								
			if ($rows == 1 && $_POST['login'] == 'admin') {
				$_SESSION['login'] = $_POST['login'];
				$conn = NULL;
				header('Location: input.php');
			} else {
				$_SESSION['login'] = $_POST['login'];
				$conn = NULL;
				header('Location: statement.html');
			}

			} catch (PDOException $e) {
				print 'ERROR > '.$e->getMessage();
					die();
			}
	}
?>