$per_col = 10; //จำนวนแสดงต่อ 1 คอลัมน์
$cols = ceil($row_count / per_col);

echo '<table>';
echo '<tr>'; // 1 แถวเท่านั้น (ตารางหลัก)
for($i=0; $i < $cols; $i++)
{
echo '<td>';
$x = 0;
echo '<table>';
while($x < $per_col)
{
if($row = mysql_fetch_array($query))
{
echo '<tr><td>$row['topic'].$etc</td></tr>';
}
// etc;
}// while
echo '</table>';
echo '</td>';
// end col
}// for