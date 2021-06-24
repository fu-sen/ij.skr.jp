<?php

/*
IchigoJam web での動作は次の 1 行が必要です。
mj.15j.run は .htaccess でこれを入れています。
header("Access-Control-Allow-Origin: *");
*/

header('Content-Type: text/plain');

print "'User Agent:{$_SERVER['HTTP_USER_AGENT']}\n";
print "'Referer:{$_SERVER['HTTP_REFERER']}\n";
