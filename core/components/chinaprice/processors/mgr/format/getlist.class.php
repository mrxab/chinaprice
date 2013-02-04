<?php
/**
 * Get a list of Formats
 *
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceFormatGetListProcessor extends modObjectGetListProcessor {
	public $classKey = 'chinaPriceFormat';
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

return 'chinaPriceFormatGetListProcessor';