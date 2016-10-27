/**
 * Created by shashi on 4/16/15.
 */
'use strict';

$(document).ready(function () {
    /*$(window).scroll(function () {

        if ($(window).scrollTop() > 30)
            $('.navbar-fixed-top').removeClass('navbar-movable');
        else if ($(window).scrollTop() < 30)
            $('.navbar-fixed-top').addClass('navbar-movable');
    });*/

   createMarquee({});

});
angular.module('NicA', ['ui.bootstrap'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
})
    .controller('ImageSliderCtrl', function ($scope, $http, $window)  {

        $scope.myInterval = 5000;
        var slides = $scope.slides = [];

        $http.get('getAllSliderContents').success(function (data) {
            $scope.slides = data.data;
        }).error(function (data, status) {
            console.error('Error', status, data);
        }).finally(function () {
        });



    });