<?php
/**
 * Get a list of Types
 *
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceTypeGetListProcessor extends modObjectGetListProcessor {
	public $classKey = 'chinaPriceType';
	public $defaultSortField = 'id';
	public $defaultSortDirection  = 'DESC';
	public $renderers = '';
	
	public function prepareQueryBeforeCount(xPDOQuery $c) {
		$c->select($this->modx->getSelectColumns('chinaPriceType','chinaPriceType'));
		$c->select(array(
			'catalog_name' => 'chinaPriceCatalog.name'
			,'format_name' => 'chinaPriceFormat.name'
			,'type_name' => 'chinaPriceType.name'
			,'paper_name' => 'chinaPricePaper.name'
			,'cover_name' => 'chinaPriceCover.name'

		));

		$c->leftJoin('chinaPriceCatalog','chinaPriceCatalog','chinaPriceCatalog.id = chinaPriceType.catalog_id');
		$c->leftJoin('chinaPriceFormat','chinaPriceFormat','chinaPriceFormat.id = chinaPriceType.format_id');
		$c->leftJoin('chinaPricePaper','chinaPricePaper','chinaPricePaper.id = chinaPriceType.paper_id');
		$c->leftJoin('chinaPriceCover','chinaPriceCover','chinaPriceCover.id = chinaPriceType.cover_id');
		return $c;
	}
/*
	public function prepareQueryAfterCount(xPDOQuery $c) {
		$c->select($this->modx->getSelectColumns('chinaPriceType','chinaPriceType'));
		$c->select(array(
			'catalog_name' => 'chinaPriceCatalog.name',
		));

		return $c;
	}
*/

	public function prepareRow(xPDOObject $object) {
		$array = $object->toArray();
		$array['misc_name'] = $array['catalog_name']  .' - '. $array['format_name'] .' - '. $array['paper_name'] .' - '. $array['cover_name'] ;
		return $array;
	}
	
}

return 'chinaPriceTypeGetListProcessor';