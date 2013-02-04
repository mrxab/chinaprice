<?php
/**
 * @package chinaprice
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/chinapricecover.class.php');
class chinaPriceCover_mysql extends chinaPriceCover {}
?>