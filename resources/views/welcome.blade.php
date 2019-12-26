@extends('layouts.base')
@section ('scripts')
@parent
<script src="{{asset('js/main.js')}}"></script>
@endsection
@section('content')
<div class="top_rooms">
  <div class='rooms'>

  </div>
</div>
<p class="fig"><img src="images/Spur0.png" width="800" height="400" alt="альтернативный текст"> </p>
<p class="cwd"><a href="{{asset('start')}}" target="_self" class="cwda" title="Старт">Старт</a></p>
  <img src="images/teleg.png" width="70" height="70" alt="альтернативный текст">  
  <img src="images/Twitter.png" width="70" height="70"  alt="альтернативный текст"> 
  <img src="images/vk.png" width="70" height="70" alt="альтернативный текст"> 
  <img src="images/instagram.jpg" width="70" height="70" alt="альтернативный текст"> 
@endsection