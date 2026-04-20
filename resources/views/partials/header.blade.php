<header class="header">
    <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Next Logic Hub Logo"/>
    </a>
    <div class="menu-toggle" id="menuToggle">
        <i class="fas fa-bars"></i>
    </div>
    <nav class="nav" id="navMenu">
        <div class="nav-close" id="navClose">
            <i class="fas fa-times"></i>
        </div>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
        <a href="{{ url('/courses') }}"><i class="fas fa-book"></i> Courses</a>
        <a href="{{ url('/services') }}"><i class="fas fa-server"></i> Services</a>
        <a href="{{ url('/projects') }}"><i class="fas fa-project-diagram"></i> Projects</a>
        <a href="{{ url('/about') }}"><i class="fas fa-info-circle"></i> About Us</a>
        <a href="{{ url('/contact') }}"><i class="fas fa-envelope"></i> Contact Us</a>
    </nav>
</header>