<?php

	/**
	 * Save Gifts settings
	 * Thanks for the Userpoint Api where i got this pice of code from
	 */

	global $CONFIG;

	gatekeeper();
	action_gatekeeper();

    $count = get_input('giftcount');
    
	// Params array (text boxes and drop downs)
	$params = get_input('params');
	$result = false;
	foreach ($params as $k => $v) {
		if (!set_plugin_setting($k, $v, 'gifts')) {
			register_error(sprintf(elgg_echo('gifts:settings:savefail'), 'userpoints'));
			forward($_SERVER['HTTP_REFERER']);
		}
	}

	// Get Amount of Gifts
	
	$sender = get_entity(get_loggedin_userid());
	// File Upload Function
	for ($i=1;$i<=$gift_count;$i++)
    {
        $imageid = 'giftimage_'.$i;
    	if ((isset($_FILES[$imageid])) && (substr_count($_FILES[$imageid]['type'],'image/')))
    	{
    		$prefix = "gifts/gift_".$i;
    		
    		$filehandler = new ElggFile();
    		$filehandler->owner_guid = $sender->owner_guid;
    		$filehandler->setFilename($prefix . ".jpg");
    		$filehandler->open("write");
    		$filehandler->write(get_uploaded_file($imageid));
    		$filehandler->close();
    		
    		$thumbtiny = get_resized_image_from_existing_file($filehandler->getFilenameOnFilestore(),25,25, true);
    		$thumbsmall = get_resized_image_from_existing_file($filehandler->getFilenameOnFilestore(),40,40, true);
    		$thumbmedium = get_resized_image_from_existing_file($filehandler->getFilenameOnFilestore(),100,100, true);
    		$thumblarge = get_resized_image_from_existing_file($filehandler->getFilenameOnFilestore(),200,200, false);
    		if ($thumbtiny) {
    			
    			$thumb = new ElggFile();
    			$thumb->owner_guid = $sender->owner_guid;
    			$thumb->setMimeType('image/jpeg');
    			
    			$thumb->setFilename($prefix."tiny.jpg");
    			$thumb->open("write");
    			$thumb->write($thumbtiny);
    			$thumb->close();
    			
    			$thumb->setFilename($prefix."small.jpg");
    			$thumb->open("write");
    			$thumb->write($thumbsmall);
    			$thumb->close();
    			
    			$thumb->setFilename($prefix."medium.jpg");
    			$thumb->open("write");
    			$thumb->write($thumbmedium);
    			$thumb->close();
    			
    			$thumb->setFilename($prefix."large.jpg");
    			$thumb->open("write");
    			$thumb->write($thumblarge);
    			$thumb->close();
    			system_message("Saved File $i");	
    		}
    	}
    }
	system_message(elgg_echo('gifts:settings:saveok'));
	
	forward($_SERVER['HTTP_REFERER']);
?>
