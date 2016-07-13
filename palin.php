<?php
$stdin = fopen("php://stdin", "r");
$input = fgets($stdin);
$count = $input;
for($i=1;$i<$input;$i++){
	$in = fgets($stdin);
	palin($in);
}
fclose($stdin);
function palin($str){
//$str = "abdbca";
$result = "NO";
for($i=0;$i<strlen($str);$i++){
	//echo $str[$i]."";
	$newstr = "";

	for($j=0;$j<strlen($str);$j++){
		if($j!=$i){
			$newstr .= $str[$j];
		}
	}
	//echo $newstr." <br/>";
	if($newstr == strrev($newstr)){
		$result = "YES";
	}
}
echo $result."\r\n";
}
?>
