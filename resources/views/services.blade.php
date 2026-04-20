@extends('layouts.app')

@section('title', 'Services | Next Logic Hub')

@section('content')
<section id="services">
    <h2><i class="fas fa-server"></i> Our Services</h2>

    <div class="grid">
        <div class="card">
            <i class="fas fa-laptop-code"></i>
            <h3>Web Development</h3>
        </div>

        <div class="card">
            <i class="fas fa-search"></i>
            <h3>SEO Optimization</h3>
        </div>

        <div class="card">
            <i class="fas fa-bullhorn"></i>
            <h3>Digital Marketing</h3>
        </div>

        <div class="card">
            <i class="fas fa-paint-brush"></i>
            <h3>Graphic Design</h3>
        </div>

        <div class="card">
            <i class="fas fa-video"></i>
            <h3>Video Production</h3>
        </div>

        <div class="card">
            <i class="fas fa-chart-line"></i>
            <h3>Analytics</h3>
        </div>
    </div>
</section>
@endsection
