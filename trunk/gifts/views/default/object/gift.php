<?php 
    // Select Receiver and Sender
    $sender = get_entity($vars['entity']->owner_guid);
    $receiver = get_entity($vars['entity']->receiver);
    $gifttext = get_plugin_setting('gift_'.$vars['entity']->gift_id, 'gifts');
    $imagefile = $vars['entity']->gift_id.".png";
    $imgfile = dirname(dirname(dirname(dirname(__FILE__))))."/images/".$imagefile;
    
    echo elgg_view_title($gifttext); 
?>
 
<div class="contentWrapper">
 
<p><?php 
      
    
    if (file_exists($imgfile)) {
        echo '<img src="'.$vars['url'].'mod/gifts/images/'.$imagefile.'" /><br/>';
    } 
    echo sprintf(elgg_echo("gifts:object"), $receiver->name, $gifttext, $sender->name);

?></p>
  
</div>