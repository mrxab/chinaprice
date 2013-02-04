<?php
/**
 * Create an Type
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceTypeCreateProcessor extends modObjectCreateProcessor {
	public $classKey = 'chinaPriceType';
	public $languageTopics = array('chinaprice');
	public $permission = 'new_document';
	

	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('chinaPriceType',array(
			'name' => $this->getProperty('name'),
			'catalog_id' => $this->getProperty('catalog_id'),
			'format_id' => $this->getProperty('format_id'),
			'paper_id' => $this->getProperty('paper_id'),
			'cover_id' => $this->getProperty('cover_id'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name',$this->modx->lexicon('chinaprice.item_err_ae'));
		}
		return !$this->hasErrors();
	}

	
}

return 'chinaPriceTypeCreateProcessor';