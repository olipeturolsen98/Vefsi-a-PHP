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
        <?php include("./includes/loginform.php") ?>
        <?php include("./includes/registerform.php") ?>
    </main>
</div>
<?php include("./includes/footer.php") ?>
   
</body>
</html>