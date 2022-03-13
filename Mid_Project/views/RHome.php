<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body background= "../model/main.jpg"style="
    background-repeat: no-repeat;
    background-size: cover;">

 	<?php include "../controller/Date.php" ?>

	<?php echo "<br>"; ?>
<font size="5">
<center  style="
    color: yellow;
">
<?php
echo "Welcome ". $_SESSION['user'];
echo"<br>";
echo $_SESSION['firstname'];
echo $_SESSION['lastname'];
echo "<br>";
echo $_SESSION['email'];
?>
</center>
</font>


	<br>
	


 <fieldset >

 
<center>
<button onclick="window.location.href='Dinning.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">DinningManagement</button>
<br>
<br>

<button onclick="window.location.href='Cleaning.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Room Cleaning</button>
<br>
<br>

<button onclick="window.location.href='Service.html'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Room Service</button>
<br>
<br>

<button onclick="window.location.href='Checkin.html'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Check In</button>
<br>
<br>

<button onclick="window.location.href='Checkout.html'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Check Out</button>

<br>
<br>

<button onclick="window.location.href='Payment.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Payment History</button>
<br>
<br>

<button onclick="window.location.href='Complain.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Complain problem</button>
<br>
<br>

<button onclick="window.location.href='Customer.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Customer Details</button>
<br>
<br>

<button onclick="window.location.href='Discountcode.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 50px;  color:black;  background:orangered; border-color:black;">Verify discount code</button>
<br>
<br>

<button onclick="window.location.href='Bookingmeeting.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Booking meetings</button>
<br>
<br>

<button onclick="window.location.href='../controller/Logout.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Log Out</button>
<br>
<br>

</center>
</fieldset></b>



</body>
</html>