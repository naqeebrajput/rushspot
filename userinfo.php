<?php
$id=$_POST['id'];
$user =$_POST['user'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$comments =$_POST['comments'];
$con=mysqli_connect("localhost",root);

mysqli_select_db("$con","user");
$q= "insert into userinfo(id,user,email,mobile,comments) values ('$id','$user','$email','$mobile','$comments')"; 
mysqli_query('$con','$q');
if($con)
{
echo "Connection Successful";
}
Else
{
echo "Failed";

}
header("location:index.html");
?>