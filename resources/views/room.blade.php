@extends('layouts.base')
@section('styles')
 <link rel="stylesheet" href="{{asset('css/room.css')}}" type="text/css"/>
@endsection
@section ('scripts')
	@parent
	<script src = "{{asset('js/room.js')}}">
	</script>
	@endsection
@section('content') 	
<h2 id="room" data-id="{{$url}}">Room {{$url}}</h2>
<p>{{$t_user}}</p>
<p>{{$text}}</p>
<div class = "success"> </div>
  @endsection