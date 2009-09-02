<?php

	// THANK YOU DDFUSION
    $performed_by = get_entity($vars['item']->subject_guid);
	$performed_on = get_entity($vars['item']->object_guid);
	
	$person_link = "<a href=\"{$performed_by->getURL()}\">{$performed_by->name}</a>";
	$object_link = "<a href=\"{$performed_on->getURL()}\">{$performed_on->name}</a>";
	$gift = "<a href=\"{$vars['url']}pg/gifts/{$_SESSION['user']->username}/index\">".elgg_echo("gifts:gift")."</a>";
	
	$string = sprintf(elgg_echo("gifts:river"), $object_link, $gift)  . " <a href=\"{$performed_by->getURL()}\">" . $performed_by->name . "</a> ";    
	
    echo $string; 


?>
