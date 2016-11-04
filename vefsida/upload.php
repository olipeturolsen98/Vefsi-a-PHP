<?php
    session_start(); 
 ?>
<?php include'./includes/title.php';?>
<!DOCTYPE html>
<?php  include("./includes/head.php");?>
<body>
    <?php include("./includes/header.php") ?>
    <?php include("./includes/menu.php") ?>
<div class="containall">
    <main>
        <?php include("./includes/imageupload.php") ?>
    </main>
</div>

<?php
ob_start();
// set a time limit in seconds
$timelimit = 15;
// get the current time
$now = time();
// where to redirect if rejected
$redirect = 'http://tsuts.tskoli.is/2t/1403982849/Vefsi-a-PHP/vefsida/login.php';

// if session variable not set, redirect to login page
if (!isset($_SESSION['authenticated'])) {
    header("Location: $redirect");
    exit;
} elseif ($now > $_SESSION['start'] + $timelimit) {
    // if timelimit has expired, destroy session and redirect
    $_SESSION = [];
    // invalidate the session cookie
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time()-86400, '/');
    }
    // end session and redirect with query string
    session_destroy();
    header("Location: {$redirect}?expired=yes");
    exit;
} else {
    // if it's got this far, it's OK, so update start time
    $_SESSION['start'] = time();
}
?> 

<?php include("./includes/footer.php") ?>
    
</body>
</html>