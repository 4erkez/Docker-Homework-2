<?php
session_start();

$conn = mysqli_connect(
  '192.168.0.20',
  'root',
  'password123',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
