<?php
session_start();
    $ID = $_SESSION['assoc'];
    if (!isset($_SESSION["assoc"])) {
    header('Location: login.php');
}
define("API_KEY","AIzaSyBFbrkl0qAPg1--Ol7L9XNs5K_7HrdLC8g")
?>
<!DOCTYPE html>
<html>
<style type="text/css">
  #add-point { float:left; } 
div.input { padding:3px 0; } 
label { display:block; font-size:80%; } 
input, select { width:150px; } 
button { float:right; } 
div.error { color:red; font-weight:bold; }
</style>
<head>
  <title></title>
</head>
<body>

<form id="add-point"action="map-service.php"method="POST">
  <input type="hidden"name="action"value="savepoint"id="action">
  <fieldset>
    <legend>Add a Point to the Map</legend>
    <div class="error" style="display:none;"></div>
    <div class="input">
      <label for="name">Location Name</label>
      <input type="text"name="name"id="name"value="">
    </div>
    <div class="input">
      <label for="address">Address</label>
      <input type="text"name="address"id="address"value="">
    </div>
    <button type="submit">Add Point</button>
  </fieldset>
</form>

<script type="text/javascript">
  $("#add-point").submit(function(){ 
  geoEncode(); 
  return false; 
});
  var geo = new GClientGeocoder(); 
var reasons=[]; 
reasons[G_GEO_SUCCESS] = "Success"; 
reasons[G_GEO_MISSING_ADDRESS] = "Missing Address"; 
reasons[G_GEO_UNKNOWN_ADDRESS] = "Unknown Address."; 
reasons[G_GEO_UNAVAILABLE_ADDRESS] = "Unavailable Address"; 
reasons[G_GEO_BAD_KEY] = "Bad API Key"; 
reasons[G_GEO_TOO_MANY_QUERIES] = "Too Many Queries"; 
reasons[G_GEO_SERVER_ERROR] ="Server error";

function geoEncode() { 
  var address = $("#add-point input[name=address]").val(); 
  geo.getLocations(address, function (result){ 
    if (result.Status.code == G_GEO_SUCCESS) { 
      geocode = result.Placemark[0].Point.coordinates; savePoint(geocode); 
    } else { 
      var reason="Code"+result.Status.code; 
      if (reasons[result.Status.code]) { 
        reason = reasons[result.Status.code] 
      } 
      $("#add-point .error").html(reason).fadeIn(); 
      geocode = false; 
    } 
  }); 
}
function savePoint(geocode) { 
  var data = $("#add-point :input").serializeArray(); 
  data[data.length] = { name:"lng", value: geocode[0] }; 
  data[data.length] = { name:"lat", value: geocode[1] }; 
  $.post($("#add-point").attr('action'), data, function(json){ 
    $("#add-point .error").fadeOut(); 
    if (json.status =="fail") { 
      $("#add-point .error").html(json.message).fadeIn(); 
    }
    if (json.status =="success") { 
      $("#add-point :input[name!=action]").val(""); 
      var location = json.data; addLocation(location); zoomToBounds(); 
    } 
  }, "json"); 
}
$("#add-point .error").hide(); 
if (json.status =="fail") { 
  $("#add-point .error").html(json.message).fadeIn(); 
}
if (json.status =="success") { 
  $("#add-point :input[name!=action]").val(""); 
  var location = json.data; 
  addLocation(location); 
  zoomToBounds(); 
}
function addLocation(location) { 
  var point = new GLatLng(location.lat, location.lng); 
  var marker = new GMarker(point); 
  map.addOverlay(marker); 
  bounds.extend(marker.getPoint()); 
  $("<li />")
    .html(location.name) 
    .click(function(){ 
      showMessage(marker, location.name); 
    }) 
    .appendTo("#list"); 
  GEvent.addListener(marker,"click", function(){ 
    showMessage(this); 
  }); 
}
function fail($message) { 
  die(json_encode(array('status' => 'fail', 'message' => $message))); 
}
$("#add-point .error").hide(); 
if (json.status =="fail") { 
  $("#add-point .error").html(json.message).fadeIn(); 
}
var bounds = new GLatLngBounds();
$.getJSON("php/map-service.php?action=listpoints", function(json) { 
  // do stuff in step #11 
});
if (json.Locations.length>0) { 
  for (i=0; i<json.Locations.length; i++) { 
    var location = json.Locations[i]; 
    addLocation(location); 
  } 
  zoomToBounds(); 
}


function zoomToBounds() { 
  map.setCenter(bounds.getCenter()); 
  map.setZoom(map.getBoundsZoomLevel(bounds)-1); 
}
</script>

</body>
</html>