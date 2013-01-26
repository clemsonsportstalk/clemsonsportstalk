<h2> Sponsor Our Shows</h2>
<ul class='links'>
	
	  <li><a href='/main/ads.php'>Advertising Information</a></li>
</ul>
<div align='center' width='center'>
<?php 
//path to the image directory 
$directory = "../_images/Sponsors/"; 
  
//get all image files with a .jpg extension. 
$images = glob("" . $directory . "*.jpg"); 

// get random image index 
$rand_img = array_rand($images, 1); 

// display the image 
echo '<img src="'.$images[$rand_img].'" alt="width="223" height="125"" />';  ?>
</div>
 <!--<p align="center"><a href="http://www.crosscreektimber.com"><img src="../_images/Sponsors/Cross_Creek1.jpg" width="96" height="54" longdesc="http://www.crosscreektimber.com" /> </a>  
  <a href="http://www.peacefuldentistry.com"><img src="../_images/Sponsors/GDOG1.jpg" width="96" height="54" longdesc="http://www.peacefuldentistry.com/" /> </a><a href="http://www.doodycalls.com/pooper_scooper_south_carolina_columbia.asp"><img src="../_images/Sponsors/DC1.jpg" width="96" height="54" longdesc="http://www.doodycalls.com/pooper_scooper_south_carolina_columbia.asp" /> </a> 
   <a href="http://www.edistooutdoors.com"><img src="../_images/Sponsors/EO1.jpg" width="96" height="54" longdesc="http://www.edistooutdoors.com/" /> </a><a href="http://www.clemson.edu/centers-institutes/madren/inn"><img src="../_images/Sponsors/James_F_Martin1.jpg" width="96" height="54" longdesc="http://www.clemson.edu/centers-institutes/madren/inn" /> </a><a href="http://www.crosscreekrealtyllc.com"><img src="../_images/Sponsors/CCRealty.jpg" width="96" height="54" longdesc="http://www.crosscreekrealtyllc.com" /> </a><a href="http://fudogmedia.net"><img src="../_images/Sponsors/fudog-10percent-off.png" width="96" height="54" longdesc="http://fudogmedia.net/" /> </a><a href="http://scfbins.com/agents/blake-austin"> <img src="../_images/Sponsors/FB1.jpg" width="96" height="54" longdesc="http://scfbins.com/agents/blake-austin" /> </a> <a href="http://www.clemson.edu/centers-institutes/madren/dining.html"><img src="../_images/Sponsors/Seasons1.jpg" width="96" height="54" longdesc="http://www.clemson.edu/centers-institutes/madren/dining.html" /></a>
<p align="center"><a href="http://www.vostokcoolers.com"><img src="../_images/Sponsors/vostok.png" width="192" height="54" longdesc="http://www.vostokcoolers.com" /></a> -->
    
    
   
	</ul>
