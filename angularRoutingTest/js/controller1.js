//define the angular
angular
.module("firstApp",[])
//define the controller for this app
.controller("controller1",  function($scope){
	
	$scope.message = "I'm the first controller";

})
;