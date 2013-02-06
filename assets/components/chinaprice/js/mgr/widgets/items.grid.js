chinaPrice.grid.Items = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		id: 'chinaprice-grid-items'
		,url: chinaPrice.config.connector_url
		,baseParams: {
			action: 'mgr/item/getlist'
		}
		,fields: ['id','type_id', 'edition','page','price','misc_name']
		,autoHeight: true
		,paging: true
		,remoteSort: true
		,columns: [
			{header: _('id'),dataIndex: 'id',width: 20, sortable: true}
			,{header: _('chinaprice.item_type'),dataIndex: 'misc_name',width: 300, sortable: true}
			,{header: _('chinaprice.item_edition'),dataIndex: 'edition',width: 200, sortable: true}
			,{header: _('chinaprice.item_page'),dataIndex: 'page',width: 200, sortable: true}
			,{header: _('chinaprice.item_price'),dataIndex: 'price',width: 200, sortable: true}

		]
		,tbar: [{
			text: _('chinaprice.item_create')
			,handler: this.createItem
			,scope: this
		}
		,'->'
		,{
            xtype: 'chinaprice-combo-type'
            ,id: 'vfc'
            ,listeners: {'select': {fn: this.filterByCategory, scope:this}}
        }
		,{
            xtype: 'textfield'
            ,id: 'chinaprice-search-filter'
            ,emptyText: _('chinaprice.item_search')
            ,listeners: {
                'change': {fn:this.search,scope:this}
                ,'render': {fn: function(cmp) {
                    new Ext.KeyMap(cmp.getEl(), {
                        key: Ext.EventObject.ENTER
                        ,fn: function() {
                            this.fireEvent('change',this);
                            this.blur();
                            return true;
                        }
                        ,scope: cmp
                    });
                },scope:this}
            }
        },{
            xtype: 'button'
            ,id: 'modx-filter-clear'
            ,iconCls:'icon-reload'
            ,text: _('filter_clear')
            ,listeners: {
                'click': {fn: this.clearFilter, scope: this}
            }
        }
		]
	});
	chinaPrice.grid.Items.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice.grid.Items,MODx.grid.Grid,{
	windows: {}
    ,search: function(tf,nv,ov) {
        var s = this.getStore();
        s.baseParams.query = tf.getValue();
        this.getBottomToolbar().changePage(1);
        this.refresh();
    }
    ,clearFilter: function() {
    	this.getStore().baseParams = {
            action: 'mgr/item/getlist'
            ,'parent': this.config.resource
    	};
        Ext.getCmp('chinaprice-search-filter').reset();
    	this.getBottomToolbar().changePage(1);
        this.refresh();
    }
    ,filterByCategory: function(cb) {
		this.getStore().baseParams['category'] = cb.value;
		this.getBottomToolbar().changePage(1);
		this.refresh();
	}

	,getMenu: function() {
		var m = [];
		m.push({
			text: _('chinaprice.item_update')
			,handler: this.updateItem
		});
		m.push('-');
		m.push({
			text: _('chinaprice.dublicate')
			,handler: this.dublicateItem
		});
		m.push('-');
		m.push({
			text: _('chinaprice.item_remove')
			,handler: this.removeItem
		});

		this.addContextMenuItem(m);
	}
	
	,createItem: function(btn,e) {
		if (!this.windows.createItem) {
			this.windows.createItem = MODx.load({
				xtype: 'chinaprice-window-item-create'
				,listeners: {
					'success': {fn:function() { this.refresh(); },scope:this}
				}
			});
		}
		this.windows.createItem.fp.getForm().reset();
		this.windows.createItem.show(e.target);
	}
	,updateItem: function(btn,e) {
		if (!this.menu.record || !this.menu.record.id) return false;
		var r = this.menu.record;

		if (!this.windows.updateItem) {
			this.windows.updateItem = MODx.load({
				xtype: 'chinaprice-window-item-update'
				,record: r
				,listeners: {
					'success': {fn:function() { this.refresh(); },scope:this}
				}
			});
		}
		this.windows.updateItem.fp.getForm().reset();
		this.windows.updateItem.fp.getForm().setValues(r);
		this.windows.updateItem.show(e.target);
	}
	,dublicateItem: function(btn, e) {
		MODx.msg.confirm({
			title: _('chinaprice.dublicate'),
			text: _('chinaprice.dublicate'),
			url: this.config.url,
			params: {
				action: 'mgr/item/dublicate',
				id: this.menu.record.id
			},
			listeners: {
				'success': { fn:this.refresh, scope:this }
			}
		});
	}
	,removeItem: function(btn,e) {
		if (!this.menu.record) return false;
		
		MODx.msg.confirm({
			title: _('chinaprice.item_remove')
			,text: _('chinaprice.item_remove_confirm')
			,url: this.config.url
			,params: {
				action: 'mgr/item/remove'
				,id: this.menu.record.id
			}
			,listeners: {
				'success': {fn:function(r) { this.refresh(); },scope:this}
			}
		});
	}
});
Ext.reg('chinaprice-grid-items',chinaPrice.grid.Items);




chinaPrice.window.CreateItem = function(config) {
	config = config || {};
	this.ident = config.ident || 'mecitem'+Ext.id();
	Ext.applyIf(config,{
		title: _('chinaprice.item_create')
		,id: this.ident
		,height: 150
		,width: 475
		,url: chinaPrice.config.connector_url
		,action: 'mgr/item/create'
		,fields: [
			{xtype: 'chinaprice-combo-type',fieldLabel: _('chinaprice.item_type'),name: 'type_id',id: 'chinaprice-'+this.ident+'-type',width: 300}
			,{xtype: 'textfield',fieldLabel: _('chinaprice.item_edition'),name: 'edition',id: 'chinaprice-'+this.ident+'-edition',width: 300}
			,{xtype: 'textfield',fieldLabel: _('chinaprice.item_page'),name: 'page',id: 'chinaprice-'+this.ident+'-page',width: 300}
			,{xtype: 'textfield',fieldLabel: _('chinaprice.item_price'),name: 'price',id: 'chinaprice-'+this.ident+'-price',width: 300}
		]
	});
	chinaPrice.window.CreateItem.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice.window.CreateItem,MODx.Window);
Ext.reg('chinaprice-window-item-create',chinaPrice.window.CreateItem);


chinaPrice.window.UpdateItem = function(config) {
	config = config || {};
	this.ident = config.ident || 'meuitem'+Ext.id();
	Ext.applyIf(config,{
		title: _('chinaprice.item_update')
		,id: this.ident
		,height: 150
		,width: 475
		,url: chinaPrice.config.connector_url
		,action: 'mgr/item/update'
		,fields: [
			{xtype: 'hidden',name: 'id',id: 'chinaprice-'+this.ident+'-id'}
			,{xtype: 'chinaprice-combo-type',fieldLabel: _('chinaprice.item_type'),name: 'type_id',id: 'chinaprice-'+this.ident+'-type',width: 300}
			,{xtype: 'textfield',fieldLabel: _('chinaprice.item_edition'),name: 'edition',id: 'chinaprice-'+this.ident+'-edition',width: 300}
			,{xtype: 'textfield',fieldLabel: _('chinaprice.item_page'),name: 'page',id: 'chinaprice-'+this.ident+'-page',width: 300}
			,{xtype: 'textfield',fieldLabel: _('chinaprice.item_price'),name: 'price',id: 'chinaprice-'+this.ident+'-price',width: 300}
		]
	});
	chinaPrice.window.UpdateItem.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice.window.UpdateItem,MODx.Window);
Ext.reg('chinaprice-window-item-update',chinaPrice.window.UpdateItem);