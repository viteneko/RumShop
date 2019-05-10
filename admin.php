<!DOCTYPE html>
<html> 
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background: #B0C4DE">
	<div style="background-color: #778899; height: 50px; border: none; font-size: 30px; text-align: center;">
		<a href="index.php" style=" color: white;">Главная</a>
	</div>
	<div style="background-color: #778899; height: 50px" class="pl-5 pt-2 mt-4">
	<div class=" ml-5 pl-5">
		<form method="POST" action="admin_insert.php" enctype="multipart/form-data">
			<?php echo '<input type="hidden" name="id" value="' . $row['id'] . '">'?>
			<?php echo '<input type="" name="title" placeholder="название">'?>
			<?php echo '<input type="" name="cost" placeholder="стоимость">'?>
			<?php echo '<input type="file" name="img" placeholder="ссылка на картинку">'?>
			<button class="mt-2" style="background: #191970; border-radius: 10px; border: none; width: 100px; color: white">Добавить</button>
		</form>
	</div>
</div>
	<div class="row pl-5">
	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', '4648store');
	$query = mysqli_query($connect, 'SELECT * FROM store ORDER BY cost ASC');
	for($i=0; $i < $query->num_rows; $i++){

	 $row = $query->fetch_assoc(); 
	 ?>
	 	 <div class="col-2 mt-4 ml-4">
			<a href=""><?php echo '<img style = "width:200px; height:300px; border-radius: 15px; border: solid #191970 2px" src ="' . $row['img'] . '">'; ?></a>
			<h2> <a href="" style=" color: #191970;"><?php echo $row['title']; ?></a></h2>
			<p><a href="" style=" color: #191970;"><?php echo $row['cost']; ?></a></p>
			<form method="GET" action="admin_delete.php">
				<?php echo '<input name="id" value="' . $row['id'] . '" style="display:none">'; ?>
				<button class="mt-2" style="background: #191970; height: 40px; border-radius: 10px; border: none; width: 150px; color: white">Удалить</button>
			</form>
			<form method="POST" action="admin_change.php">
				<?php echo '<input type="hidden" name="id" value="' . $row['id'] . '">'?>
				<?php echo '<input type="hidden" name="title" value="' . $row['title'] . '">'?>
				<?php echo '<input type="hidden" name="cost" value="' . $row['cost'] . '">'?>
				<?php echo '<input type="hidden" name="img" value="' . $row['img'] . '">'?>
				<button class="mt-2" style="background: #191970; height: 40px; border-radius: 10px; border: none; width: 150px; color: white">Редактировать</button>
			</form>
	</div>

			<?php 
			}
			 ?>
			</div>
</body>
</html>