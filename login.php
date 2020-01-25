<?php
require "header.php";
require "conn.php";
?>
<div style="width:30%; height:auto; background-color:#99F; margin:auto; font-family:arial; font-size:16px">
<b>Login</b>
<form action="" method="post" style="text-align:right; padding-right:100px">
<label>Username</label> <input type="text" name="username"/><br/> <br/>
<label>Password</label> <input type="password" name="pwd"/><br/> <br/>
<input type="submit" value="Login"/><br/><br/>
<?php
if(isset($_POST["username"]) && !empty($_POST["username"]) AND
	isset($_POST["pwd"]) && !empty($_POST["pwd"]))
	{
		$username=$_POST["username"];	
		$pwd=$_POST["pwd"];
		$result=mysqli_query($conn, "select * from users where username='$username'");
		while($row=mysqli_fetch_assoc($result))
		{
			echo "Mr. ". $row["username"]. "<br/><br/>";
			echo "Email is ". $row["email"]. "<br/><br/>";
			echo "Age is ". $row["age"]. "<br/><br/>";
		}
	}
?>
</form><br/>
</div>
