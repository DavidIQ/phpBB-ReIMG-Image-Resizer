<?php
/**
* ReIMG extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 DavidIQ.com
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace davidiq\reimg\migrations\v30x;

/**
* Migration stage 1: Initial data changes to the database
*/
class m1_initial_data extends \phpbb\db\migration\migration
{
	/**
	* Add ReIMG data to the database.
	*
	* @return array Array of table data
	* @access public
	*/
	public function update_data()
	{
		return array(
			array('config.add', array('reimg_max_width', 640)),
			array('config.add', array('reimg_max_height', 480)),
			array('config.add', array('reimg_rel_width', 0)),
			array('config.add', array('reimg_swap_portrait', 1)),
			array('config.add', array('reimg_ignore_sig_img', false)),
			array('config.add', array('reimg_link', 'button_link')),
			array('config.add', array('reimg_zoom', '_litebox')),
		);
	}
}
