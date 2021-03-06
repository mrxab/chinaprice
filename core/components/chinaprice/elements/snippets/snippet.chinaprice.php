<?php
/**
 * The base chinaPrice snippet.
 *
 * @package chinaprice
 */
$chinaPrice = $modx->getService('chinaprice','chinaPrice',$modx->getOption('chinaprice.core_path',null,$modx->getOption('core_path').'components/chinaprice/').'model/chinaprice/',$scriptProperties);
if (!($chinaPrice instanceof chinaPrice)) return '';

/**
 * Do your snippet code here. This demo grabs 5 items from our custom table.
 */
$tpl = $modx->getOption('tpl',$scriptProperties,'Item');
$sortBy = $modx->getOption('sortBy',$scriptProperties,'name');
$sortDir = $modx->getOption('sortDir',$scriptProperties,'ASC');
$limit = $modx->getOption('limit',$scriptProperties,5);
$outputSeparator = $modx->getOption('outputSeparator',$scriptProperties,"\n");

/* build query */
$c = $modx->newQuery('chinaPriceItem');
$c->sortby($sortBy,$sortDir);
$c->limit($limit);
$items = $modx->getCollection('chinaPriceItem',$c);

/* iterate through items */
$list = array();
foreach ($items as $item) {
	$itemArray = $item->toArray();
	$list[] = $chinaPrice->getChunk($tpl,$itemArray);
}

/* output */
$output = implode($outputSeparator,$list);
$toPlaceholder = $modx->getOption('toPlaceholder',$scriptProperties,false);
if (!empty($toPlaceholder)) {
	/* if using a placeholder, output nothing and set output to specified placeholder */
	$modx->setPlaceholder($toPlaceholder,$output);
	return '';
}
/* by default just return output */
return $output;