<?php
/**
 * Get a list of Items
 *
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceItemGetListProcessor extends modObjectGetListProcessor {
	public $classKey = 'chinaPriceItem';
	public $defaultSortField = 'id';
	public $defaultSortDirection  = 'DESC';
	public $renderers = '';
	
	public function prepareQueryBeforeCount(xPDOQuery $c) {
		$c->select($this->modx->getSelectColumns('chinaPriceItem','chinaPriceItem'));
		$c->select(array(
			'catalog_name' => 'chinaPriceCatalog.name'
			,'format_name' => 'chinaPriceFormat.name'
			,'type_name' => 'chinaPriceType.name'
			,'paper_name' => 'chinaPricePaper.name'
			,'cover_name' => 'chinaPriceCover.name'

		));

#		if ($this->getProperty('sort',null)=='misc_name') {
#			$c->sortby('type_id','DESC');
#		}


		if ($query = $this->getProperty('query',null)) {
			$queryWhere = array(
				'type_id:' => $query
			);
			$c->where($queryWhere);
		}

		$c->leftJoin('chinaPriceType','chinaPriceType','chinaPriceType.id = chinaPriceItem.type_id');
		$c->leftJoin('chinaPriceCatalog','chinaPriceCatalog','chinaPriceCatalog.id = chinaPriceType.catalog_id');
		$c->leftJoin('chinaPriceFormat','chinaPriceFormat','chinaPriceFormat.id = chinaPriceType.format_id');
		$c->leftJoin('chinaPricePaper','chinaPricePaper','chinaPricePaper.id = chinaPriceType.paper_id');
		$c->leftJoin('chinaPriceCover','chinaPriceCover','chinaPriceCover.id = chinaPriceType.cover_id');
		return $c;
	}

	public function prepareRow(xPDOObject $object) {
		$array = $object->toArray();
		$array['misc_name'] = $array['catalog_name']  .' - '. $array['format_name'] .' - '. $array['paper_name'] .' - '. $array['cover_name'] ;
		return $array;
	}
	
}

return 'chinaPriceItemGetListProcessor';