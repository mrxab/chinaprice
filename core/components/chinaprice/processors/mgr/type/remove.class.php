<?php
/**
 * Remove an Type.
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceTypeRemoveProcessor extends modObjectRemoveProcessor  {
	public $checkRemovePermission = true;
	public $classKey = 'chinaPriceType';
	public $languageTopics = array('chinaprice');

}
return 'chinaPriceTypeRemoveProcessor';