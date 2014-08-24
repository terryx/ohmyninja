(function() {

    var app = angular.module('App');

    app.config(['GooglePlusProvider',
        function(GooglePlusProvider) {
            GooglePlusProvider.init({
                clientId: '776822318613-5hrn612o61m9uq011ggd5p2flljihvca.apps.googleusercontent.com',
                apiKey: 'AIzaSyCcup38LRsFNav7dVjaQXrTWkHj_-HLR98'
            });
        }
    ]);

})();
