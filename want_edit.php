<?php

require_once('dbconnect.php');

// editボタンを押した時にwantのデータが更新される
if(!empty($_POST)){
    // var_dump($_POST['id']);
    // die();

    $update_sql = "UPDATE `wants` SET `name` = ?,`price` = ?,`detail` = ? WHERE `id` = ? ";
    $data = array($_POST['name'],$_POST['price'],$_POST['detail'],$_POST['id']);
    $stmt = $dbh->prepare($update_sql);
    $stmt->execute($data);

    // var_dump($_POST['id']);
    // die();

    header('Location:want.php');
    exit();
}

