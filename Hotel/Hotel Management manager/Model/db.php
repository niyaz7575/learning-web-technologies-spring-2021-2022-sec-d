<?php
class db
{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "anikamanager";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 } 
  
 
 function InsertDataSignIn($conn,$table,$firstname,$lastname ,$gender,$email, $password, $name)
 {
    $sql = "INSERT INTO $table (FirstName,LastName,Gender,Email,Password,Name) 
    VALUES ('$firstname','$lastname','$gender','$email', '$password', '$name')";
    
$result = $conn->query($sql);
if($result)
{ 
    $signin_id=$conn->insert_id;
    echo "new record inserted"; 
    return $result;
    
}
else
{
     echo "error occurred".$conn->error;
 }
  
 }

 function InsertDataReceptionist($conn,$table,$firstname,$lastname ,$age,$level, $job, $status,$comment,$mobile)
 {
    $sql = "INSERT INTO $table (FirstName,LastName,Age,ExperienceLevel,JobType,MaritalStatus,AdditionalComments,Mobile) 
    VALUES ('$firstname','$lastname','$age','$level', '$job', '$status','$comment','$mobile')";
    
$result = $conn->query($sql);
if($result)
{ 
    $signin_id=$conn->insert_id;
    echo "new record inserted"; 
    return $result;
    
}
else
{
     echo "error occurred".$conn->error;
 }
  
 }


 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE Name='". $username."' AND Password='". $password."'");
 return $result;
 }

 function UpdateDataSignIn($conn,$table,$email1,$name1,$email ,$pass)
 {
    $sql = "UPDATE $table SET Name='$name1', Email='$email',Password='$pass' WHERE Email='$email1'";

   if ($conn->query($sql) === TRUE) {
       $result= TRUE;
   } else {
       $result= FALSE ;
   }
   return  $result;
  
 }
 function DeleteDataSignIn($conn,$table,$email1)
 {
     
    $sql = "DELETE FROM $table WHERE Email='$email1'";

   if ($conn->query($sql) === TRUE) {
       $result= TRUE;
   } else {
       $result= FALSE ;
   }
   return  $result;
  
 }

  

 function DeleteDataSignIn1($conn,$table1,$table2,$table3,$table4,$table5,$email1)
 {
     
     
    $sql ="DELETE FROM $table1, $table2,$table3,$table4,$table5 USING $table1 INNER JOIN $table2 INNER JOIN $table3
     INNER JOIN $table4 INNER JOIN $table5 WHERE $table1.Email='$email1' AND $table1.id=$table2.id AND $table2.id=$table3.id AND $table3.id=$table4.id
    AND $table4.id=$table5.id";

   if ($conn->query($sql) === TRUE) {
       $result= TRUE;
   } else {
       $result= FALSE ;
   }
   return  $result;
  
 }
 
 function GetUserByUname($conn,$table, $uname)
 {
$result = $conn->query("SELECT * FROM  $table WHERE Email='$uname'");
 return $result;
 }
 
 function GetUserAddress($conn,$table,$email)
 {
$result = $conn->query("SELECT * FROM  $table WHERE Email='$email'");
return $result;
 }
 
 

 function InsertDataCategory($conn,$table,$checkbox1,$checkbox2,$annual,$product,$check)
 {
    $sql = "INSERT INTO $table  (Category,ProductFrom,AnnualTurnOver, Quantity,OthersSell) 
    VALUES ('$checkbox1','$checkbox2','$annual','$product','$check')";
    
$result = $conn->query($sql);
if($result)
{ 
    echo "new record inserted"; 
    return $result;
}
else
{
     echo "error occurred".$conn->error;
 }
  
 }

 function InsertDataAddress($conn,$table,$stoname,$postp ,$add1,$add2,$city, $state, $country)
 {
    $sql = "INSERT INTO $table  (StoreName,PostCode,Address1, Address2,City,State,Country) 
    VALUES ('$stoname', '$postp','$add1','$add2','$city', '$state', '$country')";
    
$result = $conn->query($sql);
if($result)
{ 
    echo "new record inserted"; 
    return $result;
}
else
{
     echo "error occurred".$conn->error;
 }
  
 }
 function ShowAll($conn,$table)
 {
    $result = $conn->query("SELECT * FROM  $table");
 return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }

 
}

  
  

?>