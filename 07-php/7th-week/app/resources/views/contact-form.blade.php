@extends('components.layout')

@section('title', 'Contact | Laravel')

@push('main-styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
@endpush

@section('content')
    <div class="container mt-5">
        <h2>Contact Form</h2>
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="form-group mt-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder=""
                    class="@error('name') is-invalid @enderror">
                {{-- @if ($errors->has('name'))
                    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                @endif --}}
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
            </div>

            <div class="form-group mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>

            <div class="form-group mt-3">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

@endsection

@push('scripts')
@endpush
