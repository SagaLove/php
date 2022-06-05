<?php 

require 'config.php';

$dbh->prepare("INSERT INTO content SET title = ?, content = ?")->execute([ $_POST['title'], $_POST['content']]);


header('location: /bdd/');


