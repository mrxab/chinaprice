<?php
/**
 * Create an Cover
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceCoverCreateProcessor extends modObjectCreateProcessor {
	public $classKey = 'chinaPriceCover';
	public $languageTopics = array('chinaprice');
	public $permission = 'new_document';
	
	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('chinaPriceCover',array(
			'name' => $this->getProperty('name'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name',$this->modx->lexicon('chinaprice.item_err_ae'));
		}
		return !$this->hasErrors();
	}
	
}

return 'chinaPriceCoverCreateProcessor';