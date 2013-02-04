<?php
/**
 * Update an Format
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceFormatUpdateProcessor extends modObjectUpdateProcessor {
	public $classKey = 'chinaPriceFormat';
	public $languageTopics = array('chinaprice');
	public $permission = 'update_document';
}

return 'chinaPriceFormatUpdateProcessor';