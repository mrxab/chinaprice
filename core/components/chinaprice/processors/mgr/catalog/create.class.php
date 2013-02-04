<?php
/**
 * Create an Item
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceCatalogCreateProcessor extends modObjectCreateProcessor {
	public $classKey = 'chinaPriceCatalog';
	public $languageTopics = array('chinaprice');
	public $permission = 'new_document';
	
	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('chinaPriceCatalog',array(
			'name' => $this->getProperty('name'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name',$this->modx->lexicon('chinaprice.item_err_ae'));
		}
		return !$this->hasErrors();
	}
	
}

return 'chinaPriceCatalogCreateProcessor';