<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/plain');

print "'User Agent:{$_SERVER['HTTP_USER_AGENT']}\n";
