chinaPrice.grid.Types = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		id: 'chinaprice-grid-types'
		,url: chinaPrice.config.connector_url
		,baseParams: {
			action: 'mgr/type/getlist'
		}
		,fields: ['id','name','catalog_id', 'format_id','paper_id','cover_id','catalog_name','format_name','paper_name','cover_name']
		,autoHeight: true
		,paging: true
		,remoteSort: true
		,columns: [
			{header: _('id'),dataIndex: 'id',width: 70, sortable: true}
			,{header: _('chinaprice.type_name'),dataIndex: 'name',width: 200, sortable: true}
			,{header: _('chinaprice.type_catalog'),dataIndex: 'catalog_name',width: 200, sortable: true}
			,{header: _('chinaprice.type_format'),dataIndex: 'format_name',width: 200, sortable: true}
			,{header: _('chinaprice.type_paper'),dataIndex: 'paper_name',width: 200, sortable: true}
			,{header: _('chinaprice.type_cover'),dataIndex: 'cover_name',width: 200, sortable: true}
		]
		,tbar: [{
			text: _('chinaprice.type_create')
			,handler: this.createType
			,scope: this
		}]
	});
	chinaPrice.grid.Types.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice.grid.Types,MODx.grid.Grid,{
	windows: {}

	,getMenu: function() {
		var m = [];
		m.push({
			text: _('chinaprice.type_update')
			,handler: this.updateType
		});
		m.push('-');
		m.push({
			text: _('chinaprice.type_remove')
			,handler: this.removeType
		});
		this.addContextMenuItem(m);
	}
	
	,createType: function(btn,e) {
		if (!this.windows.createType) {
			this.windows.createType = MODx.load({
				xtype: 'chinaprice-window-type-create'
				,listeners: {
					'success': {fn:function() { this.refresh(); },scope:this}
				}
			});
		}
		this.windows.createType.fp.getForm().reset();
		this.windows.createType.show(e.target);
	}
	,updateType: function(btn,e) {
		if (!this.menu.record || !this.menu.record.id) return false;
		var r = this.menu.record;

		if (!this.windows.updateType) {
			this.windows.updateType = MODx.load({
				xtype: 'chinaprice-window-type-update'
				,record: r
				,listeners: {
					'success': {fn:function() { this.refresh(); },scope:this}
				}
			});
		}
		this.windows.updateType.fp.getForm().reset();
		this.windows.updateType.fp.getForm().setValues(r);
		this.windows.updateType.show(e.target);
	}
	
	,removeType: function(btn,e) {
		if (!this.menu.record) return false;
		
		MODx.msg.confirm({
			title: _('chinaprice.type_remove')
			,text: _('chinaprice.type_remove_confirm')
			,url: this.config.url
			,params: {
				action: 'mgr/type/remove'
				,id: this.menu.record.id
			}
			,listeners: {
				'success': {fn:function(r) { this.refresh(); },scope:this}
			}
		});
	}
});
Ext.reg('chinaprice-grid-types',chinaPrice.grid.Types);




chinaPrice.window.CreateType = function(config) {
	config = config || {};
	this.ident = config.ident || 'mectype'+Ext.id();
	Ext.applyIf(config,{
		title: _('chinaprice.type_create')
		,id: this.ident
		,height: 150
		,width: 475
		,url: chinaPrice.config.connector_url
		,action: 'mgr/type/create'
		,fields: [
			{xtype: 'textfield',fieldLabel: _('chinaprice.type_name'),name: 'name',id: 'chinaprice-'+this.ident+'-name',width: 300}
			,{xtype: 'chinaprice-combo-catalog',fieldLabel: _('chinaprice.type_catalog'),name: 'catalog_id',id: 'chinaprice-'+this.ident+'-catalog',width: 300}
			,{xtype: 'chinaprice-combo-format',fieldLabel: _('chinaprice.type_format'),name: 'format_id',id: 'chinaprice-'+this.ident+'-format',width: 300}
			,{xtype: 'chinaprice-combo-paper',fieldLabel: _('chinaprice.type_paper'),name: 'paper_id',id: 'chinaprice-'+this.ident+'-paper',width: 300}
			,{xtype: 'chinaprice-combo-cover',fieldLabel: _('chinaprice.type_cover'),name: 'cover_id',id: 'chinaprice-'+this.ident+'-cover',width: 300}
		]
	});
	chinaPrice.window.CreateType.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice.window.CreateType,MODx.Window);
Ext.reg('chinaprice-window-type-create',chinaPrice.window.CreateType);


chinaPrice.window.UpdateType = function(config) {
	config = config || {};
	this.ident = config.ident || 'meutype'+Ext.id();
	Ext.applyIf(config,{
		title: _('chinaprice.type_update')
		,id: this.ident
		,height: 150
		,width: 475
		,url: chinaPrice.config.connector_url
		,action: 'mgr/type/update'
		,fields: [
			{xtype: 'hidden',name: 'id',id: 'chinaprice-'+this.ident+'-id'}
			,{xtype: 'textfield',fieldLabel: _('chinaprice.type_name'),name: 'name',id: 'chinaprice-'+this.ident+'-name',width: 300}
			,{xtype: 'chinaprice-combo-catalog',fieldLabel: _('chinaprice.type_catalog'),name: 'catalog_id',id: 'chinaprice-'+this.ident+'-catalog',width: 300}
			,{xtype: 'chinaprice-combo-format',fieldLabel: _('chinaprice.type_format'),name: 'format_id',id: 'chinaprice-'+this.ident+'-format',width: 300}
			,{xtype: 'chinaprice-combo-paper',fieldLabel: _('chinaprice.type_paper'),name: 'paper_id',id: 'chinaprice-'+this.ident+'-paper',width: 300}
			,{xtype: 'chinaprice-combo-cover',fieldLabel: _('chinaprice.type_cover'),name: 'cover_id',id: 'chinaprice-'+this.ident+'-cover',width: 300}
		]
	});
	chinaPrice.window.UpdateType.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice.window.UpdateType,MODx.Window);
Ext.reg('chinaprice-window-type-update',chinaPrice.window.UpdateType);