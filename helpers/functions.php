<?php

function guest_user_widget($widget)
{
    if(is_array($widget)) {
        $html = "<h2 class='guest-user-widget-label'>" . $widget['label'] . "</h2>";
        $html .= $widget['content'];
        return $html;
    } else {
        return $widget;
    }
}




function watermark_image($file){
    
	$orig_path="/Library/WebServer/Documents/pubcomda/files/fullsize/$file";
   // $orig_path="/files/fullsize/$file";
	 /* from my testing...obviously needs work   */

	$new=md5($file);
	$np="/Library/Webserver/Documents/pubcomda/files/watermark/".$new.".png";
	$sp="/pubcomda/files/watermark/".$new.".png";
	$stamp=imagecreatefrompng("/Library/WebServer/Documents/pubcomda/files/pubcomdawatermark.png");
	$im=imagecreatefromjpeg($orig_path);
	
	
	// Set the margins for the stamp and get the height/width of the stamp image
	$marge_right = 0;
	$marge_bottom = 30;
	$sx = imagesx($stamp);
	$sy = imagesy($stamp);

    $bigx=imagesx($im);
    $bigy=imagesy($im);
    
    $cx=($bigx-$sx)/2;
    $cy=($bigy-$sy)/2;
    
   // echo "bigx: $bigx, sx: $sx";
    
    //echo $cx;
	
	// Copy the stamp image onto our photo using the margin offsets and the photo 
	// width to calculate positioning of the stamp. 
	//imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
	imagecopy($im, $stamp, $cx,$cy, 0, 0, imagesx($stamp), imagesy($stamp));
    
	// Output and free memory
	//header('Content-type: image/png');
	$newim=imagepng($im, $np, 0);
	//echo "<table width='80%'><tr><td><img src='cy_skating.jpg' width='100%'></td><td><img src='$np' width='100%'></td></tr></table>";
	echo "<img src='$sp' width='100%'>";
	
	//echo $np;
	imagedestroy($newim);   
    
    
    
    
    
}



function level5(){
	
	echo "<p>it's level 5!!</p>";
	
	
}

function super(){
    
    echo "<p>Super!!!!</p>";
    
}

?>
