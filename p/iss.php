<?php

/*
IchigoJam web での動作は次の 1 行が必要です。
mj.15j.run は .htaccess でこれを入れています。
header('Access-Control-Allow-Origin: *');
*/

$jsonapi = "http://api.open-notify.org/iss-now.json";

$json = file_get_contents($jsonapi); 

$array = json_decode ( $json, true);

if ( $array['message'] != "success" )
{
   $error = 1;
}
else
{
   $error = 0;

   $time =  $array['timestamp'];
   $latitude = intval( ( $array['iss_position']['latitude'] * -1 + 90 ) / 180 * 16 ) + 4;
   $longitude = intval( ( $array['iss_position']['longitude'] + 180 ) / 360 * 32 );
}

header('Content-Type: text/plain');

print "{$error}\n";
print "{$longitude}\n";
print "{$latitude}\n";
