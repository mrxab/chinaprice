<?php
/**
 * Update an Cover
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceCoverUpdateProcessor extends modObjectUpdateProcessor {
	public $classKey = 'chinaPriceCover';
	public $languageTopics = array('chinaprice');
	public $permission = 'update_document';
}

return 'chinaPriceCoverUpdateProcessor';