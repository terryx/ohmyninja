(function() {

    var app = angular.module('App');

    app.controller('PublicCtrl', ['$scope', '$facebook', '$location', 'GooglePlus', 'Restangular',
        function($scope, $facebook, $location, GooglePlus, Restangular) {

            $scope.user = {};

            //jQuery to collapse the navbar on scroll
            $(window).scroll(function() {
                if ($(".navbar").offset().top > 50) {
                    $(".navbar-fixed-top").addClass("top-nav-collapse");
                } else {
                    $(".navbar-fixed-top").removeClass("top-nav-collapse");
                }
            });

            //jQuery for page scrolling feature - requires jQuery Easing plugin
            $(function() {
                $('a.page-scroll').bind('click', function(event) {
                    var $anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500, 'easeInOutExpo');
                    event.preventDefault();
                });
            });

            $scope.refresh = function(platform) {

                if (platform === 'facebook') {
                    $facebook.api('/me').then(function(response) {
                        console.log(response)
                    });
                }

                if (platform === 'googleplus') {
                    GooglePlus.getUser().then(function(user) {
                        console.log(user);
                    });
                }

            }

            $scope.facebookLogin = function() {
                $facebook.login().then(function() {
                    $scope.refresh('facebook');
                });
            };

            $scope.googlePlusLogin = function() {
                GooglePlus.login().then(function() {
                    $scope.refresh('googleplus');
                })
            };

            $scope.register = function() {
                Restangular.one('api', 'user').one('register').post({
                    'email': $scope.user.email,
                    'password': $scope.user.password
                }).then(function(response) {

                    console.log(response);
                })
            }




        }
    ]);

})();
