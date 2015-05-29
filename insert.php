<?php
//connect to database
$conn=mysql_connect("localhost","root","");
echo "Connected to MySQL";
//select database
$db=mysql_select_db('nnm',$conn);
//execute query
//$query1="Insert into nnm1 values ('$_POST[email]','$_POST[firstName]','$_POST['lastName']','$_POST['userName']','$_POST['password']')";
$query1="Insert into nnm1 values ('$_POST[userName]','$_POST[firstName]','$_POST[lastName]','$_POST[email]','$_POST[password]')";
$result=mysql_query($query1,$conn);
 if(!$result)
        echo "Failed".mysql_error();
    else
        echo "Successful!";
		echo"<br>";
echo"One record inserted";
//header("Location: insert.php");
//close connection
mysql_close($conn);
?>