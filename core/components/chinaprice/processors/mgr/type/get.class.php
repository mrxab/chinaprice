<?php
/**
 * Get an Type
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceTypeGetProcessor extends modObjectGetProcessor {
	public $classKey = 'chinaPriceType';
	public $languageTopics = array('chinaprice:default');
	public $objectType = 'chinaprice';
}

return 'chinaPriceTypeGetProcessor';