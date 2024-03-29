<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Thomas "Thasmo" Deinhamer <thasmo@gmail.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * The viewhelper controller for testing viewhelpers
 *
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class Tx_Hype_Controller_MathController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	public function initializeAction() {
		
	}
	
	/**
	 * Display the index action.
	 *
	 * @return string
	 */
	public function indexAction() {
		$number = array(
			'value' => 536
		);	
		
		$this->view->assign('settings', $this->settings);
		$this->view->assign('number', $number);
	}
}
?>