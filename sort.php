<?php 

$arr = array('aarav'=>'4.1','shekhar'=>'95','tejas'=>'9','anurag'=>'10');

arsort($arr);
foreach ($arr as $key => $value) {
	echo $key . '=>' . $value;
}

?>