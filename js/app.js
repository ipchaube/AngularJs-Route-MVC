/**
 * Created by Indu Prakash Chaube.
 */
var sampleApp = angular.module('induapp', ['ngRoute','ngAnimate']);

sampleApp.config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {
        //$locationProvider.html5Mode(true);

        $routeProvider.when('/add', {
            templateUrl: 'tmp/add.html',
            controller: 'AddController'
        }).when('/show', {
            templateUrl: 'tmp/show.html',
            controller: 'ShowController'
        }).otherwise({
            templateUrl: 'tmp/home.html'
        });

    }],
    function(helloWorldProvider){
        helloWorldProvider.setName('World');
    });


sampleApp.controller("AddController", function($scope, helloWorldProvider){
    "use strict";
    //Will use latter with provider
    //$scope.message = helloWorldProvider.sayHello();
    $scope.message= 'Message from AddController';

});

sampleApp.controller("ShowController", function($scope){
    "use strict";
    $scope.message= 'Message from ShowController';


});

//service style, probably the simplest one
sampleApp.service('helloWorldFromService', function() {
    this.sayHello = function() {
        return "Hello, World!"
    };
});

//factory style, more involved but more sophisticated
sampleApp.factory('helloWorldFromFactory', function() {
    return {
        sayHello: function() {
            return "Hello, World!"
        }
    };
});

//provider style, full blown, configurable version
sampleApp.provider('helloWorldProvider', function() {

    this.name = 'Default';

    this.$get = function() {
        var name = this.name;
        return {
            sayHello: function() {
                return "Hello, " + name + "!"
            }
        }
    };

    this.setName = function(name) {
        this.name = name;
    };
});

sampleApp.directive('myCustomer', function() {

    return {
        restrict: 'E',
        template: '<b>I am indu</b>'

    };
});