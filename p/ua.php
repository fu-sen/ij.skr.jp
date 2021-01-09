<?php

header('Content-Type: text/plain');

print "'User Agent:{$_SERVER['HTTP_USER_AGENT']}\n";
print "'Referer:{$_SERVER['HTTP_REFERER']}\n";
