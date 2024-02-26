@extends('components.layout')

@section('title', 'Loop | Laravel')

@push('main-styles')
    <style>
        .red {
            color: red;
        }
    </style>
@endpush


@section('content')

    @foreach ($users as $user)
    <ul>
        <li class="{{$loop->even? 'red' : ''}}">{{$user['name']}}</li>
    </ul> 
    @endforeach

@endsection

@push('scripts')
    <script>
        window.alert("Welcome");
    </script>
@endpush

