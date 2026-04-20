@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>

    <div class="stats">
        <div class="card">
            Total Courses<br>
            <strong>{{ $stats['courses'] }}</strong>
        </div>

        <div class="card">
            Total Projects<br>
            <strong>{{ $stats['projects'] }}</strong>
        </div>

        <div class="card">
            Total Messages<br>
            <strong>{{ $stats['contacts'] }}</strong>
        </div>

        <div class="card">
            Total Students<br>
            <strong>{{ $stats['students'] }}</strong>
        </div>
    </div>
</div>
@endsection
