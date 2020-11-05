@extends('layouts.user')
@section('title', 'mapから検索')

@section('content')

<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmvcMTyhzgcWPqN4Qnx_b8NUvSeagLhdc&callback=initMap"></script>
<script type="text/javascript">
  var map;
  var marker;
  var geocoder;
  
  function initMap() {
    geocoder = new google.maps.Geocoder();
    geocoder.geocode({
      'address': '日本' //住所
    }, function (results, status) {
      if (status === google.maps.GeocoderStatus.OK) {
        map = new google.maps.Map(document.getElementById('gmap'), {
          center: results[0].geometry.location,
          zoom: 6 //ズーム
        });
      } else {
        alert(status);
      }
    });
    @foreach($posts as $i => $art)
      geocoder = new google.maps.Geocoder();
      geocoder.geocode({
          'address': '{{ $art->address }}' //住所
        }, function (results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
            var marker_{{ $i }} = new google.maps.Marker({
              position: results[0].geometry.location,
              map: map
            });
            infoWindow_{{ $i }} = new google.maps.InfoWindow({
              content: '<h4>{{ $art->name }}</h4><img src="{{ $art->image }}" class="img">'
            });
             
            marker_{{ $i }}.addListener('click', function () {
              infoWindow_{{ $i }}.open(map, marker_{{ $i }});
            });
          }
        });
      @endforeach
    }
</script>

<div id="gmap"></div>
  
@endsection