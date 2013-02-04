<?php
/**
 * @package chinaprice
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/chinapricetype.class.php');
class chinaPriceType_mysql extends chinaPriceType {}
?>