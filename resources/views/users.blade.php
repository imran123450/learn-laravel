
{{--
{{$name}}
{{$age}}

{{$cost}}


<h3>City: {{ !empty($city)? $city : 'no city' }} </h3> --}}
@foreach($names as $id => $v)

    {{ $v['name'] }}, {{$v['city']}} <a href="{{route('view.user', $id)}}">Show</a><br>
   
@endforeach