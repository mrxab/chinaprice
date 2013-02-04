<?php
/**
 * Update an Paper
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPricePaperUpdateProcessor extends modObjectUpdateProcessor {
	public $classKey = 'chinaPricePaper';
	public $languageTopics = array('chinaprice');
	public $permission = 'update_document';
}

return 'chinaPricePaperUpdateProcessor';