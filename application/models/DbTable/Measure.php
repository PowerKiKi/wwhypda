<?php

/**
 * This is the DbTable class for Measure table
 * 
 * @author sylvain
 */
class My_Model_DbTable_Measure extends Zend_Db_Table_Abstract
{
	/** Table name **/
	protected $_name = 'Measure';
	
	/** Primary key name **/
	protected $_primary = 'id_Measure';
	
	/** The corresponding class name in our model **/
	protected $_rowClass = 'My_Model_Measure';
}

?>