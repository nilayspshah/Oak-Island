<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
If(isset($_POST['submit'])!='')
{
If($_POST['email']=='' || $_POST['password']==''|| $_POST['firstName']=='' || $_POST['userName']=='' ||  $_POST['lastName']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into nnm1(email,firstName,lastName,userName,password) values('".$_POST['email']."', '".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['userName']."', '".$_POST['password']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}
header('Location:home.html');
?>