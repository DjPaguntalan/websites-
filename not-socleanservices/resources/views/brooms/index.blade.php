@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    @if(count($brooms)>0)
    @foreach($brooms as $broom)

<div>
    <h3>
        <a href="{{ route('brooms.show', ['broom' => $broom['id']])}}">{{$broom['name']}}</a>
    </h3>
    <ul>
            <li>
                Made by: {{$broom['brand']}}
            </li>
        </ul>
</div>
@endforeach
@else
<h2> There are no brooms available </h2>
@endif
</div>
@endsection 