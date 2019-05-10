<meta charset="utf-8">
<form method="POST" action="admin_update.php">
	<?php echo '<input type="hidden" name="id" value="'. $_POST['id'] . '">' ?>
	<?php echo '<input type="" name="title" value="'. $_POST['title'] . '">' ?>
	<?php echo '<input type="" name="cost" value="'. $_POST['cost'] . '">' ?>
	<?php echo '<input type="" name="img" value="'. $_POST['img'] . '">' ?>
	<button>Сохранить</button>
</form>
