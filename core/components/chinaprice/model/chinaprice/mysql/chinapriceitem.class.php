<?php
/**
 * @package chinaprice
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/chinapriceitem.class.php');
class chinaPriceItem_mysql extends chinaPriceItem {}
?>