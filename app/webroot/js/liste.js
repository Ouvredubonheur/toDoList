var list = angular.module('Liste', []);


list.controller('ListeController', function ListeController($scope) {
	$scope.remaining = 4;
	console.log($scope.lists);
});
