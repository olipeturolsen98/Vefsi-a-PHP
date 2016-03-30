<?php
    session_start(); 
    if (isset($_POST['submit'])) { 
        
       require './include/process.php';
   }
 ?>
<?php include'./includes/title.php';?>
<!DOCTYPE html>
<?php  include("./includes/head.php");?>
<body>
    <?php include("./includes/header.php") ?>
<div class="containall">
    <?php include("./includes/menu.php") ?>
    <main>
        <?php include("./includes/loginform.php") ?>
        <?php include("./includes/registerform.php") ?>
    </main>
</div>
<?php include("./includes/footer.php") ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>