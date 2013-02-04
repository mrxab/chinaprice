chinaPrice.grid.Covers = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		id: 'chinaprice-grid-covers'
		,url: chinaPrice.config.connector_url
		,baseParams: {
			action: 'mgr/cover/getlist'
		}
		,fields: ['id','name']
		,autoHeight: true
		,paging: true
		,remoteSort: true
		,columns: [
			{header: _('id'),dataIndex: 'id',width: 70, sortable: true}
			,{header: _('name'),dataIndex: 'name',width: 200, sortable: true}
		]
		,tbar: [{
			text: _('chinaprice.cover_create')
			,handler: this.createCatalog
			,scope: this
		}]
	});
	chinaPrice.grid.Covers.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice.grid.Covers,MODx.grid.Grid,{
	windows: {}

	,getMenu: function() {
		var m = [];
		m.push({
			text: _('chinaprice.cover_update')
			,handler: this.updateCatalog
		});
		m.push('-');
		m.push({
			text: _('chinaprice.cover_remove')
			,handler: this.removeCatalog
		});
		this.addContextMenuItem(m);
	}
	
	,createCatalog: function(btn,e) {
		if (!this.windows.createCatalog) {
			this.windows.createCatalog = MODx.load({
				xtype: 'chinaprice-window-cover-create'
				,listeners: {
					'success': {fn:function() { this.refresh(); },scope:this}
				}
			});
		}
		this.windows.createCatalog.fp.getForm().reset();
		this.windows.createCatalog.show(e.target);
	}
	,updateCatalog: function(btn,e) {
		if (!this.menu.record || !this.menu.record.id) return false;
		var r = this.menu.record;

		if (!this.windows.updateCatalog) {
			this.windows.updateCatalog = MODx.load({
				xtype: 'chinaprice-window-cover-update'
				,record: r
				,listeners: {
					'success': {fn:function() { this.refresh(); },scope:this}
				}
			});
		}
		this.windows.updateCatalog.fp.getForm().reset();
		this.windows.updateCatalog.fp.getForm().setValues(r);
		this.windows.updateCatalog.show(e.target);
	}
	
	,removeCatalog: function(btn,e) {
		if (!this.menu.record) return false;
		
		MODx.msg.confirm({
			title: _('chinaprice.cover_remove')
			,text: _('chinaprice.cover_remove_confirm')
			,url: this.config.url
			,params: {
				action: 'mgr/cover/remove'
				,id: this.menu.record.id
			}
			,listeners: {
				'success': {fn:function(r) { this.refresh(); },scope:this}
			}
		});
	}
});
Ext.reg('chinaprice-grid-covers',chinaPrice.grid.Covers);




chinaPrice.window.CreateCatalog = function(config) {
	config = config || {};
	this.ident = config.ident || 'meccover'+Ext.id();
	Ext.applyIf(config,{
		title: _('chinaprice.cover_create')
		,id: this.ident
		,height: 150
		,width: 475
		,url: chinaPrice.config.connector_url
		,action: 'mgr/cover/create'
		,fields: [
			{xtype: 'textfield',fieldLabel: _('name'),name: 'name',id: 'chinaprice-'+this.ident+'-name',width: 300}
		]
	});
	chinaPrice.window.CreateCatalog.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice.window.CreateCatalog,MODx.Window);
Ext.reg('chinaprice-window-cover-create',chinaPrice.window.CreateCatalog);


chinaPrice.window.UpdateCatalog = function(config) {
	config = config || {};
	this.ident = config.ident || 'meucover'+Ext.id();
	Ext.applyIf(config,{
		title: _('chinaprice.cover_update')
		,id: this.ident
		,height: 150
		,width: 475
		,url: chinaPrice.config.connector_url
		,action: 'mgr/cover/update'
		,fields: [
			{xtype: 'hidden',name: 'id',id: 'chinaprice-'+this.ident+'-id'}
			,{xtype: 'textfield',fieldLabel: _('name'),name: 'name',id: 'chinaprice-'+this.ident+'-name',width: 300}
		]
	});
	chinaPrice.window.UpdateCatalog.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice.window.UpdateCatalog,MODx.Window);
Ext.reg('chinaprice-window-cover-update',chinaPrice.window.UpdateCatalog);