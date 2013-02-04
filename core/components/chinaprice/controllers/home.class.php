<?php
/**
 * The home manager controller for chinaPrice.
 *
 * @package chinaprice
 */
class chinaPriceHomeManagerController extends chinaPriceMainController {
	public function process(array $scriptProperties = array()) {}
	
	public function getPageTitle() { return $this->modx->lexicon('chinaprice'); }
	
	public function loadCustomCssJs() {
		$this->modx->regClientStartupScript($this->chinaPrice->config['jsUrl'].'mgr/combo.js');
		$this->modx->regClientStartupScript($this->chinaPrice->config['jsUrl'].'mgr/widgets/catalogs.grid.js');
		$this->modx->regClientStartupScript($this->chinaPrice->config['jsUrl'].'mgr/widgets/formats.grid.js');
		$this->modx->regClientStartupScript($this->chinaPrice->config['jsUrl'].'mgr/widgets/papers.grid.js');
		$this->modx->regClientStartupScript($this->chinaPrice->config['jsUrl'].'mgr/widgets/covers.grid.js');
		$this->modx->regClientStartupScript($this->chinaPrice->config['jsUrl'].'mgr/widgets/types.grid.js');
		$this->modx->regClientStartupScript($this->chinaPrice->config['jsUrl'].'mgr/widgets/items.grid.js');
		$this->modx->regClientStartupScript($this->chinaPrice->config['jsUrl'].'mgr/widgets/home.panel.js');
		$this->modx->regClientStartupScript($this->chinaPrice->config['jsUrl'].'mgr/sections/home.js');
	}
	
	public function getTemplateFile() {
		return $this->chinaPrice->config['templatesPath'].'home.tpl';
	}
}