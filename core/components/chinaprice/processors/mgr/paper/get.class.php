<?php
/**
 * Get an Paper
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPricePaperGetProcessor extends modObjectGetProcessor {
	public $classKey = 'chinaPricePaper';
	public $languageTopics = array('chinaprice:default');
	public $objectType = 'chinaprice';
}

return 'chinaPricePaperGetProcessor';