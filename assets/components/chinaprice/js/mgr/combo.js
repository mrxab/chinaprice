/**
 * Catalog combobox
 */
chinaPrice.combo.Catalog = function(config) {
    config = config || {};
    Ext.applyIf(config, {
        name: 'catalog_id',
		hiddenName: 'catalog_id',
		displayField: 'name',
		valueField: 'id',
		fields: ['id','name'],
		forceSelection: true,
		typeAhead: true,
		editable: false,
		allowBlank: true,
		autocomplete: true,
		url: chinaPrice.config.connector_url,
		baseParams: {
            action: 'mgr/catalog/getlist',
			combo: true
        }
    });
	
    chinaPrice.combo.Catalog.superclass.constructor.call(this, config);
};

Ext.extend(chinaPrice.combo.Catalog, MODx.combo.ComboBox);
Ext.reg('chinaprice-combo-catalog', chinaPrice.combo.Catalog);

/**
 * Format combobox
 */
chinaPrice.combo.Format = function(config) {
    config = config || {};
    Ext.applyIf(config, {
        name: 'format_id',
		hiddenName: 'format_id',
		displayField: 'name',
		valueField: 'id',
		fields: ['id','name'],
		forceSelection: true,
		FormatAhead: true,
		editable: false,
		allowBlank: true,
		autocomplete: true,
		url: chinaPrice.config.connector_url,
		baseParams: {
            action: 'mgr/format/getlist',
			combo: true
        }
    });
	
    chinaPrice.combo.Format.superclass.constructor.call(this, config);
};

Ext.extend(chinaPrice.combo.Format, MODx.combo.ComboBox);
Ext.reg('chinaprice-combo-format', chinaPrice.combo.Format);

/**
 * Paper combobox
 */
chinaPrice.combo.Paper = function(config) {
    config = config || {};
    Ext.applyIf(config, {
        name: 'paper_id',
		hiddenName: 'paper_id',
		displayField: 'name',
		valueField: 'id',
		fields: ['id','name'],
		forceSelection: true,
		FormatAhead: true,
		editable: false,
		allowBlank: true,
		autocomplete: true,
		url: chinaPrice.config.connector_url,
		baseParams: {
            action: 'mgr/paper/getlist',
			combo: true
        }
    });
	
    chinaPrice.combo.Paper.superclass.constructor.call(this, config);
};

Ext.extend(chinaPrice.combo.Paper, MODx.combo.ComboBox);
Ext.reg('chinaprice-combo-paper', chinaPrice.combo.Paper);

/**
 * Cover combobox
 */
chinaPrice.combo.Cover = function(config) {
    config = config || {};
    Ext.applyIf(config, {
        name: 'cover_id',
		hiddenName: 'cover_id',
		displayField: 'name',
		valueField: 'id',
		fields: ['id','name'],
		forceSelection: true,
		FormatAhead: true,
		editable: false,
		allowBlank: true,
		autocomplete: true,
		url: chinaPrice.config.connector_url,
		baseParams: {
            action: 'mgr/cover/getlist',
			combo: true
        }
    });
	
    chinaPrice.combo.Cover.superclass.constructor.call(this, config);
};

Ext.extend(chinaPrice.combo.Cover, MODx.combo.ComboBox);
Ext.reg('chinaprice-combo-cover', chinaPrice.combo.Cover);

/**
 * Type combobox
 */
chinaPrice.combo.Type = function(config) {
    config = config || {};
    Ext.applyIf(config, {
        name: 'type_id',
		hiddenName: 'type_id',
		displayField: 'misc_name',
		valueField: 'id',
		fields: ['id','misc_name', 'paper', 'cover'],
		forceSelection: true,
		FormatAhead: true,
		editable: false,
		allowBlank: true,
		autocomplete: true,
		url: chinaPrice.config.connector_url,
		baseParams: {
            action: 'mgr/type/getlist',
			combo: true
        }
    });
	
    chinaPrice.combo.Type.superclass.constructor.call(this, config);
};

Ext.extend(chinaPrice.combo.Type, MODx.combo.ComboBox);
Ext.reg('chinaprice-combo-type', chinaPrice.combo.Type);
