  @foreach($objs as $one)
  <div class='room_io'>
   <a href="{{asset('room/'.$one->id)}}">room {{$one->id}}</a>
   </div>
  @endforeach