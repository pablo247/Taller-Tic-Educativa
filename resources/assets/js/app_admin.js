(function () {
	// Init variables ckeditor
	window.CKEDITOR_BASEPATH = '/js/vendor/ckeditor/';
})();

try {
	window.$ = window.jQuery = require('jquery');
	
	require('./../../../node_modules/admin-lte/bower_components/bootstrap/dist/js/bootstrap');

	require('./../../../node_modules/admin-lte/plugins/iCheck/icheck');

	require('./../../../node_modules/admin-lte/dist/js/adminlte');

	require('ckeditor');

	require('./../../../node_modules/admin-lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min');
} catch (e) {}
