<?php 

	if(!isset($_GET['ID'])) exit('nope');

	require 'admin/config.php';

	$res =  $dbh->query("SELECT title, content FROM content WHERE ID = ".$_GET['ID'])->fetch();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Mettre à jour</h1>
	<form method="POST" action="admin/update.php">
		<input type="text" name="title" value="<?php echo $res['title'] ?>">
		<br><br>
		<textarea name="content" id="" cols="30" rows="10"><?php echo $res['content'] ?></textarea>
		<br>
		<input type="hidden" name="ID" value="<?php echo $_GET['ID'] ?>">
	
		<br>
		<button>Mettre à jour</button>
	</form>
	
</body>
</html>