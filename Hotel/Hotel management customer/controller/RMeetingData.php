
<?php          
 $Username = $_POST['username'];
 $BookingDate = $_POST['BD'];
 $MeetingDate = $_POST['CD'];
 $RoomNo = $_POST['booking'];

        

                   $details = array('Username'=>$Username, 'BookingDate' => $BookingDate, 'MeetingDate' => $MeetingDate, 'RoomNo' => $RoomNo);
$details_encoded = json_encode($details);

 $filepath = "../assets/meeting.txt";

 $reg_file = fopen($filepath, "a");
fwrite($reg_file, $details_encoded . "\r\n ");
fclose($reg_file);

header("Location:../views/ RHome.php ");
exit();






    ?>
    