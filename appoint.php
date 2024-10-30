<?php   
    $servername = "localhost";  
    $username = "root";  //default user name is root  
    $password = "";     //default password is blank 
    $db="db1";

    // create a connection
    $conn = mysqli_connect($servername, $username, $password,$db);  
    if(!$conn){ 
        die("Connection failed".mysqli_connect_error());  
    }
    else{      
        echo "Successfully connected with database";
    }

    $username=$_POST['user'];
    $reason=$_POST['reason'];
    $patient_name=$_POST['fname'];
    $patient_age=$_POST['age'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $acontact=$_POST['acontact'];
    $doctor_name=$_POST['dname'];
    $doctor_email=$_POST['demail'];


    $sql = "insert into appointment values('$username','$reason','$patient_name','$patient_age','$email','$contact','$acontact','$doctor_name','$doctor_email')";

if($conn->query($sql)==TRUE){
    echo "Data is saved successfully";
 }
else{
    echo "Data is not saved, error occured";
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
// $conn->closed();
?>