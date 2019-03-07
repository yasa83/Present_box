<?php
    $dsn = 'mysql://b8d29be4df14ce:31879917@us-cdbr-iron-east-03.cleardb.net/heroku_09e14818624d15f?reconnect=true';
    $user = 'b8d29be4df14ce';
    $password = '31879917';
    $dbh = new PDO($dsn, $user, $password);
    // SQL文にエラーがあった際、画面にエラーを出力する設定
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->query('SET NAMES utf8');
?>
