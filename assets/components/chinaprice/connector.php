<?php
/**
 * chinaPrice Connector
 *
 * @package chinaprice
 */
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$corePath = $modx->getOption('chinaprice.core_path',null,$modx->getOption('core_path').'components/chinaprice/');
require_once $corePath.'model/chinaprice/chinaprice.class.php';
$modx->chinaprice = new chinaPrice($modx);

$modx->lexicon->load('chinaprice:default');

/* handle request */
$path = $modx->getOption('processorsPath',$modx->chinaprice->config,$corePath.'processors/');
$modx->request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));