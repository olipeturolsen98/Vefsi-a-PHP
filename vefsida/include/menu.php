<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<nav>
	<h3>Sites:</h3>
	<ul>
		<li>
			<a href="index.php" <?php if ($currentPage == "index.php") { echo "class=\"current\""; } ?>>Forsíða</a>
		</li>
		<li>
			<a href="ummig.php" <?php if ($currentPage == "ummig.php") { echo "class=\"current\""; } ?>>Um mig</a>
		</li>
		<li>
			<a href="login.php" <?php if ($currentPage == "login.php") { echo "class=\"current\""; } ?>>Login/Register</a>
		</li>
	</ul>
</nav>




<nav>
	<h3>Sites:</h3>
	<ul>
		<li>
			<a href="index.php" class="active" >Forsíða</a>
		</li>
		<li>
			<a href="ummig.php" >Um mig</a>
		</li>
		<li>
			<a href="login.php" >Login/Register</a>
		</li>
	</ul>
</nav>