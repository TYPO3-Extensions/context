<?php
/***************************************************************
*  Copyright notice
*  
*  (c) 2009 Francois Suter (typo3@cobweb.ch)
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
 * Interface for the contextStorage hook of class tx_context
 *
 * @author		Francois Suter <typo3@cobweb.ch>
 * @package		TYPO3
 * @subpackage	tx_context
 *
 *  $Id$
 */
interface tx_context_ContextStorage {

	/**
	 * This method receives an array containing the context (simply a hash table)
	 * and should store it according to its needs
	 *
	 * @param	array		$context: List of key-value pairs
	 *
	 * @return	void
	 */
	public function storeContext($context);
}
?>