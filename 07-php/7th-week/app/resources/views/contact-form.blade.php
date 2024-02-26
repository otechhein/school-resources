@extends('components.layout')

@section('title', 'Contact | Laravel')

@push('main-styles')
    
@endpush


@section('content')

    <form action="{{route('contact.store')}}" method="post">
        @csrf
        <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="input-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="Send">
    </form>

@endsection

@push('scripts')
@endpush

