<?php   
    $servername = "localhost";  
    $username = "root";  //default user name is root  
    $password = "";     //default password is blank 
    $db="db1";

    // create a connection
    $conn = mysqli_connect($servername, $username, $password,$db);  
    if(!$conn){ 
        echo "Connection failed".mysqli_connect_error();  
    }
    else{      
        echo "Successfully connected with database";
    }


    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $contact=$_POST['contact'];
    $language=$_POST['lang'];
    $username=$_POST['uname'];
    $password=$_POST['password'];
    $confirm_paasword=$_POST['cpassword'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];


    $sql = "insert into register values('$firstname','$lastname','$age',' $dob','$email','$gender','$contact',' $language','$username','$password','$confirm_paasword','$city','$state',' $country')";

if($conn->query($sql)==TRUE){
    echo "Data is saved successfully";
 }
else{
    echo "Data is not saved, error occured";
}
// $conn->closed();
