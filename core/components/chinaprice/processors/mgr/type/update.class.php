<?php
/**
 * Update an Type
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceTypeUpdateProcessor extends modObjectUpdateProcessor {
	public $classKey = 'chinaPriceType';
	public $languageTopics = array('chinaprice');
	public $permission = 'update_document';
}

return 'chinaPriceTypeUpdateProcessor';