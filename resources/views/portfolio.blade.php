@extends('layouts.app')

@section('content')
@include('partials.header')
@include('partials.navigation')

<section class="portfolio-page" style="padding: 80px 20px; min-height: 70vh;">
    <div class="container" style="max-width: 1400px; margin: 0 auto;">
        <h1 style="font-size: 2.5rem; margin-bottom: 3rem; text-align: center; font-weight: 300;">Portfolio</h1>
        
        <!-- Portfolio Grid -->
        @if($portfolioItems->count() > 0)
            <div class="portfolio-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 2rem; margin-top: 2rem;">
                @foreach($portfolioItems as $item)
                <div class="portfolio-card" style="background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;">
                    <div class="card-image" style="position: relative; width: 100%; padding-bottom: 75%; overflow: hidden; background: #f8f8f8;">
                        <img 
                            src="{{ $item->url }}" 
                            alt="{{ $item->title }}" 
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'"
                        />
                    </div>
                    <div class="card-content" style="padding: 1.5rem;">
                        <h2 style="font-size: 1.25rem; font-weight: 400; margin: 0; color: #000; text-align: center;">
                            {{ $item->title }}
                        </h2>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div style="text-align: center; padding: 4rem 2rem;">
                <p style="color: #666; font-size: 1.1rem;">No portfolio items available at the moment.</p>
            </div>
        @endif
    </div>
</section>

@include('partials.footer')
@endsection

@push('styles')
<style>
    .portfolio-page {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    }
    
    .portfolio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }
    
    .card-image {
        background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%);
    }
    
    @media (max-width: 768px) {
        .portfolio-page {
            padding: 40px 15px;
        }
        
        .portfolio-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        
        h1 {
            font-size: 2rem !important;
        }
        
        .card-content {
            padding: 1rem !important;
        }
        
        .card-content h2 {
            font-size: 1.1rem !important;
        }
    }
    
    @media (max-width: 480px) {
        .portfolio-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
        }
    }
</style>
@endpush

