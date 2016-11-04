<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

$username = trim(htmlentities(mysql_real_escape_string($_POST['username'])));
$password = trim(htmlentities(mysql_real_escape_string($_POST['password'])));
if (!empty($username) && !empty($password)) {
    $_SESSION['username'] = $username;
    echo "<br/> welcome ", $username;

     } else {
    echo "Please enter correct username or password";
     }   
} else {
echo "Go to login page</br>";
echo "<a href='login.php'>LogOut</a>";
}
if (isset($_SESSION['username'])) {
   session_destroy();
   echo "<br> you have logged in successufuly!";
} 
 ?>