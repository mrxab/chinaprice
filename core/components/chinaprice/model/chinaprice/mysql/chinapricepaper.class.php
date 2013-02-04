<?php
/**
 * @package chinaprice
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/chinapricepaper.class.php');
class chinaPricePaper_mysql extends chinaPricePaper {}
?>