<?

	//Load Plugin Settings
	$plugin = find_plugin_settings('gifts');
	
	$showallgifts	= $plugin->showallgifts;
	$giftcount		= $plugin->giftcount;
	$action = $vars['url'] . 'action/gifts/savegifts';
	
	$form = "<input type=\"hidden\" name=\"giftcount\" value=\"$giftcount\" />";
    $gift_count = $giftcount;
    for ($i=1;$i<=$gift_count;$i++)
    {
        $form .= "<h2>".elgg_echo('gifts:settings:title')." #$i</h2>";
        $form .= elgg_view('input/text',array('internalname'=>'params[gift_'.$i.']','value'=>get_plugin_setting('gift_'.$i, 'gifts')));
        
        //$form .= elgg_echo('gifts:settings:userpoints')." #$i";
        //$form .= elgg_view('input/text',array('internalname'=>'params[giftpoints_'.$i.']','value'=>get_plugin_setting('giftpoints_'.$i, 'gifts')));
        //$form .= elgg_echo('gifts:settings:code')." #$i";
        //$form .= elgg_view('input/longtext',array('internalname'=>'params[giftcode_'.$i.']','value'=>get_plugin_setting('giftcode_'.$i, 'gifts')));
        
        //elgg_view("input/file",array('internalname' => 'icon'))
        $form .= elgg_echo('gifts:settings:code')." #$i";
        $form .= elgg_view('input/file',array('internalname'=>'giftimage_'.$i));
        
        //Show Image if available
    }
    $form .= "<br><br>".elgg_view('input/submit', array('value' => elgg_echo("save")));
    $form .= "</p>";
    echo elgg_view('input/form', array('action' => $action, 'enctype'=>"multipart/form-data"  ,'body' => $form));



    ?>