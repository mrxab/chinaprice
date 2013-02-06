<?php
/**
 * @package chinaprice
 */
$xpdo_meta_map['chinaPriceType']= array (
  'package' => 'chinaprice',
  'version' => NULL,
  'table' => 'chinaprice_type',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'name' => '',
    'catalog_id' => 0,
    'format_id' => 0,
    'paper_id' => 0,
    'cover_id' => 0,
  ),
  'fieldMeta' => 
  array (
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'catalog_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'format_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'paper_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'cover_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
  'composites' => 
  array (
    'Item' => 
    array (
      'class' => 'chinaPriceItem',
      'local' => 'id',
      'foreign' => 'type_id',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
  'aggregates' => 
  array (
    'Catalogs' => 
    array (
      'class' => 'chinaPriceCatalog',
      'local' => 'catalog_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Formats' => 
    array (
      'class' => 'chinaPriceFormat',
      'local' => 'format_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Prices' => 
    array (
      'class' => 'chinaPricePrice',
      'local' => 'paper_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Covers' => 
    array (
      'class' => 'chinaPriceCover',
      'local' => 'cover_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
