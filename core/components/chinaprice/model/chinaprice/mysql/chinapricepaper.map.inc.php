<?php
/**
 * @package chinaprice
 */
$xpdo_meta_map['chinaPricePaper']= array (
  'package' => 'chinaprice',
  'version' => NULL,
  'table' => 'chinaprice_paper',
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
    'Paper' => 
    array (
      'class' => 'chinaPriceType',
      'local' => 'id',
      'foreign' => 'paper_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
