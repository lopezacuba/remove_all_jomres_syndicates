<?php
 
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('JOMRES_DELETEREGISTRYREBUILD', "Remove Syndicates");
jr_define('JOMRES_DELETEREGISTRYREBUILD_NOTES', "Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to delete & rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to delete & rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
jr_define('JOMRES_DELETEREGISTRYREBUILD_SUCCESS', "All Jomres Syndicate Files and Database Tables Removed or Deleted Successfully!");
jr_define('JOMRES_DELETEREGISTRYREBUILD_FAILURE', "There was an error deleteing the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.");

jr_define('REMOVED_FILES_DONE_01', "File has been removed: j06000cron_syndication_get_syndicate_domains.class.php<br>");
jr_define('REMOVED_FILES_DONE_02', "File has been removed: j00005register_site.class.php<br>");
jr_define('REMOVED_FILES_DONE_03', "File has been removed: j16000jomres_syndication_overview.class.php<br>");
jr_define('REMOVED_FILES_DONE_04', "File has been removed: j16000rest_api_connectivity_test.class.php<br>");
jr_define('REMOVED_FILES_DONE_05', "File has been removed: j07310watcher_authmethod_process_app_server.class.php<br>");
jr_define('REMOVED_FILES_DONE_06', "File has been removed: j00061y_syndicated_properties.class.php<br>");
jr_define('REMOVED_FILES_DONE_07', "File has been removed: j06000cron_syndication_check_syndicate_domains.class.php<br>");
jr_define('REMOVED_FILES_DONE_08', "File has been removed: j06000cron_syndication_check_syndicate_properties.class.php<br>");
jr_define('REMOVED_FILES_DONE_09', "File has been removed: j06000cron_syndication_get_syndicate_properties.class.php<br>");
jr_define('REMOVED_FILES_DONE_10', "File has been removed: j06000show_syndicated_properties.class.php<br>");
jr_define('REMOVED_FILES_DONE_11', "File has been removed: jomres_syndicate_guests.class.php<br>");
jr_define('REMOVED_FILES_DONE_12', "File has been removed: jomres_syndicate_properties.class.php<br>");
jr_define('REMOVED_FILES_DONE_13', "File has been removed: j00061a_poweredby.class.php<br>");

jr_define('REMOVED_TABLES_DONE_01', "Table has been removed: __jomres_syndication_distances<br>");
jr_define('REMOVED_TABLES_DONE_02', "Table has been removed: __jomres_syndication_domains<br>");
jr_define('REMOVED_TABLES_DONE_03', "Table has been removed: __jomres_syndication_properties<br>");






