pimcore.registerNS("pimcore.plugin.IkeaBundle");

pimcore.plugin.IkeaBundle = Class.create(pimcore.plugin.admin, {
    getClassName: function () {
        return "pimcore.plugin.IkeaBundle";
    },

    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function (params, broker) {
        // alert("IkeaBundle ready!");
    }
});

var IkeaBundlePlugin = new pimcore.plugin.IkeaBundle();
