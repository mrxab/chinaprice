<?php
/**
 * Get an Format
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceFormatGetProcessor extends modObjectGetProcessor {
	public $classKey = 'chinaPriceFormat';
	public $languageTopics = array('chinaprice:default');
	public $objectType = 'chinaprice';
}

return 'chinaPriceFormatGetProcessor';