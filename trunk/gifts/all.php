<?php
	/**
	 * Elgg Gifts plugin
	 * This plugin gives you the ability to have your own customised page
	 * 
	 * @package Gifts
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Christian Heckelmann
	 * @copyright Christian Heckelmann
	 * @link http://www.heckelmann.info
	 */

	 
	// Start engine
		require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
		
		$area2 = elgg_view_title(elgg_echo('gifts:allgifts'));
		//$area2 .= list_entities('object','gift',page_owner());
        $area2 .= list_entities('object','gift');
		set_context('gifts');
		
	// Format page
		$body = elgg_view_layout('two_column_left_sidebar', $area1, $area2);
		
	// Draw it
		echo page_draw(elgg_echo('gifts:allgifts'),$body);
?>