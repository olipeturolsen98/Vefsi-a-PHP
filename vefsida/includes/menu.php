<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<nav>
	<ul>
		<li>
			<a href="index.php" <?php if ($currentPage == "index.php") { echo "class=\"current\""; } ?>>Home</a>
		</li>
		<li style="float:right">
			<a href="ummig.php" <?php if ($currentPage == "ummig.php") { echo "class=\"current\""; } ?>>About</a>
		</li>
		<li>
			<a href="browse.php?img=0" <?php if ($currentPage == "browse.php") { echo "class=\"current\""; } ?>>Browse</a>
		</li>
		<li>
			<a href="login.php" <?php if ($currentPage == "login.php") { echo "class=\"current\""; } ?>>Login/Register</a>
		</li>
	</ul>
</nav>
