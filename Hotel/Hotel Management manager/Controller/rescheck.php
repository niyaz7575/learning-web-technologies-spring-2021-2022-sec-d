<?php 
	//session_start();
	include('../Model/db.php');


	if(isset($_POST['submit'])){
        $fname	= $_POST['fname'];
        $lname	= $_POST['lname'];
        $age	= $_POST['age'];
        $experience	= $_POST['experience'];
        $type	= $_POST['type'];
        $marriage	= $_POST['marriage'];
        $comments	= $_POST['comments'];
        $mobile	= $_POST['mobile'];
        

        if($fname != ""){
        if($lname != ""){
        if($age != ""){
            if($experience != ""){
            if($type != ""){
                if($marriage != ""){
                    if($comments != ""){
                    if($mobile != ""){

             
                    $connection = new db();
                    $conobj=$connection->OpenCon();
                    $userQuery2=$connection->InsertDataReceptionist($conobj,"receptionist",$fname,$lname,$age,$experience,$type,$marriage,$comments,$mobile);
                    $connection->CloseCon($conobj);
             
					 
						header('location: ../Views/home.php');
						 
                    }
                }
            }
         }
        }
    }}}}
        ?>