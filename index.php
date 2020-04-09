<!DOCTYPE html>
<html>

<head>
	<title>1705551098_Panji Wiratama Santoso</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Leaflet (JS/CSS) -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css">
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>

	<!-- Leaflet-Pointable -->
	<script src="https://unpkg.com/leaflet-pointable@0.0.3/leaflet-pointable.js"></script>
	
	<!-- Leaflet-KMZ -->
	<script src="https://unpkg.com/leaflet-kmz@0.3.0/dist/leaflet-kmz.js"></script>

	<style>
		html,
		body,
		.map {
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
		}
		
	</style>
</head>

<body>

	<div id="map" class="map"></div>

	<script>
	  var map = L.map('map').setView([-8.5000047,115.1869968], 10);

	  L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=RR9o7QUfjAF8NvJ7jXkz', {
                attribution:  '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>' ,
            }).addTo(map);

		// Instantiate KMZ parser (async)
		var kmzParser = new L.KMZParser({
			onKMZLoaded: function(layer, name) {
				control.addOverlay(layer, name);
				layer.addTo(map);
			},

		});
		// Add remote KMZ files as layers (NB if they are 3rd-party servers, they MUST have CORS enabled)
		kmzParser.load('bali-kabupaten.kmz');
		

	  var control = L.control.layers(null, null, { collapsed:true }).addTo(map);
	</script>
</body>

</html>
