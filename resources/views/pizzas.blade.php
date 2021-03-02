@extends('layouts.layout')
@section('content')
<div class="main">
    @foreach($pizzas as $pizza)
        <div>
            {{$pizza->name}} - {{$pizza->type}}
        </div>
    @endforeach
</div>
@endsection