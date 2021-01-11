<?php
 

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j16000remove_syndicates
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}


	
$query = "DROP TABLE IF EXISTS `#__jomres_syndication_distances` "; 
doInsertSql($query,"");
if ($query = " "){ echo jr_gettext("REMOVED_TABLES_DONE_01","REMOVED_TABLES_DONE_01",false); }

$query = "DROP TABLE IF EXISTS `#__jomres_syndication_domains` ";
doInsertSql($query,"");
if ($query = " "){ echo jr_gettext("REMOVED_TABLES_DONE_02","REMOVED_TABLES_DONE_02",false); }

$query = "DROP TABLE IF EXISTS `#__jomres_syndication_properties` ";
doInsertSql($query,"");
if ($query = " "){ echo jr_gettext("REMOVED_TABLES_DONE_03","REMOVED_TABLES_DONE_03",false); }

	
		if (file_exists(JOMRES_APP_ABSPATH.'j06000cron_syndication_get_syndicate_domains.class.php')) {
			unlink(JOMRES_APP_ABSPATH.'j06000cron_syndication_get_syndicate_domains.class.php');
			echo jr_gettext("REMOVED_FILES_DONE_01","REMOVED_FILES_DONE_01",false);
		}
		
		if (file_exists(JOMRES_APP_ABSPATH.'j00005register_site.class.php')) {
			unlink(JOMRES_APP_ABSPATH.'j00005register_site.class.php');
			echo jr_gettext("REMOVED_FILES_DONE_02","REMOVED_FILES_DONE_02",false);
		}
		
		if (file_exists(JOMRES_APP_ABSPATH.'j16000jomres_syndication_overview.class.php')) {
			unlink(JOMRES_APP_ABSPATH.'j16000jomres_syndication_overview.class.php');
			echo jr_gettext("REMOVED_FILES_DONE_03","REMOVED_FILES_DONE_03",false);
		}
		
 		if (file_exists(JOMRES_APP_ABSPATH.'j16000rest_api_connectivity_test.class.php')) {
			unlink(JOMRES_APP_ABSPATH.'j16000rest_api_connectivity_test.class.php');
			echo jr_gettext("REMOVED_FILES_DONE_04","REMOVED_FILES_DONE_04",false);
		}
		
		if (file_exists(JOMRES_APP_ABSPATH.'j07310watcher_authmethod_process_app_server.class.php')) {
			unlink(JOMRES_APP_ABSPATH.'j07310watcher_authmethod_process_app_server.class.php');
			echo jr_gettext("REMOVED_FILES_DONE_05","REMOVED_FILES_DONE_05",false);
		}
		
		if (file_exists(JOMRES_APP_ABSPATH.'j00061y_syndicated_properties.class.php')) {
			unlink(JOMRES_APP_ABSPATH.'j00061y_syndicated_properties.class.php');
			echo jr_gettext("REMOVED_FILES_DONE_06","REMOVED_FILES_DONE_06",false);
		}
		
		if (file_exists(JOMRES_APP_ABSPATH.'j06000cron_syndication_check_syndicate_domains.class.php')) {
			unlink(JOMRES_APP_ABSPATH.'j06000cron_syndication_check_syndicate_domains.class.php');
			echo jr_gettext("REMOVED_FILES_DONE_07","REMOVED_FILES_DONE_07",false);
		}
		
		if (file_exists(JOMRES_APP_ABSPATH.'j06000cron_syndication_check_syndicate_properties.class.php')) {
			unlink(JOMRES_APP_ABSPATH.'j06000cron_syndication_check_syndicate_properties.class.php');
			echo jr_gettext("REMOVED_FILES_DONE_08","REMOVED_FILES_DONE_08",false);
		}
		
		if (file_exists(JOMRES_APP_ABSPATH.'j06000cron_syndication_get_syndicate_properties.class.php')) {
			unlink(JOMRES_APP_ABSPATH.'j06000cron_syndication_get_syndicate_properties.class.php');
			echo jr_gettext("REMOVED_FILES_DONE_09","REMOVED_FILES_DONE_09",false);
		}
		
		if (file_exists(JOMRES_APP_ABSPATH.'j06000show_syndicated_properties.class.php')) {
			unlink(JOMRES_APP_ABSPATH.'j06000show_syndicated_properties.class.php');
			echo jr_gettext("REMOVED_FILES_DONE_10","REMOVED_FILES_DONE_10",false);
		}
		
		if (file_exists(JOMRES_APP_ABSPATH.'j00061a_poweredby.class.php')) {
			unlink(JOMRES_APP_ABSPATH.'j00061a_poweredby.class.php');
			echo jr_gettext("REMOVED_FILES_DONE_13","REMOVED_FILES_DONE_13",false);
		}
		
		if (file_exists(JOMRES_CLASSES_ABSPATH.'jomres_syndicate_guests.class.php')) {
			unlink(JOMRES_CLASSES_ABSPATH.'jomres_syndicate_guests.class.php');
			echo jr_gettext("REMOVED_FILES_DONE_11","REMOVED_FILES_DONE_11",false);
		}
		
		if (file_exists(JOMRES_CLASSES_ABSPATH.'jomres_syndicate_properties.class.php')) {
			unlink(JOMRES_CLASSES_ABSPATH.'jomres_syndicate_properties.class.php');
			echo jr_gettext("REMOVED_FILES_DONE_12","REMOVED_FILES_DONE_12",false);
		}



	}   


	public function getRetVals()
	{
		return null;
	}
}
