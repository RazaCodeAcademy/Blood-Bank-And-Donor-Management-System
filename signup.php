<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sign Up Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/signup.css" />
	<script src="main.js"></script>
</head>
<body>
<?php
session_start();
session_start();
if (!$_SESSION["user1"])
{
	header('location:admin.php');
}
?>
<div class="log">
<img src="Graphicloads-100-Flat-Contact.png" class="ava">
<h1 align="center"> Create a new acount </h1>
<form action="signup.php" method="POST">
<p>First Name</p>
<input type="text" name="first" placeholder="Enter First Name" />
<p>Last Name</p>
<input type="text" name="last" placeholder="Enter Last Name" />
<p>User Name</p>
<input type="text" name="name" placeholder="Enter User Name" />
<p>Password</p>
<input type="password" name="pass" placeholder="Enter Password" />
<input type="submit" name="login" value="Sign Up" /><br> <br>
<Input type="button" value="Go Back" onclick="history.back()"> 
</form>
</div>


</body>
</html>



<?php
if(isset($_POST['login']))
{
$con=mysqli_connect('localhost','root','','bbdms');
$user=$_POST['name'];
$first1=$_POST['first'];
$last1=$_POST['last'];
$pass=$_POST['pass'];
$query="insert into login(user_name,first_name,last_name,password)values('$user','$first1','$last1','$pass')";
$run=mysqli_query($con,$query);
if($run==true)
{
echo "Sign Up Successful";  
}
else
{
echo "Sign Up Does Not Successful Or This User Name Is Already Here!";        
}
}
?>


