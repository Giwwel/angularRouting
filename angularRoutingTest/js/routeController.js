//define the angular
angular
//module with all the controllers which are required
.module('mainApp', ['ngRoute','firstApp','secondApp'])
//config for routing
.config(['$routeProvider',
	         function($routeProvider) {
			    $routeProvider.
			    	//if route to controller1 -> call the template with controller1
			      	when('/controller1', {
			      		templateUrl: 'apps/controller1Test.php'
			      	}).
			      	//if route to controller2 -> call the template with controller2
			      	when('/controller2', {
			      		templateUrl: 'apps/controller2Test.php'
			     	})
			     	//if route that we don't know -> call index
			     	.otherwise({
			     		templateUrl: 'apps/index.php'
			     	});
			    	
			}
		])
;