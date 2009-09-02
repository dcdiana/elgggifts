<div class="contentWrapper">
<form action="<?php echo $vars['url']; ?>action/gifts/sendgift" method="post">

<?php
	$send_to = get_input('send_to');
	// Already send_to?
	if($send_to){
	    			//get the user object  
    	        $user = get_user($send_to);
    	        
    	        //draw it
    			echo "<label>" . elgg_echo("gifts:friend") . ":</label><br/><div class=\"messages_single_icon\">" . elgg_view("profile/icon",array('entity' => $user, 'size' => 'tiny')) . $user->username;
    			echo "</div><br class=\"clearfloat\" />";
    			//set the hidden input field to the recipients guid
    	        echo "<input type=\"hidden\" name=\"send_to\" value=\"{$send_to}\" />";
    	        
    			    
	        }else{

?> 
 
    <p><label><?php echo elgg_echo('gifts:friend'); ?>: </label>
    <select name='send_to'>
    <?php 
        echo "<option value=''></option>";
        foreach($vars['friends'] as $friend){
            echo "<option value='{$friend->guid}'>" . $friend->name . "</option>";                
        }
            
    ?>
    </select></p>
<?php
} ?>
<p><?php echo elgg_echo('gifts:selectgift'); ?><br />
    <select name='gift_id'>
<?php
    $gift_count = get_plugin_setting('giftcount'.$i, 'gifts');
    for ($i=1;$i<=$gift_count;$i++)
    {
        echo "<option value='{$i}'>".get_plugin_setting('gift_'.$i, 'gifts')."</option>";
    }    
?>
    </select>
</p>
 
<p><input type="submit" value="<?php echo elgg_echo('gifts:send'); ?>" /></p>
 
</form>
</div>