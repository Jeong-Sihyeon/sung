<?
$num1 = $_POST['a'];
$num2 = $_POST['b'];
$add = $num1 + $num2;
$minus = $num1 - $num2;
$mul= $num1 * $num2;
$div = $num1 / $num2;
$remo = $num1 % $num2;
$op = $_POST['op'];
echo "<font size=7 color=pink>";

if($op== '+'){
	echo "$num1 + $num2  = ".$add;
}
else if($op == '-'){
	echo "$num1 - $num2  = $minus<br>";
}
else if($op == '*'){
	echo "$num1 * $num2  = $mul<br>";
}
else if($op == '/'){
	echo "$num1 / $num2  = $div<br>";
}
else {
	echo "$num1 % $num2  = $remo<br>";
}

echo "</font><br>";
?>