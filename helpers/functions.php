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
	
	switch($r){
		
		case "Level5":
			level5();
			break;
		
	}
	
	

}

function level5(){
	
	echo "<p>it's level 5!!</p>";
	
	
}

?>
