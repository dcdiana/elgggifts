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

    // Load Elgg engine
    include_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
    gatekeeper();

    $page_owner = page_owner_entity();
    if ($page_owner === false || is_null($page_owner)) {
        $page_owner = $_SESSION['user'];
        set_page_owner($page_owner->getGUID());
    } 
    $friends = $_SESSION['user']->getFriends('', 9999);
    
    // set the title
    $title = elgg_echo('gifts:sendgifts');
 
    // start building the main column of the page
    $area2 = elgg_view_title($title);
 
    // Add the form to this section
    $area2 .= elgg_view("gifts/form",array('friends' => $friends));
 
    // layout the page
    $body = elgg_view_layout('two_column_left_sidebar', '', $area2);
 
    // draw the page
    page_draw($title, $body);
?>