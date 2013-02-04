<?php
/**
 * Remove an Format.
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceFormatRemoveProcessor extends modObjectRemoveProcessor  {
	public $checkRemovePermission = true;
	public $classKey = 'chinaPriceFormat';
	public $languageTopics = array('chinaprice');

}
return 'chinaPriceFormatRemoveProcessor';