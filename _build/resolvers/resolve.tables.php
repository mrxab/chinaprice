<?php
/**
 * Resolve creating db tables
 *
 * @package chinaprice
 * @subpackage build
 */
if ($object->xpdo) {
	switch ($options[xPDOTransport::PACKAGE_ACTION]) {
		case xPDOTransport::ACTION_INSTALL:
			$modx =& $object->xpdo;
			$modelPath = $modx->getOption('chinaprice.core_path',null,$modx->getOption('core_path').'components/chinaprice/').'model/';
			$modx->addPackage('chinaprice',$modelPath);

			$manager = $modx->getManager();

			$manager->createObjectContainer('chinaPriceCatalog');
			$manager->createObjectContainer('chinaPriceFormat');
			$manager->createObjectContainer('chinaPricePaper');
			$manager->createObjectContainer('chinaPriceCover');
			$manager->createObjectContainer('chinaPriceType');
			$manager->createObjectContainer('chinaPriceItem');

			break;
		case xPDOTransport::ACTION_UPGRADE:
			break;
	}
}
return true;