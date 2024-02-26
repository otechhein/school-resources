@extends('layout')
@section('title', 'Welcome | Laravel')

@section('content')
    @php
        $is_admin = true;

        $num1 = 5;
        $num2 = 6;
        $sum = $num1 + $num2;
    @endphp
    
    @if($is_admin)
        <h1>He is admin</h1>
        <p>{{$sum}}</p>
    @endif
@endsection