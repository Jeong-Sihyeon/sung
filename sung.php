<?

$name = $_POST['a'];
$kor = $_POST['b'];
$eng= $_POST['c'];
$math = $_POST['d'];
$sum = $kor + $eng + $math;
$avg = $sum/3;

if($avg >= 90)
  $gra='A';
else if($avg >= 80)
  $gra= "B";
else if($avg >= 70)
  $gra= "C";
else if($avg >= 60)
   $gra= "D";
else 
   $gra= "F";

echo"<font size=7 color=pink>";
echo"<table border=1>
<tr>
<th>번호</th>
<th>이름</th>
<th>국어</th>
<th>영어</th>
<th>수학</th>
<th>합계</th>
<th>평균</th>
<th>학점</th>
</tr>
<tr>
<td>1</td>
<td>$name</td>
<td>$kor</td>
<td>$eng</td>
<td>$math</td>
<td>$sum</td>
<td>$avg</td>
<td>$gra</td>
</tr>
</table>";


echo"</font>";

?>