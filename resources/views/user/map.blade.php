@extends('layouts.user')
@section('title', '私の投稿')

@section('content')
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmvcMTyhzgcWPqN4Qnx_b8NUvSeagLhdcー&callback=initMap"></script>
<script>
  function initMap() {
    var mapPosition = new google.maps.LatLng( 35.6882495,139.6856557 );//緯度経度
    var map = new google.maps.Map(document.getElementById('gmap'), {
    zoom: 17,//ズーム
    center: mapPosition
  });
    var marker = new google.maps.Marker({
    position: mapPosition,
    map: map
    });
  }
</script>
<div id="gmap"></div>
@endsection