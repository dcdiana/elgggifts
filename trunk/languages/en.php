<?php

	/**
	 * Elgg Gifts plugin
	 * Send gifts to you friends
	 * 
	 * @package Gifts
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Christian Heckelmann
	 * @copyright Christian Heckelmann
	 * @link http://www.heckelmann.info
	 */


$english = array( 
	 'gifts:menu'  =>  "Gifts" , 
	 'gifts:yourgifts'  =>  "My Gifts",
     'gifts:allgifts'  =>  "All Gifts",
	 'gifts:sent'  =>  "Sent Gifts",
     'gifts:sendgifts' => "Give something",
     'gifts:friend' => "Friend",
	 'gifts:message' => "Message",
     'gifts:selectgift' => "Choose your Gift",
     'gifts:gift' => "Gift",
     'gifts:send' => "Send gift",     
     'gifts:object' => "%s received %s from %s",
     'gifts:river' => "%s received a %s from ",
     'gifts:blank' => "Please select a friend!",
     'item:object:gift' => 'Gifts',
     'gifts:settings:number' => "How many gifts do you want to provide",
     'gifts:settings:title' =>  "Gifts",
	 'gifts:settings:globalsettings' =>  "Settings",
     'gifts:settings:giftsettings' =>  "Gifts",
	 'gifts:settings:useuserpoints' =>  "Use Userpoints",
     'gifts:settings:userpoints' =>  "Points",
	 'gifts:settings:code' =>  "Giftcode",
	 'gifts:settings:showallyes' =>  "Yes",
	 'gifts:settings:showallno' =>  "No",
	 'gifts:settings:showallgifts' =>  "Show All Gifts",
	 'gifts:settings:saveok' =>  "Settings saved successfull",
	 'gifts:settings:savefail' =>  "Could not save settings!",

	 'gifts:mail:subject' => "You have received a new Gift!",
	 'gifts:mail:body' => "You have received a new Gift from %s. 
     
To view your Gift click the link below: %s 

You cannot reply to this email."
); 
	
	add_translation("en",$english);
?>