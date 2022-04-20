<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body background= "../model/hotel.jpg" style="
    background-repeat: no-repeat;
    background-size: cover;">



 	<?php include "../controller/Date.php" ?>

	<?php echo "<br>"; ?>
<font size="5">
<center>
<?php
echo "Welcome ". $_SESSION['user'];
?>
</center>
</font>


	<br>
	


 <fieldset >

 
<center>
<button onclick="window.location.href='RMeeting.php'" style="font-family: 'Cormorant Garamond'; font-size: 20px; width: 200px; height: 40px;  color:white;  background:black; border-color:black;border-radius: 50%">Booking Room</button>


<button onclick="window.location.href='SVPreq.php'" style="font-family: 'Cormorant Garamond'; font-size: 20px; width: 200px; height: 40px;  color:white;  background:black; border-color:black;border-radius: 50%">Special Request(VIP)</button>
<br>
<br>

<button onclick="window.location.href='Payment.html'" style="font-family: 'Cormorant Garamond'; font-size: 20px; width: 200px; height: 40px;  color:white;  background:black; border-color:black;border-radius: 50%">Payment Method</button>
<br>
<br>

<button onclick="window.location.href='Dinning.php'" style="font-family: 'Cormorant Garamond'; font-size: 20px; width: 200px; height: 40px;  color:white;  background:black; border-color:black;border-radius: 50%">View Food Menu</button>
<br>
<br>



<button onclick="window.location.href='Complain.html'" style="font-family: 'Cormorant Garamond'; font-size: 20px; width: 200px; height: 40px;  color:white;  background:black; border-color:black;border-radius: 50%">Complain</button>

<br>
<br>




<button onclick="window.location.href='Discountcode.php'" style="font-family: 'Cormorant Garamond'; font-size: 20px; width: 200px; height: 40px;  color:white;  background:black; border-color:black;border-radius: 50%">Use Discount Code</button>
<br>
<br>


<button onclick="window.location.href='../controller/Logout.php'" style="font-family: 'Cormorant Garamonds'; font-size: 20px; width: 200px; height: 40px;  color:white;  background:black; border-color:black; border-radius: 50%;">Log Out</button>
<br>
<br>

</center>
</fieldset></b>



</body>
</html>