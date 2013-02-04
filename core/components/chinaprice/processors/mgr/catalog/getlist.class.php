<?php
/**
 * Get a list of Catalogs
 *
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceCatalogGetListProcessor extends modObjectGetListProcessor {
	public $classKey = 'chinaPriceCatalog';
	public $defaultSortField = 'id';
	public $defaultSortDirection  = 'DESC';
	public $renderers = '';
	
	public function prepareQueryBeforeCount(xPDOQuery $c) {
		return $c;
	}

	public function prepareRow(xPDOObject $object) {
		$array = $object->toArray();
		return $array;
	}
	
}

return 'chinaPriceCatalogGetListProcessor';