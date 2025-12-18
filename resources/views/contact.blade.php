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
                        07738865103
                    </a>
                </div>
                
                <div class="contact-item" style="margin-bottom: 1.5rem;">
                    <h3 style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.5rem; color: #666;">WhatsApp</h3>
                    <a href="https://wa.me/27738865103" target="_blank" style="color: #25D366; text-decoration: none; font-size: 1.1rem; display: inline-block;">
                        07738865103
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
                        <a href="https://instagram.com/vibehub.media" target="_blank" style="color: #E4405F; text-decoration: none; font-size: 1.1rem; display: inline-flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                            vibehub.media
                        </a>
                    </div>
                    
                    <div class="social-item">
                        <h3 style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.5rem; color: #666;">TikTok</h3>
                        <a href="https://tiktok.com/@vibehubmedia" target="_blank" style="color: #000; text-decoration: none; font-size: 1.1rem; display: inline-flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                            </svg>
                            Vibehubmedia
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

