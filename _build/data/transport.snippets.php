<?php
/**
 * Add snippets to build
 * 
 * @package chinaprice
 * @subpackage build
 */
$snippets = array();

$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
	'id' => 0,
	'name' => 'chinaPrice',
	'description' => 'Displays Items.',
	'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.chinaprice.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.chinaprice.php';
$snippets[0]->setProperties($properties);
unset($properties);

return $snippets;