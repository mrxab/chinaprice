<?php
/**
 * @package chinaprice
 */
$xpdo_meta_map['chinaPriceCatalog']= array (
  'package' => 'chinaprice',
  'version' => NULL,
  'table' => 'chinaprice_catalog',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'name' => '',
  ),
  'fieldMeta' => 
  array (
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '150',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
  ),
  'composites' => 
  array (
    'Catalog' => 
    array (
      'class' => 'chinaPriceType',
      'local' => 'id',
      'foreign' => 'catalog_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
