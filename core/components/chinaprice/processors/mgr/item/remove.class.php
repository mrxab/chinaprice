<?php
/**
 * Remove an Item.
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceItemRemoveProcessor extends modObjectRemoveProcessor  {
	public $checkRemovePermission = true;
	public $classKey = 'chinaPriceItem';
	public $languageTopics = array('chinaprice');

}
return 'chinaPriceItemRemoveProcessor';