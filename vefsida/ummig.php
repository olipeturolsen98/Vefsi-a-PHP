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
</div>
<?php include("./include/footer.php") ?>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
                <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
                <script>
                    $(document).foundation();
                </script>
</body>
</html>