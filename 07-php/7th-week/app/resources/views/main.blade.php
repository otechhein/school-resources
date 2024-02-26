@extends('components.layout')

@section('title', 'Partial Views Example')

@section('content')
    <h1>Welcome to main page.</h1>
    @include('sidebar')
@endsection