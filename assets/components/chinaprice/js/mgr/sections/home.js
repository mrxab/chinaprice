Ext.onReady(function() {
	MODx.load({ xtype: 'chinaprice-page-home'});
});

chinaPrice.page.Home = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		components: [{
			xtype: 'chinaprice-panel-home'
			,renderTo: 'chinaprice-panel-home-div'
		}]
	}); 
	chinaPrice.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice.page.Home,MODx.Component);
Ext.reg('chinaprice-page-home',chinaPrice.page.Home);