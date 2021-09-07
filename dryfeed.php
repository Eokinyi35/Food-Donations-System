<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Dry Feeds</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

  <body>
    <div id="map"></div>

    <script>

       var customLabel = {
        Dry : {
          label: 'Dr'
        },
        Processed: {
          label: 'pr'
        },
        Perishable: {
          label: 'pe'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-1.287996, 36.823262),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('process5.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var donation_id = markerElem.getAttribute('donation_id');
              var donation_description = markerElem.getAttribute('donation_description');
              var donation_location = markerElem.getAttribute('donation_location');
              var donation_quantity = markerElem.getAttribute('donation_quantity');
              var donation_time = markerElem.getAttribute('donation_time');
              var donor_phone = markerElem.getAttribute('donor_phone');
              var FoodType = markerElem.getAttribute('FoodType');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = donation_description
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = donation_location
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));

              var number = document.createElement('number');
              number.textContent = donor_phone
              infowincontent.appendChild(number);

              var icon = customLabel[FoodType] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFbrkl0qAPg1--Ol7L9XNs5K_7HrdLC8g&callback=initMap">
    </script>
  </body>
</html>