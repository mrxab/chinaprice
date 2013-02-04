<?php
/**
 * Remove an Catalog.
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceCatalogRemoveProcessor extends modObjectRemoveProcessor  {
	public $checkRemovePermission = true;
	public $classKey = 'chinaPriceCatalog';
	public $languageTopics = array('chinaprice');

}
return 'chinaPriceCatalogRemoveProcessor';