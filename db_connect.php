<?php

// einstellungen

$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_password = getenv('DB_PASSWORD');
$db_name = getenv('DB_NAME');

// stellt datenbank verbindung her

$db = mysqli_connect("$db_host", "$db_user", "$db_password", "$db_name");
