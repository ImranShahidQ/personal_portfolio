@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Message Details</h2>
    <p><strong>Name:</strong> {{ $message->name }}</p>
    <p><strong>Email:</strong> {{ $message->email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $message->message }}</p>
    <a style="background: #007cffb8;padding: 10px;border-radius: 10px;color: white;text-decoration: none;" href="{{ route('admin.contacts.index') }}"> ← Back </a>
</div>
@endsection
