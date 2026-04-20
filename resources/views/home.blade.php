@extends('layouts.app')
@section('title', 'Next Logic Hub')
@section('content')

<section id="home" class="hero">
    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" />
    <h1>Learn | Create | Build</h1>
    <p>Empowering skills with modern technology & digital creativity.</p>
    <a href="{{ url('/courses') }}" class="btn">
        <i class="fas fa-book"></i> Explore Courses
    </a>
</section>
<section id="courses">
    <h2><i class="fas fa-book"></i> Our Courses</h2>
    <div class="grid">
        @foreach($courses as $course)
            <a href="{{ route('courses.show', $course['slug']) }}" class="card">
                <i class="{{ $course['icon'] }}"></i>
                <h3>{{ $course['title'] }}</h3>
            </a>
        @endforeach
    </div>
</section>
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
<section id="projects">
    <h2><i class="fa-solid fa-project-diagram"></i> Projects</h2>
    <div class="grid">
        <a href="{{ url('/projects?category=editing') }}" class="card project">
            Editing Showcase
        </a>

        <a href="{{ url('/projects?category=portfolio') }}" class="card project">
            Portfolio Websites
        </a>

        <a href="{{ url('/projects?category=business') }}" class="card project">
            Business Websites
        </a>

        <a href="{{ url('/projects?category=web-apps') }}" class="card project">
            Web Applications
        </a>
    </div>
</section>
<section id="about">
    <h2><i class="fas fa-info-circle"></i> About Us</h2>
    <p>
        Next Logic Hub is dedicated to empowering individuals with the skills
        and knowledge needed to thrive in the digital age. Our mission is to
        provide high-quality education and services in web development, digital
        marketing, graphic design, and more. We believe in fostering creativity,
        innovation, and continuous learning to help our community succeed. Next
        Logic Hub is a modern digital institute and services provider. We
        specialize in web development, digital marketing, graphic design, and
        video editing, offering a range of courses and services to help
        individuals and businesses excel in the digital world.
    </p>
</section>

@endsection
