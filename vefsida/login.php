<?php
    session_start(); 
 ?>
<?php include'./include/title.php';?>
<!DOCTYPE html>
<?php  include("./include/head.php");?>
<body>
    <?php include("./include/header.php") ?>

    <?php include("./include/menu.php") ?>
    <main>
        <?php include("./include/loginform.php") ?>
    </main>
     <main>
        <?php include("./include/registerform.php") ?>
    </main>
</div>
<?php include("./include/footer.php") ?>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
                <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
                <script>
                    $(document).foundation();
                </script>
</body>
</html>