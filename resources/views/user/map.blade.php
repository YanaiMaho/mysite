@extends('layouts.user')
@section('title', '私の投稿')

@section('content')
@foreach($posts as $art)
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmvcMTyhzgcWPqN4Qnx_b8NUvSeagLhdc&callback=initMap"></script>
<script type="text/javascript">
  
  
  
  var map;
  var marker;
  var geocoder;
  function initMap() {
    geocoder = new google.maps.Geocoder();
    
    
    geocoder.geocode({
    'address': '{{ $art->address }}' //住所
    }, function(results, status) { 
      if (status === google.maps.GeocoderStatus.OK) {
      map = new google.maps.Map(document.getElementById('gmap'), {
        center: results[0].geometry.location,
        zoom: 17 //ズーム
     });
    marker = new google.maps.Marker({
    position: results[0].geometry.location,
    map: map
    });
    infoWindow = new google.maps.InfoWindow({
    content: '<h4>{{ $art->name }}</h4>'
    });
    marker.addListener('click', function() {
      infoWindow.open(map, marker); 
    });
    } else { 
      alert(status);
    }
  });
}

</script>
@endforeach
<div id="gmap"></div>
  
@endsection