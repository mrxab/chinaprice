chinaPrice.panel.Home = function(config) {
	config = config || {};
	Ext.apply(config,{
		border: false
		,baseCls: 'modx-formpanel'
		,items: [{
			html: '<h2>'+_('chinaprice')+'</h2>'
			,border: false
			,cls: 'modx-page-header container'
		},{
			xtype: 'modx-tabs'
			,id: 'chinaprice-tabs-catalogs'
			,bodyStyle: 'padding: 10px'
			,defaults: { border: false ,autoHeight: true }
			,border: true
			,activeItem: 0
			,hideMode: 'offsets'
			,items: [{
				title: _('chinaprice.items')
				,items: [{
					html: _('chinaprice.item_intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'chinaprice-grid-items'
					,preventRender: true
				}]
			},{
				title: _('chinaprice.catalogs')
				,items: [{
					html: _('chinaprice.catalog_intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'chinaprice-grid-catalogs'
					,preventRender: true
				}]
			},{
				title: _('chinaprice.formats')
				,items: [{
					html: _('chinaprice.format_intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'chinaprice-grid-formats'
					,preventRender: true
				}]
			},{
				title: _('chinaprice.papers')
				,items: [{
					html: _('chinaprice.paper_intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'chinaprice-grid-papers'
					,preventRender: true
				}]
			},{
				title: _('chinaprice.covers')
				,items: [{
					html: _('chinaprice.cover_intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'chinaprice-grid-covers'
					,preventRender: true
				}]
			},{
				title: _('chinaprice.types')
				,items: [{
					html: _('chinaprice.type_intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'chinaprice-grid-types'
					,preventRender: true
				}]
			}]
		}]
	});
	chinaPrice.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice.panel.Home,MODx.Panel);
Ext.reg('chinaprice-panel-home',chinaPrice.panel.Home);

/*
MODx.combo.catalog = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		name: 'catalog_id'
		,hiddenName: 'catalog_id'
		,displayField: 'name'
		,valueField: 'id'
		,editable: false
		,fields: ['id','name']
		//,pageSize: 20
		,emptyText: _('catalog.select')
		,url: chinaPrice.config.connector_url
		,baseParams: {
			action: 'mgr/catalog/getlist'
		}
	});
	MODx.combo.catalog.superclass.constructor.call(this,config);
};
Ext.extend(MODx.combo.catalog,MODx.combo.ComboBox);
Ext.reg('chinaprice-combo-catalog',MODx.combo.catalog);
*/
