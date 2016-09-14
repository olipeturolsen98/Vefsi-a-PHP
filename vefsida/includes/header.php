<?php
//Velur random mynd í header
   /* $dir = 'img/header/';
    if (isset($_SESSION["files"]) == false || count($_SESSION["files"]) == 0) {
    	$_SESSION["files"] = glob("{$dir}*.{jpg,png,gif,jpeg}", GLOB_BRACE);
    }
    shuffle($_SESSION["files"]);
    $imgpath = $_SESSION["files"][0];
    unset($_SESSION["files"][0]);*/

      $images = [
    ['file'    => 'indexZ/Call-Of-Duty-Zombies-Wallpaper-02',
     'caption' => 'Mob of the dead'],
    ['file'    => 'indexZ/Call-Of-Duty-Zombies-Wallpaper-05',
     'caption' => 'Classic zombies'],
    ['file'    => 'indexZ/Call-Of-Duty-Zombies-Wallpaper-07',
     'caption' => 'Moon'],
    ['file'    => 'indexZ/Call-Of-Duty-Zombies-Wallpaper-10',
     'caption' => 'Perkaholic'],
    ['file'    => 'indexZ/Call-Of-Duty-Zombies-Wallpaper-11',
     'caption' => 'Buried'],
    ['file'    => 'indexZ/Call-Of-Duty-Zombies-Wallpaper-12',
     'caption' => 'die rise'],
    ];
    $i = rand(0, count($images)-1);
    $selectedImage = "images/{$images[$i]['file']}.jpg";
    $caption = $images[$i]['caption'];
    if (file_exists($selectedImage) && is_readable($selectedImage)) {
    $imageSize = getimagesize($selectedImage);
    }

    $qoutes = array("We need to turn the power on! It's like deja vu all over again." , "Whoo! More shit to kill with!", "NO! NO VODKA FOR YOU!" , "Out of my way, suka!" , "I will show them the path!" , "You kill me? No! I kill you." , "Do you feel it? Oh I hope they feel it..." , "I'm going to kill SOOOOO many now." );
    shuffle($qoutes);
  ?>
<header class="custom-wrapper pure-g" id="menu" style="background-image: url('<?php echo $imgpath; ?>')">
	<div>
		<a href="index.php" class="headerlink"><h1 class="_i_myndun">Call of Duty Zombies</i></h1></a><br>
	</div>
	<div class="quote">
		<p>-<?php echo $qoutes[0]; ?></p>
	</div>
</header>