<?
	$num1 = $_POST['a'];
	$num2 = $_POST['b'];
	
	$plus = $num1 + $num2;
	
	echo "<font size=7 color=pink>";
	echo "$num1 + $num2 = $plus";
	echo "</font><br>";
	
	$minus = $num1 - $num2;
	echo "<font size=7 color=pink>";
	echo "$num1 - $num2 = $minus";
	echo "</font><br>";

  	$multiply = $num1 * $num2;
	echo "<font size=7 color=pink>";
	echo "$num1 * $num2 = $multiply";
	echo "</font><br>";
	
	$divide = $num1 / $num2;
	echo "<font size=7 color=pink>";
	echo "$num1 / $num2 = $divide";
	echo "</font><br>";

	$remainder = $num1 % $num2;
	echo "<font size=7 color=pink>";
	echo "$num1 % $num2 = $remainder";
	echo "</font><br>";
?>