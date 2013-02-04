<?php
/**
 * Remove an Cover.
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPriceCoverRemoveProcessor extends modObjectRemoveProcessor  {
	public $checkRemovePermission = true;
	public $classKey = 'chinaPriceCover';
	public $languageTopics = array('chinaprice');

}
return 'chinaPriceCoverRemoveProcessor';