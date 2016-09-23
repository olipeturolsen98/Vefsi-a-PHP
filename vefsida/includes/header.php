<?php
      $images = [
    ['file'    => 'Call-Of-Duty-Zombies-Wallpaper-02',
     'caption' => 'Mob of the dead'],
    ['file'    => 'Call-Of-Duty-Zombies-Wallpaper-05',
     'caption' => 'Classic zombies'],
    ['file'    => 'Call-Of-Duty-Zombies-Wallpaper-07',
     'caption' => 'Moon'],
    ['file'    => 'Call-Of-Duty-Zombies-Wallpaper-10',
     'caption' => 'Perkaholic'],
    ['file'    => 'Call-Of-Duty-Zombies-Wallpaper-11',
     'caption' => 'Buried'],
    ['file'    => 'Call-Of-Duty-Zombies-Wallpaper-12',
     'caption' => 'die rise'],
    ];
    $i = rand(0, count($images)-1);
    $selectedImage = "indexZ/{$images[$i]['file']}.jpg";
    $caption = $images[$i]['caption'];
    if (file_exists($selectedImage) && is_readable($selectedImage)) {
    $imageSize = getimagesize($selectedImage);
    }

    $qoutes = array("We need to turn the power on! It's like deja vu all over again." , "Whoo! More shit to kill with!", "NO! NO VODKA FOR YOU!" , "Out of my way, suka!" , "I will show them the path!" , "You kill me? No! I kill you." , "Do you feel it? Oh I hope they feel it..." , "I'm going to kill SOOOOO many now." );
    shuffle($qoutes);
  ?>
<header class="custom-wrapper pure-g" id="menu" style="background-image: url('<?php echo $selectedImage; ?>')" style="position: relative; top: 0; left: 0;"/>
	<div>
		<a href="index.php" class="headerlink"><h1 class="_i_myndun"><<?php echo "caption"; ?></i></h1></a><br>
	</div>
    <div style="position: relative; left: 0; top: 0;">
  <img src="Zombies.png" style="position: absolute; top: 30px; left: 70px;"/>
</div>
	<div class="quote">
		<p>-<?php echo $qoutes[0]; ?></p>
	</div>
</header>