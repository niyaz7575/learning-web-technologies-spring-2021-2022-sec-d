<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Booking Room</title>
</head>
<body background="../model/bookingroom.png"style="
    background-repeat: no-repeat;
    background-size: cover;" >

 <font >	

	<center>
		<h1 style=" color: orangered; text-align:centre;">Please select the Meeting time</h1>
	</center>
	<?php include "../controller/date.php" ?>

	<?php echo "<br>"; ?>

	<?php
echo " ". $_SESSION['user'];
?>

<center>
	
	<br>
     
	<label for="username" style="
    color: yellow;
">Username: </label>
<input type="text" id="username" name="username">
<br><br>

	<label for="BD"style="
    color: yellow;
">Booking Date: </label>
<input type="date" id="BD" name="BD"
value="2021-01-01">

 <br>
 <br>
	<label for="CD"style="
    color: yellow;
">Meeting Date: </label>
<input type="date" id="CD" name="CD"
value="2021-01-01">
	<table border="4">

		
		
		<tr style=" font-size : 25px;">
			<td style="
    color: white;
">9:00 AM</td>
			<td style="
    color: white;
">3:00 PM</td>
			<td style="
    color: white;
">9:00 PM</td>
			

		</tr>

		
		<tr style="font-family: 'Cooper Black';  font-size : 20px;">
			<td> <input type="radio"  name="booking" id="1stroom" value="1st room">
				<label for="1stroom"style="
    color: blue;
">1st meeting room</label>

			</td>
			<td>
			<input type="radio"  name="booking" id="2ndroom" value="2nd room">
				<label for="2ndroom"style="
    color: blue;
">2nd meeting room</label>
			</td>
			<td>
				<input type="radio"  name="booking" id="3rdroom" value="3rd room">
				<label for="3rdroom"style="
    color: blue;
">3rd meeting room</label>
			</td>
			

			
			

		</tr>


		
	</table>
	</center>
	<br>
	<center>
		<input style="font-family: 'Cooper Black'; color: black; font-size : 15px; width: 200px; height: 30px;" type="submit" value="Send Request">
		<input style="font-family: 'Cooper Black'; color: black; font-size : 15px; width: 80px; height: 30px;" onclick="history.go(-1);" type="button" value="Back">


	</center>
	
</form>
</font>
	</body>
</html>