<?php
 
$server = "localhost";
$username = "root" ;
$password = "" ;
$dbname = "resort" ;

$conn = mysqli_connect($server, $username, $password, $dbname);
if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $query = "insert into `form`(`name`,`email`,`mobile`,`subject`,`message`) values('$name','$email, '$mobile', '$subject', '$message')";

        mysqli_query($conn, $query);

}