<?php
/**
 * Update an Item
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceItemUpdateProcessor extends modObjectUpdateProcessor {
	public $classKey = 'chinaPriceItem';
	public $languageTopics = array('chinaprice');
	public $permission = 'update_document';
}

return 'chinaPriceItemUpdateProcessor';