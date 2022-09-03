<?php
session_start();

$conn = mysqli_connect(
  'mysql_container',
  'root',
  'password123',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
