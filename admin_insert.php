<?php $connect = mysqli_connect('127.0.0.1', 'root', '', '4648store');
	$lol = mysqli_query($connect, "INSERT INTO store (title, cost, img) VALUES ('" . $_POST['title'] . "', '" . $_POST['cost'] . "', '" . $_FILES['img']['name'] . "') ");
	move_uploaded_file($tmp_name, "images/".$file_name);
	header('Location: http://bratannetrogaimoyapapka/admin.php');

?>
  