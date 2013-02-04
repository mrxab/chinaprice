<?php
/**
 * Get a list of Papers
 *
 * @package chinaprice
 * @subpackage processors
 */
class chinaPricePaperGetListProcessor extends modObjectGetListProcessor {
	public $classKey = 'chinaPricePaper';
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

return 'chinaPricePaperGetListProcessor';