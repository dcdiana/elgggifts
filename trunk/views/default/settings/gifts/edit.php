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

?>
<p>
    <?php echo elgg_echo('gifts:settings:number'); ?>
 
    <select name="params[giftcount]">
    <?
        for ($i=0;$i<21;$i++)
        {
            ?>
            <option value="<?php echo $i ?>" <?php if ($vars['entity']->giftcount == $i) echo " selected=\"yes\" "; ?>><?php echo $i ?></option>
            <?php
        };
    ?>
    </select>
    <br/>
    <?php
        $gift_count = $vars['entity']->giftcount;
        for ($i=1;$i<=$gift_count;$i++)
        {
            echo elgg_echo('gifts:settings:title')." #$i";
            echo elgg_view('input/text',array('internalname'=>'params[gift_'.$i.']','value'=>get_plugin_setting('gift_'.$i, 'gifts')));
        }
    ?>
</p>