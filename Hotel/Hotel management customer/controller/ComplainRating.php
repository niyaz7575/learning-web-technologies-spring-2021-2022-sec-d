<?php



$Complain = $_POST['complain'];
$Rating = $_POST['rating'];



 
$details = array('Complain' => $Complain, 'Rating' => $Rating);
$details_encoded = json_encode($details);

 $filepath = "../assets/feedback.txt";

 $reg_file = fopen($filepath, "a");
fwrite($reg_file, $details_encoded . "\r\n ");
fclose($reg_file);

header("Location: RHome.php ");
exit();


?>