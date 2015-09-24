app.controller('productionCtrl',['$scope','Restangular',function($scope,Restangular){

$scope.populate_productions = function(){
	var loaded_Items = Restangular.all('get_previous_productions');
        loaded_Items.getList().then(function(events) {
           $scope.productions = events;
        })
}
$scope.populate_productions();
}]);