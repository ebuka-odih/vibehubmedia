@extends('layouts.app')

@section('content')
@include('partials.header')
@include('partials.navigation')

<section class="contact-page" style="padding: 80px 20px; min-height: 70vh;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 2.5rem; margin-bottom: 3rem; text-align: center; font-weight: 300;">Contact Us</h1>
        
        <div class="contact-content" style="display: grid; gap: 2rem;">
            <!-- Contact Information -->
            <div class="contact-info" style="background: #f8f8f8; padding: 2rem; border-radius: 8px;">
                <h2 style="font-size: 1.5rem; margin-bottom: 1.5rem; font-weight: 400;">Get in Touch</h2>
                
                <div class="contact-item" style="margin-bottom: 1.5rem;">
                    <h3 style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.5rem; color: #666;">Phone</h3>
                    <a href="tel:+27738865103" style="color: #000; text-decoration: none; font-size: 1.1rem; display: inline-block;">
                        +27738865103
                    </a>
                </div>
                
                <div class="contact-item" style="margin-bottom: 1.5rem;">
                    <h3 style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.5rem; color: #666;">WhatsApp</h3>
                    <a href="https://wa.me/27738865103" target="_blank" style="color: #25D366; text-decoration: none; font-size: 1.1rem; display: inline-block;">
                        +27738865103
                    </a>
                </div>
                
                <div class="contact-item" style="margin-bottom: 1.5rem;">
                    <h3 style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.5rem; color: #666;">Email</h3>
                    <a href="mailto:info@vibehubmedia.co" style="color: #000; text-decoration: none; font-size: 1.1rem; display: inline-block;">
                        info@vibehubmedia.co
                    </a>
                </div>
            </div>
            
            <!-- Social Media Links -->
            <div class="social-media" style="background: #f8f8f8; padding: 2rem; border-radius: 8px;">
                <h2 style="font-size: 1.5rem; margin-bottom: 1.5rem; font-weight: 400;">Follow Us</h2>
                
                <div class="social-links" style="display: flex; gap: 1.5rem; flex-wrap: wrap;">
                    <div class="social-item">
                        <h3 style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.5rem; color: #666;">Instagram</h3>
                        <a href="https://instagram.com/vibehubmedia" target="_blank" style="color: #E4405F; text-decoration: none; font-size: 1.1rem; display: inline-block;">
                            @vibehubmedia
                        </a>
                    </div>
                    
                    <div class="social-item">
                        <h3 style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.5rem; color: #666;">TikTok</h3>
                        <a href="https://tiktok.com/@vibehubmedia" target="_blank" style="color: #000; text-decoration: none; font-size: 1.1rem; display: inline-block;">
                            @vibehubmedia
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.footer')
@endsection

@push('styles')
<style>
    .contact-page {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    }
    
    .contact-item a:hover,
    .social-item a:hover {
        text-decoration: underline;
    }
    
    @media (max-width: 768px) {
        .contact-page {
            padding: 40px 15px;
        }
        
        .contact-content {
            gap: 1.5rem;
        }
        
        .contact-info,
        .social-media {
            padding: 1.5rem;
        }
        
        h1 {
            font-size: 2rem !important;
        }
    }
</style>
@endpush

