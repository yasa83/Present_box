<?php

require_once('dbconnect.php');

$feed_id = $_GET['id'];

$sql = 'DELETE FROM `presents` WHERE `presents`.`id` = ?';
$data = array($feed_id);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

header('Location: timeline.php');
exit();

?>