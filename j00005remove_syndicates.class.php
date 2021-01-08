<?php
 
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j00005remove_syndicates {
	function __construct() {
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch) { $this->template_touchable=false; return; }
		
		$ePointFilepath = get_showtime('ePointFilepath');

		// Include the language file.
		if (file_exists($ePointFilepath.'language'.JRDS.get_showtime('lang').'.php')) {
			require_once($ePointFilepath.'language'.JRDS.get_showtime('lang').'.php');
		}
		else {
			if (file_exists($ePointFilepath.'language'.JRDS.'en-GB.php')) {
				require_once($ePointFilepath.'language'.JRDS.'en-GB.php');
			}
		}

		
		$jomres_menu = jomres_singleton_abstract::getInstance('jomres_menu');
		$jomres_menu->add_admin_item(70, jr_gettext('JOMRES_DELETEREGISTRYREBUILD', 'JOMRES_DELETEREGISTRYREBUILD', false), $task = 'remove_syndicates', 'fa-refresh');
		
	}
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
