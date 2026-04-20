@extends('layouts.app')

@section('title', 'Contact Us | Next Logic Hub')

@section('content')
<section id="contact">
    <h2><i class="fas fa-envelope"></i> Contact Us</h2>

    <div class="grid" style="max-width: 600px; margin: auto;">
        <div class="card">
            <form action="{{ url('/contact') }}" method="POST" class="footer-form">
                @csrf

                <input type="text" name="name" placeholder="Your Name" required>

                <input type="email" name="email" placeholder="Your Email" required>

                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>

                <button type="submit">
                     Send Message
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
