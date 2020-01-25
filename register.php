<?php
require "header.php";
require "conn.php";
?>
<div style="width:30%; height:auto; background-color:#99F; margin:auto; font-family:arial; font-size:16px">
<b>Register</b>
<form action="#" method="post" style="text-align:right; padding-right:100px">
<label>Username</label> <input type="text" name="username"/><br/> <br/>
<label>Password</label> <input type="password" name="pwd"/><br/> <br/>
<label>Repeat Password</label> <input type="password" name="pwd1"/><br/> <br/>
<label>Email</label> <input type="text" name="email"/><br/> <br/>
<label>Age</label> <input type="number" name="age"/><br/> <br/>
<input type="submit" value="Register"/><br/><br/>

<?php
if(isset($_POST["username"]) && !empty($_POST["username"]) AND
	isset($_POST["pwd"]) && !empty($_POST["pwd"]) AND
	isset($_POST["pwd1"]) && !empty($_POST["pwd1"]) AND
	isset($_POST["email"]) && !empty($_POST["email"]) AND
	isset($_POST["age"]) && !empty($_POST["age"]))
	{
		$username=$_POST["username"];
		$pwd=$_POST["pwd"];
		$pwd1=$_POST["pwd1"];
		$email=$_POST["email"];
		$age=$_POST["age"];
		
		if($pwd!=$pwd1)
			{
				die('Password does not amtched');
			}
			else
			{
				mysqli_query($conn,"insert into users(username,password,email,age) values ('$username','$pwd','$email','$age')");
			}
	}
?>
</form>
<br/>
</div>
