<?php
/**
 * Remove an Paper.
 * 
 * @package chinaprice
 * @subpackage processors
 */
class chinaPricePaperRemoveProcessor extends modObjectRemoveProcessor  {
	public $checkRemovePermission = true;
	public $classKey = 'chinaPricePaper';
	public $languageTopics = array('chinaprice');

}
return 'chinaPricePaperRemoveProcessor';