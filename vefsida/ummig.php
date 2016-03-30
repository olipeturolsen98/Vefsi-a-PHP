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
         <div class="row">
                <div class="medium-6 columns">
                    <h3>Hérna eru upplýsingar um mig og leikinn</h3>
                    <img src="img\oli.jpg" class="thumbnail">
                    <h5>Óli Olsen</h5>
                    <ul class="menu">
                        <li><a href="http://rainbow6.ubi.com/siege/en-us/home/index.aspx">Rainbow Six Siege</a></li>
                    </ul>
                </div>
    </main>
<?php include("./include/footer.php") ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
                <script>
                    $(document).foundation();
                </script>
</body>
</html>