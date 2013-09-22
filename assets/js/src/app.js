var Marionette = Backbone.Marionette,
    App = new Marionette.Application();

App.addRegions({
    'content': '#content',
    'footer': '.footer'
});

$(document).ajaxStart(function() {
    $('.loading-status').show();
})
$(document).ajaxStop(function() {
    $('.loading-status').hide();
});

App.start();

