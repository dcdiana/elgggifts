<?

	//Load Plugin Settings
	$plugin = find_plugin_settings('gifts');
	
	$showallgifts	= $plugin->showallgifts;
	$giftcount		= $plugin->giftcount;
	$action = $vars['url'] . 'action/gifts/settings';
	
	$form = "<p>".elgg_echo('gifts:settings:showallgifts');
	$form .= '<br/><select name="params[showallgifts]">';
	$form .=  "<option value=1";
	
	if ($showallgifts == 1) $form .= " selected=\"yes\" ";
	
	$form .= ">".elgg_echo('gifts:settings:showallyes')."</option>";
	$form .=  "<option value=0";
	
	if ($showallgifts == 0) $form .= " selected=\"no\" ";
	
	$form .= ">".elgg_echo('gifts:settings:showallno')."</option>";
	$form .= "</select><br/>\n\r";
	$form .= elgg_echo('gifts:settings:number');
	$form .= "<br/><select name=\"params[giftcount]\">";
    for ($i=0;$i<99;$i++)
    {
    	$form .= "<option value=\"".$i."\"";
    	if($giftcount == $i) {
    		$form .= " selected=\"yes\" ";
    	}
    	$form .= ">".$i."</option>\n\r";
    }
    $form .= "</select>";
    $form .= "<br><br>".elgg_view('input/submit', array('value' => elgg_echo("save")));
    $form .= "</p>";
    echo elgg_view('input/form', array('action' => $action, 'body' => $form));

/*
    $gift_count = $giftcount;
        for ($i=1;$i<=$gift_count;$i++)
        {
            echo elgg_echo('gifts:settings:title')." #$i";
            echo elgg_view('input/text',array('internalname'=>'params[gift_'.$i.']','value'=>get_plugin_setting('gift_'.$i, 'gifts')));
        }*/
    ?>