<?php  $connect = mysqli_connect('127.0.0.1', 'root', '', '4648store');
	$kek = mysqli_query($connect, "DELETE FROM store WHERE id ='" . $_GET['id'] . "'");
	header('Location: http://bratannetrogaimoyapapka/admin.php');
 ?>