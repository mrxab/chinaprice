<?php
/**
 * Create an Paper
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPricePaperCreateProcessor extends modObjectCreateProcessor {
	public $classKey = 'chinaPricePaper';
	public $languageTopics = array('chinaprice');
	public $permission = 'new_document';
	
	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('chinaPricePaper',array(
			'name' => $this->getProperty('name'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name',$this->modx->lexicon('chinaprice.item_err_ae'));
		}
		return !$this->hasErrors();
	}
	
}

return 'chinaPricePaperCreateProcessor';