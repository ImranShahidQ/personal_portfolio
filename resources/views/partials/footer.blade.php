<footer class="footer">
    <div class="footer-container">
    <div class="footer-left">
        <div class="footer-brand">
        <img src="{{ asset('assets/images/icon.png') }}" alt="icon" />
        <h3>| Next Logic Hub</h3>
        </div>
        <p>
        Modern digital services & tranning institute empowering future
        creators.
        </p>
        <div class="footer-icons">
        <p><i class="fas fa-envelope"></i>imranshahid3207@gmail.com</p>
        <p><i class="fas fa-phone"></i>+92 301 2303207</p>
        <p><i class="fas fa-location-dot"></i>Shujabad, Multan, Pakistan</p>
        </div>
        <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
        </div>
    </div>
    <div class="footer-box">
        <div class="footer-links-grid">
        <div>
            <h3>Quick Links</h3>
            <ul>
                <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="{{ url('/courses') }}"><i class="fas fa-book"></i> Courses</a></li>
                <li><a href="{{ url('/services') }}"><i class="fas fa-server"></i> Services</a></li>
                <li><a href="{{ url('/projects') }}"><i class="fas fa-project-diagram"></i> Projects</a></li>
                <li><a href="{{ url('/about') }}"><i class="fas fa-info-circle"></i> About Us</a></li>
            </ul>
        </div>
        <div>
            <h3>Courses</h3>
            <ul class="courses-list">
                @foreach ($courses as $course)
                    <li>
                        <a href="{{ route('courses.show', $course['slug']) }}">
                            {{ $course['title'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        </div>
    </div>
    <div class="footer-box">
        <h3><i class="fas fa-phone"></i>Contact Us</h3>
        <form action="{{ url('/contact') }}" method="POST" class="footer-form">
        @csrf    
        <input type="text" name="name" placeholder="Your Name" required />
        <input
            type="email"
            name="email"
            placeholder="Your Email"
            required
        />
        <textarea
            name="message"
            rows="4"
            placeholder="Your Message"
            required
        ></textarea>
        <button type="submit">Send Message</button>
        </form>
    </div>
    </div>
    <div class="footer-bottom">
    <p>&copy; 2025 Next Logic Hub | All rights reserved.</p>
    </div>
</footer>