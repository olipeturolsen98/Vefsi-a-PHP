<?php 
session_start();
if(isset($_SESSION['username'])){
    echo "you logged in as </br>", $_SESSION['username'];
    
}else{
//your page stuff
}  
 ?>
<?php include'./includes/title.php';?>
<!DOCTYPE html>
<?php  include("./includes/head.php");?>
<body>
    <?php include("./includes/header.php") ?>
    <?php include("./includes/menu.php") ?>
<div class="containall">
    <main>
        <?php include("./includes/images.php") ?>
    </main>
</div>
<?php include("./includes/footer.php") ?>
    
</body>
</html>