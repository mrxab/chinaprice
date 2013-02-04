var chinaPrice = function(config) {
	config = config || {};
	chinaPrice.superclass.constructor.call(this,config);
};
Ext.extend(chinaPrice,Ext.Component,{
	page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('chinaprice',chinaPrice);

chinaPrice = new chinaPrice();