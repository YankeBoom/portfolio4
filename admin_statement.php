<?php
	echo "<link rel='stylesheet' href=/main.css>";
{
		try {
			$conn = new PDO('mysql:host=localhost;dbname=student_KoDanilS20','KoDanilS20','GnMrSRic');


			$query = 'SELECT * FROM `statement` WHERE `id`';

			$result = $conn->query($query);

			echo '<h2 class="page-title popup__title">Посмотреть заявление';

			echo '<table class="form__input" border="1">';
				foreach ($result as $data) {
					try{
					$conn = new PDO('mysql:host=localhost;dbname=student_KoDanilS20','KoDanilS20','GnMrSRic');

						$query = 'SELECT * FROM `statement` WHERE `id`';

						$gruppa = $conn->query($query);

						$conn = NULL;
					} catch (PDOException $e) {
						print 'ERROR> '.$e->getMessage();
						die();	
					}

					echo '</td></tr>
					<tr><td><h2>Заявление '.$data['id'].'</h2></td></tr>
					<tr><td>Регистрацоный номер автомобиля :</td><td>'.$data['car_number'].'</td></tr>
					<td>Описание нарушения: </td><td>'.$data['description'].'</td>';
				}

			echo '</table></h2>';
			echo '<a class="btn form__btn" href="statement.html">Назад</a>';

			$conn = NULL;
		} catch(PDOException $e) {
			print 'ERROR: >' .$e->getMessage();
			die();
		}
	}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:900%7CRoboto:300&display=swap&subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">

  <meta name="description" content="Нарушениям.Нет">

  <link rel="icon" type="image/png" href="img/favicon/favicon.png">

  <title>Нарушениям.Нет</title>
</head>
<body>
</body>
</html>