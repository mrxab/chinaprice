<?php
/**
 * @package chinaprice
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/chinapricecatalog.class.php');
class chinaPriceCatalog_mysql extends chinaPriceCatalog {}
?>