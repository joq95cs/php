<?php

$db_name = 'id17243276_school';
$db_server = 'localhost';
$db_user = 'id17243276_root';
$db_pass = 'Fax?V#o*n2Em)GeQ';

$db = new PDO("mysql:host={$db_server};dbname={$db_name};charset=utf8", $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);