<?php
/**
 * The main manager controller for chinaPrice.
 *
 * @package chinaprice
 */

require_once dirname(__FILE__) . '/model/chinaprice/chinaprice.class.php';

abstract class chinaPriceMainController extends modExtraManagerController {
	/** @var chinaPrice $chinaprice */
	public $chinaprice;

	public function initialize() {
		$this->chinaPrice = new chinaPrice($this->modx);
		
		$this->modx->regClientCSS($this->chinaPrice->config['cssUrl'].'mgr.css');
		$this->modx->regClientStartupScript($this->chinaPrice->config['jsUrl'].'mgr/chinaprice.js');
		$this->modx->regClientStartupHTMLBlock('<script type="text/javascript">
		Ext.onReady(function() {
			chinaPrice.config = '.$this->modx->toJSON($this->chinaPrice->config).';
			chinaPrice.config.connector_url = "'.$this->chinaPrice->config['connectorUrl'].'";
		});
		</script>');
		
		return parent::initialize();
	}

	public function getLanguageTopics() {
		return array('chinaprice:default');
	}

	public function checkPermissions() { return true;}
}

class IndexManagerController extends chinaPriceMainController {
	public static function getDefaultController() { return 'home'; }
}