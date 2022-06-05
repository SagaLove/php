<?php 

require 'config.php';

$dbh->prepare("UPDATE content SET title = ?, content = ? WHERE ID = ".$_POST['ID'])->execute([$_POST['title'], $_POST['content']]);

header('location: /bdd/');


