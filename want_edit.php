<?php

require_once('dbconnect.php');

// editボタンを押した時にwantのデータが更新される
if(!empty($_POST)){
    // var_dump($_POST['id']);
    // die();

    $friend_id = $_POST['friend_id'];
    $update_sql = "UPDATE `presents` SET `name` = ?,`date` = ?,`detail` = ? WHERE `id` = ? ";
    $data = array($_POST['name'],$_POST['date'],$_POST['detail'],$_POST['id']);
    $stmt = $dbh->prepare($update_sql);
    $stmt->execute($data);

    // var_dump($_POST['id']);
    // die();

    header('Location:list.php?id='.$friend_id);
    exit();
}

