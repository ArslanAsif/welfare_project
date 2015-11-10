//initializing app variable as angular module
var app = angular.module('WelfareApp', ['ngRoute']);

//routes configuration of admin panel
app.config(function($routeProvider) {
	$routeProvider
	.when('/', {
		templateUrl: 'views/eventGallery.php'
	})
	.when('/eventTable', {
		templateUrl: 'views/eventTable.php'
	})
	.when('/eventAddForm', {
		templateUrl: 'views/eventAddForm.php'
	})
	.when('/editProfile', {
		templateUrl: 'views/editProfile.php'
	})
	.otherwise({
		redirectTo: '/'
	});

});

//update dynamically injected code so that it renders correctly with all js stuff
app.run(function($rootScope) {
	$rootScope.$on('$viewContentLoaded', function(values) {
		componentHandler.upgradeAllRegistered();
	});
});