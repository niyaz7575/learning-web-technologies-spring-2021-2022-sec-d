<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Booking Room</title>
</head>
<body  background= "../model/white.jpg" style= "background-repeat: no-repeat;
    background-size: cover;" >

 <font size="4"; color="white">	

	<center>
		<h1 style=" color: white; text-align:centre;">For Only VIP</h1>
	</center>
	<?php include "../controller/Date.php" ?>

	<?php echo "<br>"; ?>

	<?php
echo " ". $_SESSION['user'];
?>
<form action="../controller/SPreq.php" method="POST">

<center>
	

	<table border="4">

		<tr>
			<td>
				<img src="../model/vip.jpg" width="500" height="280">
			</td>
			

		</tr>
		
    </table>
    <label for="username">Username:</label>
<input style="color: blue; font-size : 10px; width: 90px; height: 20px;" type="text" name="username" id="username">
<br>
<br>
	
		<label for="room"></label>
<textarea name="room" id="room" rows="6" cols="50" placeholder="What type of room do you want!! Please type here"></textarea>
<br>

		


		
	
	</center>
	<br>
	<center>
		<input style="font-family: 'Cooper Black'; color: black; font-size : 15px; width: 200px; height: 30px;" type="submit" value="Send VIP Request">
		<input style="font-family: 'Cooper Black'; color: black; font-size : 15px; width: 80px; height: 30px;" onclick="history.go(-1);" type="button" value="Back">


	</center>
	
</form>
</font>
	</body>
</html>