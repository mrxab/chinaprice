<?php
/**
 * Get a list of Covers
 *
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceCoverGetListProcessor extends modObjectGetListProcessor {
	public $classKey = 'chinaPriceCover';
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

return 'chinaPriceCoverGetListProcessor';