<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background: #B0C4DE">
	<div style="background-color: #778899; height: 50px; border: none; font-size: 30px; text-align: center;">
		<a href="admin.php" style=" color: white;"> Админ-панель</a>
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
			<button  class="mt-2" style="background: #191970; border-radius: 10px; border: none; width: 150px; color: white">В корзину</button>
		</div>
			<?php 
			}
			 ?>
	</div>
</body>
</html>