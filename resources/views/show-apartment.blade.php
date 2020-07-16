@extends('layouts.main_layout')

@section('main')
  <div>
    <ul>
      <li>Nome {{$apartment['title']}}</li>
      <li>Descrizione {{$apartment['description']}}</li>
      <li>Numero camere {{$apartment['rooms_number']}}</li>
      <li>Numero letti {{$apartment['beds_number']}}</li>
      <li id="indirizzo">{{$apartment['address']}}</li>
      <input id="current-lat" type="hidden" name="" value="{{$apartment['lat']}}">
      <input id="current-lon" type="hidden" name="" value="{{$apartment['lon']}}">
  </div>
  <div id='map'></div>
  <style>
      #map {
        height: 500px;
        width: 500px;
    }
  </style>
@endsection
