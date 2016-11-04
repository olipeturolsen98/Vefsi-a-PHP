<?php 
session_start();
if(isset($_SESSION['username'])){
    echo "you logged in as </br>", $_SESSION['username'];
    
}else{
//your page stuff
} 
// Require db connection and auth class
require("includes/config.php");
require "includes/authenticate.php";
// $user = Auth();
$user = new Auth();
$error = '';

// If user has session he does not have to login again
if(isset($_SESSION["username"])){
    $user->redirect('upload.php');
}

/*if(isset($_SESSION["username"])){
    echo "<a href='logout.php'>Logout takkii</a>";
}*/

include './includes/title.php';
?>

<!DOCTYPE html>
<?php include("./includes/head.php");?>
<body>
    <?php include("./includes/header.php"); include("./includes/menu.php"); ?>
<div class="containall">
    <main>
        <?php
        if ($error) {
            echo "<p>$error</p>";
        } elseif (isset($_GET['expired'])) { ?>
            <p>Your session has expired. Please log in again.</p>
        <?php } ?>
        <?php include("./includes/loginform.php"); ?>
        <?php include("./includes/registerform.php"); ?>
    </main>
</div>
<?php include("./includes/footer.php"); ?>
   
</body>
</html>