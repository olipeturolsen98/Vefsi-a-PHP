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
<header class="custom-wrapper pure-g" id="menu" style="min-height: 600px;
                                            background-attachment: fixed;
                                             background-position: center;
                                            background-repeat: no-repeat;
                                                  background-size: cover;
                background-image: url('<?php echo $selectedImage; ?>')"/>
       
    <img class="zombies" src="imgs/Zombies.png";/>
	<p style = "float:bottom-right"><?php echo $qoutes[0]; ?></p>

</header>