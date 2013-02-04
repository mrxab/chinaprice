<?php
/**
 * @package chinaprice
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/chinapriceformat.class.php');
class chinaPriceFormat_mysql extends chinaPriceFormat {}
?>