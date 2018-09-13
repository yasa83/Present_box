<?php

//サインインユーザー情報取得
function get_user($dbh, $user_id)
{
    $sql = 'SELECT * FROM `users` WHERE `id` =?';
    $data = array($user_id);
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// ヒットしたレコードの数を取得するSQL home.php
function get_page($dbh,$users_id)
{
    $sql_count = "SELECT COUNT(*) AS `cnt` FROM `friends` WHERE `user_id` = ?";
    $data = array($users_id);
    $stmt_count = $dbh->prepare($sql_count);
    $stmt_count->execute($data);

    return $stmt_count->fetch(PDO::FETCH_ASSOC);
}


?>