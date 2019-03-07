<?php

  $db_name = getenv(DB_NAME);
  $host_name = getenv(HOST_NAME);
  $user = getenv(USER_NAME);
  $password = getenv(PASSWORD);

  $dsn = 'mysql:dbname='.$db_name.';host=' . $host_name;
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dbh->query('SET NAMES utf8');

  // mysql://(--username--):(--password--)@(--hostname--)/(--dbname--)?
