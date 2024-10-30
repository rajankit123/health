<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(!$conn)  
            die("Connection failed".mysqli_connect_error());  
        else      
            echo "Successfully connected with database";

  
$user=$_POST['user'];
$pass=$_POST['pass'];

$sql = "select * from register where username = '$user' and password = '$pass'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
 
        //    header("Location: https://www.google.com/");
           header("Location: http://127.0.0.1:5502/home.html");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     


mysqli_close($conn);
?>