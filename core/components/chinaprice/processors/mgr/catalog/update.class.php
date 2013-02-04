<?php
/**
 * Update an Catalog
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceCatalogUpdateProcessor extends modObjectUpdateProcessor {
	public $classKey = 'chinaPriceCatalog';
	public $languageTopics = array('chinaprice');
	public $permission = 'update_document';
}

return 'chinaPriceCatalogUpdateProcessor';