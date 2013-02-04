<?php
/**
 * Get an Item
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceItemGetProcessor extends modObjectGetProcessor {
	public $classKey = 'chinaPriceItem';
	public $languageTopics = array('chinaprice:default');
	public $objectType = 'chinaprice';
}

return 'chinaPriceItemGetProcessor';