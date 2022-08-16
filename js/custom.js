$( document ).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});
			
			// Map Initial Location
			var initLatitude = 41.252767;
			var initLongitude = -96.000911;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : false),
					panControl: false,
					zoomControl: false,
					mapTypeControl: false,
					scaleControl: true,
					streetViewControl: false,
					overviewMapControl: false
				},
				scrollwheel: false,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 10
			};

			var map = $("#googlemaps").gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#googlemaps").gMap("centerAt", options);
			}