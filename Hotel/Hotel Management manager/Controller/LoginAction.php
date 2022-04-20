
<?php
include('../Model/db.php');


session_start();
 
 
if (isset($_POST['submit'])){

	$username = $_POST['user'];
	$password = $_POST['password'];
	$connection = new db();
        $conobj=$connection->OpenCon();
		$userQuery=$connection->CheckUser($conobj,"registration",$username,$password);
        header ('location: ../views/home.php');
		if ($userQuery->num_rows > 0) {
		 
		  $_SESSION['user']=$_POST['user'];
		  $_SESSION['password']=$_POST['password'];
		   
		   }
		 else {
		$error = "Username or Password is invalid";
		}
		$connection->CloseCon($conobj);
		
 
}

else{
	echo "username or password is incorrect";
	}



 

?>
<br><br>




<br><br>
<form action="Logout.php" method="POST" >
	<input type="submit" value="Log out">
</form>
</body>
</html>