<?php
/**
 * Create an Format
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceFormatCreateProcessor extends modObjectCreateProcessor {
	public $classKey = 'chinaPriceFormat';
	public $languageTopics = array('chinaprice');
	public $permission = 'new_document';
	
	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('chinaPriceFormat',array(
			'name' => $this->getProperty('name'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name',$this->modx->lexicon('chinaprice.item_err_ae'));
		}
		return !$this->hasErrors();
	}
	
}

return 'chinaPriceFormatCreateProcessor';