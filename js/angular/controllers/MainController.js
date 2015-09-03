app.controller('MainController', function() {
	this.text = 'yo';
	this.update_subheading = function(data) {
		this.text = data;
	}
});