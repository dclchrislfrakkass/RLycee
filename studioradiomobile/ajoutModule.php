<?php

echo $_POST['valid1'];
echo $_POST['valid2'];
echo $_POST['valid3'];
$table = $_POST['valid1'];
$data = var_dump($_POST['valid2']);
$format = $_POST['valid3'];


$wpdb->insert($table, $data, $format);




?>