<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', '4648store');
	
	$query = mysqli_query($connect, "UPDATE store SET title='" . $_POST['title'] . "' WHERE id ='" . $_POST['id'] . "'");
	$query = mysqli_query($connect, "UPDATE store SET cost='" . $_POST['cost'] . "' WHERE id ='" . $_POST['id'] . "'");
	$query = mysqli_query($connect, "UPDATE store SET img='" . $_POST['img'] . "' WHERE id ='" . $_POST['id'] . "'");
	header('Location: http://bratannetrogaimoyapapka/admin.php');
?>