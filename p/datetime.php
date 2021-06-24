<?php

/*
IchigoJam web での動作は次の 1 行が必要です。
mj.15j.run は .htaccess でこれを入れています。
header('Access-Control-Allow-Origin: *');
*/

header('Content-Type: text/plain');

date_default_timezone_set('Asia/Tokyo');

print date("Y")."\n"; // 年
print date("n")."\n"; // 月
print date("j")."\n"; // 日
print date("G")."\n"; // 時
print date("i")."\n"; // 分
