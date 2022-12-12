@if($info['similar'] ?? '')
            {{$info['similar']}}
            @else
            {{$info['hno']}}
            @endif
