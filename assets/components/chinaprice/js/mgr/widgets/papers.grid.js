chinaPrice.grid.Papers = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		id: 'chinaprice-grid-papers'
		,url: chinaPrice.config.connector_url
		,baseParams: {
			action: 'mgr/paper/getlist'
		}
		,fields: ['id','name']
		,autoHeight: true
		,paging: true
		,remoteSort: true
		,columns: [
			{header: _('id'),dataIndex: 'id',width: 70, sortable: true}
			,{header: _('chinaprice.paper_name'),dataIndex: 'name',width: 200, sortable: true}
		]
		,tbar: [{
			text: _('chinaprice.paper_create')
			,handler: this.createCatalog
			,scope: this
		}]
	});
	chinaPrice.grid.Papers.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice.grid.Papers,MODx.grid.Grid,{
	windows: {}

	,getMenu: function() {
		var m = [];
		m.push({
			text: _('chinaprice.paper_update')
			,handler: this.updateCatalog
		});
		m.push('-');
		m.push({
			text: _('chinaprice.paper_remove')
			,handler: this.removeCatalog
		});
		this.addContextMenuItem(m);
	}
	
	,createCatalog: function(btn,e) {
		if (!this.windows.createCatalog) {
			this.windows.createCatalog = MODx.load({
				xtype: 'chinaprice-window-paper-create'
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
				xtype: 'chinaprice-window-paper-update'
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
			title: _('chinaprice.paper_remove')
			,text: _('chinaprice.paper_remove_confirm')
			,url: this.config.url
			,params: {
				action: 'mgr/paper/remove'
				,id: this.menu.record.id
			}
			,listeners: {
				'success': {fn:function(r) { this.refresh(); },scope:this}
			}
		});
	}
});
Ext.reg('chinaprice-grid-papers',chinaPrice.grid.Papers);




chinaPrice.window.CreateCatalog = function(config) {
	config = config || {};
	this.ident = config.ident || 'mecpaper'+Ext.id();
	Ext.applyIf(config,{
		title: _('chinaprice.paper_create')
		,id: this.ident
		,height: 150
		,width: 475
		,url: chinaPrice.config.connector_url
		,action: 'mgr/paper/create'
		,fields: [
			{xtype: 'textfield',fieldLabel: _('chinaprice.paper_name'),name: 'name',id: 'chinaprice-'+this.ident+'-name',width: 300}
		]
	});
	chinaPrice.window.CreateCatalog.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice.window.CreateCatalog,MODx.Window);
Ext.reg('chinaprice-window-paper-create',chinaPrice.window.CreateCatalog);


chinaPrice.window.UpdateCatalog = function(config) {
	config = config || {};
	this.ident = config.ident || 'meupaper'+Ext.id();
	Ext.applyIf(config,{
		title: _('chinaprice.paper_update')
		,id: this.ident
		,height: 150
		,width: 475
		,url: chinaPrice.config.connector_url
		,action: 'mgr/paper/update'
		,fields: [
			{xtype: 'hidden',name: 'id',id: 'chinaprice-'+this.ident+'-id'}
			,{xtype: 'textfield',fieldLabel: _('chinaprice.paper_name'),name: 'name',id: 'chinaprice-'+this.ident+'-name',width: 300}
		]
	});
	chinaPrice.window.UpdateCatalog.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice.window.UpdateCatalog,MODx.Window);
Ext.reg('chinaprice-window-paper-update',chinaPrice.window.UpdateCatalog);