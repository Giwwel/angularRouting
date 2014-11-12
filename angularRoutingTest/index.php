<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html ng-app="mainApp">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF8">
		<title>Test for routing with angular</title>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular-route.js"></script>
		
		<!-- All controllers for the app must be included -->
		<script type="text/javascript" src="js/routeController.js"></script>
		<script type="text/javascript" src="js/controller1.js"></script>
		<script type="text/javascript" src="js/controller2.js"></script>
	</head>
	<body >		 
		<!--  Important for routing -->
		<!--  All templates are displayed here -->
		<div ng-view></div>
	</body>
</html>