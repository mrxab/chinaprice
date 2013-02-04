<?php
/**
 * Properties for the chinaPrice snippet.
 *
 * @package chinaprice
 * @subpackage build
 */
$properties = array(
	array(
		'name' => 'tpl',
		'desc' => 'prop_chinaprice.tpl_desc',
		'type' => 'textfield',
		'options' => '',
		'value' => 'tpl.chinaPrice.item',
		'lexicon' => 'chinaprice:properties',
	),
	array(
		'name' => 'sortBy',
		'desc' => 'prop_chinaprice.sortby_desc',
		'type' => 'textfield',
		'options' => '',
		'value' => 'name',
		'lexicon' => 'chinaprice:properties',
	),
	array(
		'name' => 'sortDir',
		'desc' => 'prop_chinaprice.sortdir_desc',
		'type' => 'list',
		'options' => array(
			array('text' => 'ASC','value' => 'ASC'),
			array('text' => 'DESC','value' => 'DESC'),
		),
		'value' => 'ASC',
		'lexicon' => 'chinaprice:properties',
	),
	array(
		'name' => 'limit',
		'desc' => 'prop_chinaprice.limit_desc',
		'type' => 'numberfield',
		'options' => '',
		'value' => 5,
		'lexicon' => 'chinaprice:properties',
	),
	array(
		'name' => 'outputSeparator',
		'desc' => 'prop_chinaprice.outputseparator_desc',
		'type' => 'textfield',
		'options' => '',
		'value' => '',
		'lexicon' => 'chinaprice:properties',
	),
	array(
		'name' => 'toPlaceholder',
		'desc' => 'prop_chinaprice.toplaceholder_desc',
		'type' => 'combo-boolean',
		'options' => '',
		'value' => false,
		'lexicon' => 'chinaprice:properties',
	),
/*
	array(
		'name' => '',
		'desc' => 'prop_chinaprice.',
		'type' => 'textfield',
		'options' => '',
		'value' => '',
		'lexicon' => 'chinaprice:properties',
	),
	*/
);

return $properties;