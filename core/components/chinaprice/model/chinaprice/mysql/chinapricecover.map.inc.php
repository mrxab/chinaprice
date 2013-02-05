<?php
/**
 * @package chinaprice
 */
$xpdo_meta_map['chinaPriceCover']= array (
  'package' => 'chinaprice',
  'version' => NULL,
  'table' => 'chinaprice_cover',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'name' => '0',
  ),
  'fieldMeta' => 
  array (
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '5',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
  ),
  'aggregates' => 
  array (
    'Cover' => 
    array (
      'class' => 'chinaPriceType',
      'local' => 'id',
      'foreign' => 'cover_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
