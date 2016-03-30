<?php
    session_start(); 
 ?>
<?php include'./include/title.php';?>
<!DOCTYPE html>
<?php  include("./include/head.php");?>
<body>
    <?php include("./include/header.php") ?>
   <div class="containall">
    <?php include("./include/menu.php") ?>
    <main>
        <?php include("./include/images.php") ?>
    </main>
<?php include("./include/footer.php") ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
                <script>
                    $(document).foundation();
                </script>
</body>
</html>