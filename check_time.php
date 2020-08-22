<?php

# https://www.php.net/manual/ja/class.datetime.php

$st_t = new DateTime('2020-08-21T23:59');
echo $st_t->format('Y-m-d H:i:s.u');
echo "\n";

$check_t = new DateTime('2020-08-21T23:59:30');
echo $check_t->format('Y-m-d H:i:s.u');
echo "\n";


$res = ($st_t < $check_t);
if ($res){
  echo "true";
}
else{
  echo "false";
}
echo "\n";



