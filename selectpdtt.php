<?php
//connect to database
$conn=mysql_connect("localhost","root","");
//$sr=mysql_real_escape_string($_POST['search']);	
$sr=(isset($_POST['srch'])) ? $_POST['srch'] : '';
//select database
$db=mysql_select_db("wtproj",$conn);
//execute query

$query1="select * from wtt where Name like '$sr' or Name like '%$sr' or Name like '%$sr%' ";
$result=mysql_query($query1,$conn);
echo"<table bgcolor='gray' border='3'>";
while($row=mysql_fetch_array($result))
{
//header('Content-type:image/jpeg');
echo"<tr>";
echo"<td>".$row['Name']."</td>";
echo"<td>".$row['Description']."</td>";
echo "<td>";?> <img src="<?php  echo $row["Photo"]; ?>" height='300' width='300'> <?php echo "</td>";
//echo"<img src='images/PRODUCT PHOTOS/c1.jpg".$row['Photo']."' width='300' height='300'/>";
//echo"<td>".$row['image']."</td>";
echo"</tr>";
}
echo"</table>";
//close connection
mysql_close($conn);
?>