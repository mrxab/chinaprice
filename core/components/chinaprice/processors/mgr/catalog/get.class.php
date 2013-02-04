<?php
/**
 * Get an Catalog
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceCatalogGetProcessor extends modObjectGetProcessor {
	public $classKey = 'chinaPriceCatalog';
	public $languageTopics = array('chinaprice:default');
	public $objectType = 'chinaprice';
}

return 'chinaPriceCatalogGetProcessor';