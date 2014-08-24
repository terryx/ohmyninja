(function() {

    var app = angular.module('App');

    app.config(['$locationProvider', '$sceDelegateProvider',
        function($locationProvider, $sceDelegateProvider) {

            $locationProvider.html5Mode(true);

            $sceDelegateProvider.resourceUrlWhitelist([
                // Allow same origin resource loads.
                'self',
                // Allow loading from our assets domain.  Notice the difference between * and **.
            ]);
        }
    ]);


})();
