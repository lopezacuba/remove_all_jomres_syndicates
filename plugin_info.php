<?php
/**
 *
 * @version Jomres 9.10.x
 *
 * @copyright	2018 Mark the Shark
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 *
 **/
 
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class plugin_info_remove_all_jomres_syndicates
	{
	function __construct()
		{
		$this->data=array(
			"name"=>"remove_all_jomres_syndicates",
			"category"=>"System",
			"marketing"=>"This Plugin will remove ALL Jomres Syndicates crap. To use this plugin. Go to Tools -> Remove Syndicates. If the Jomres App is down and you don't have a license you will not be able to edit your properties.",
			"version"=>"1.00",
			"description"=> "This Plugin will remove ALL Jomres Syndicates crap. To use this plugin. Go to Tools -> Remove Syndicates. If the Jomres App is down and you don't have a license you will not be able to edit your properties.",
			"lastupdate"=>"01/07/2021",
			"min_jomres_ver"=>"9.10.0",
			'third_party_plugin_latest_available_version' => "http://www.fixmycomputermark.com/jomrespluginsinfo/remove_all_jomres_syndicates.json",
			"manual_link"=>'',
			'change_log'=>'None.',
			'highlight'=>'',
			'image'=>'https://snippets.jomres.net/plugin_screenshots/2017-08-02_4tti8.png',
			'demo_url'=>'',
			 "developer_page" => "http://www.fixmycomputermark.com/free-downloads/file/124-remove_all_jomres_syndicates.html",
			"author"=>"Mark",
			"authoremail"=>"<a href=mailto:info@fixmycomputermark.com?subject=remove_all_jomres_syndicates>Email_Me</a>"
			);
		}
	}
?>