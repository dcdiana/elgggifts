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


$german = array( 
	 'gifts:menu'  =>  "Geschenke" , 
	 'gifts:yourgifts'  =>  "Meine Geschenke",
     'gifts:allgifts'  =>  "Alle Geschenke",
	 'gifts:sent'  =>  "Geschickte Geschenke",
     'gifts:sendgifts' => "Schenke etwas",
     'gifts:friend' => "Freund",
	 'gifts:message' => "Nachricht",
     'gifts:selectgift' => "W&auml;hle ein Geschenk",
     'gifts:gift' => "Geschenk",
     'gifts:send' => "Sende Geschenk",    
	 'gifts:sendok' => "Geschenk erfolgreich versendet",      
     'gifts:object' => "%s erhielt %s von %s",
     'gifts:river' => "%s erhielt ein %s von ",
     'gifts:blank' => "Du mu&szlig;t alle Felder ausf&uuml;llen!",
     
     'gifts:widget' => "Gifts Widget",
     'gifts:widget:num_display' => "Anzahl der Geschenke",
     'gifts:widget:description' => "Zeige deine erhaltenen Geschenke",

	 'gifts:pointssum' => "Du hast noch %s Punkte um Geschenke zu schicken",	 
	 'gifts:notenoughpoints' => "Du hast nicht genuegend Punkte um das Geschenk zu schicken!",
	 'gifts:pointscost' => "Dieses Geschenk kostet ",
	 'gifts:pointfail' => "Da hat was mit den Userpoints nicht geklappt!",
	 'gifts:pointsuccess' => "Userpoints erfolgreich abgezogen!",

     'item:object:gift' => 'Geschenke',
     'gifts:settings:number' => "Anzahl der Geschenke",
     'gifts:settings:title' =>  "Geschenk",
     'gifts:settings:globalsettings' =>  "Einstellungen",
     'gifts:settings:giftsettings' =>  "Geschenke",
	 'gifts:settings:useuserpoints' =>  "Userpoints verwenden",
	 'gifts:settings:userpoints' =>  "Punkte",
	 'gifts:settings:image' =>  "Bild",
	 'gifts:settings:showallyes' =>  "Ja",
	 'gifts:settings:showallno' =>  "Nein",
	 'gifts:settings:showallgifts' =>  "Alle Geschenke Anzeigen",
	 'gifts:settings:saveok' =>  "Einstellungen erfolgreich gespeichert",
	 'gifts:settings:savefail' =>  "Konnte Einstellungen nicht speichern!",
	 'gifts:mail:subject' => "Du hast ein neues Geschenk erhalten!",
	 'gifts:mail:body' => "Du hast ein neues Geschenk von %s. 
     
Du findest dein Geschenk hier: %s 

Du kannst auf diese Mail nicht Antworten"
); 

add_translation('de', $german); 

?>