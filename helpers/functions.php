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


function jeremytest(){
	
	
	$user = current_user();
	$r= $user->role;
	//echo $r;
	switch($r){
		
		case "Level5":
			level5();
			break;
            
            
        case "super":
        super();
        break;     
		
	}
	
	

}

function watermark_image(){
    
 /* from my testing...obviously needs work   */
$file="cy_skating";
$new=md5($file);
$np=$new.".png";
$stamp=imagecreatefromjpeg("http://library.lclark.edu/images/owllight_small.jpg");
$im=imagecreatefromjpeg("cy_skating.jpg");


// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 15;
$marge_bottom = 15;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// Output and free memory
//header('Content-type: image/png');
$newim=imagepng($im, $np, 0);
echo "<table width='80%'><tr><td><img src='cy_skating.jpg' width='100%'></td><td><img src='$np' width='100%'></td></tr></table>";



imagedestroy($newim);   
    
    
    
    
    
}



function level5(){
	
	echo "<p>it's level 5!!</p>";
	
	
}

function super(){
    
    echo "<p>Super!!!!</p>";
    
}

?>
