<?php
/**
 * @package chinaprice
 */
$xpdo_meta_map['chinaPriceFormat']= array (
  'package' => 'chinaprice',
  'version' => NULL,
  'table' => 'chinaprice_format',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'name' => 'A4',
  ),
  'fieldMeta' => 
  array (
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '5',
      'phptype' => 'string',
      'null' => false,
      'default' => 'A4',
    ),
  ),
  'aggregates' => 
  array (
    'Format' => 
    array (
      'class' => 'chinaPriceType',
      'local' => 'id',
      'foreign' => 'format_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
