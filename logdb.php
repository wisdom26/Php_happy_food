<?php
$susername = $_POST['username'];
$spassword = $_POST['pass'];
//login database
$conn = new mysqli('localhost', 'root', '', 'food');
if ($conn->connect_error) {
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("SELECT password FROM foods WHERE username= ?");
    $stmt->bind_param("s",$susername);
    $stmt->execute();
    $stmt->bind_result($storedpassword);
    $stmt->fetch();
    $stmt->close();
    
}
if(password_verify($spassword,$storedpassword)){
    echo "<script> alert('Login successful!');</script>";
}
else{
    echo "<script> alert('Incorrect username or password');</script>";
    // echo "Incorrect username or password";
        header("Location:login.php");
        exit();
        
    
    
}


?>