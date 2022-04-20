<?php 
include('../Model/db.php');

        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $User = $_POST['user'];
        $Password = $_POST['Password'];

        $connection = new db();
        $conobj=$connection->OpenCon();
        $userQuery2=$connection->InsertDataSignIn($conobj,"registration",$firstName,$lastName,$gender,$email,$Password,$User);
        $connection->CloseCon($conobj);

    
        
        header ('Location: ../views/Login.html');
        exit;
?>

</body>
</html>