<?php

namespace php;

class core {

public function data($user){
$uu = strtolower($user);
$dt = hash("Sha1", $uu);
$i = new Config($dt.".yml", CONFIG::YAML, array(
""
));
return $i;
}





}





?>
