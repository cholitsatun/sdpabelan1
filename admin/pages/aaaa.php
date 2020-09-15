<?php
$user = "admin";
$hash = password_hash($user, PASSWORD_DEFAULT);
echo "$user<br>";
echo "$hash";
?>