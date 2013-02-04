<?php
/**
 * Get an Cover
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceCoverGetProcessor extends modObjectGetProcessor {
	public $classKey = 'chinaPriceCover';
	public $languageTopics = array('chinaprice:default');
	public $objectType = 'chinaprice';
}

return 'chinaPriceCoverGetProcessor';