<?php

require_once('dbconnect.php');

$feed_id = $_GET['id'];


$sql = 'DELETE FROM `wants` WHERE `id` = ?';
$data = array($feed_id);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

header('Location: want.php');
exit();

?>