성@extends('layout.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Pizza List
            </div>
            {{--                 <div style="display: none"> --}}
            {{--                     <p>{{$type}} - {{$base}} - {{$price}}$</p> --}}
            {{--                     @if($price > 15) --}}
            {{--                         <p>this pizza is expensive</p> --}}
            {{--                     @elseif($price < 5) --}}
            {{--                         <p>this pizza is cheap</p> --}}
            {{--                     @else --}}
            {{--                         <p>this pizza is normally priced</p> --}}
            {{--                     @endif --}}

            {{--                     @unless($base == 'cheesy crust') --}}
            {{--                         <p>you don't have a cheesy crust</p> --}}
            {{--                     @endunless --}}

            {{--                     @php --}}
            {{--                         $name = 'shoun'; --}}
            {{--                         echo($name); --}}
            {{--                     @endphp --}}
            {{--                 </div> --}}
            {{--                @for($i = 0; $i < 5; $i++)--}}
            {{--                    <p>the value of i is {{ $i }}</p>--}}
            {{--                @endfor--}}
            {{--                @for($i = 0; $i < count($pizzas); $i++)--}}
            {{--                    <p>{{ $pizzas[$i]['type'] }}</p>--}}
            {{--                @endfor--}}
            <p>{{ $name }}</p>
            <p>{{ $age }}</p>
            @foreach($pizzas as $pizza)
                <div>
                    {{ $loop->index+1 }} {{ $pizza['type'] }} - {{ $pizza['base'] }}
                    @if($loop->first)
                        <span>- first in the loop</span>
                    @endif
                    @if($loop->last)
                        <span>- last in the loop</span>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection

