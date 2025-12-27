<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vibe Hub Media - Creative Agency</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white">
    <!-- Navigation -->
    <nav x-data="{ open: false }" class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-900">Vibe Hub Media</a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="{{ route('portfolio') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium transition">Portfolio</a>
                        <a href="#social" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium transition">Social Media</a>
                        <a href="{{ route('contact') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium transition">Contact</a>
                        <a href="#about" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium transition">About Us</a>
                        <a href="#collabs" class="text-gray-700 hover:text-gray-900 px-3 py-2 text-sm font-medium transition">Collabs</a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500">
                        <svg class="h-6 w-6" x-show="!open" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="h-6 w-6" x-show="open" x-cloak fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" x-cloak class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                <a href="{{ route('portfolio') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Portfolio</a>
                <a href="#social" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Social Media</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Contact</a>
                <a href="#about" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">About Us</a>
                <a href="#collabs" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Collabs</a>
            </div>
        </div>
    </nav>

    <!-- Video Banner -->
    <section class="relative w-full h-screen overflow-hidden">
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
            <source src="https://player.vimeo.com/progressive_redirect/playback/1135356788/rendition/720p/file.mp4?loc=external&signature=564a2c2795873ce08f61c28e6bd2fde8ba0cddff4742b61c7aef99b361a0370d" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <!-- Content -->
        <div class="relative z-10 flex items-center justify-center h-full">
            <div class="text-center px-4">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Vibe Hub Media</h1>
                <p class="text-xl md:text-2xl text-white">Creative Agency & Content Platform</p>
            </div>
        </div>
    </section>

    <!-- 6 Column Image/Video Grid -->
    <section id="portfolio" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Our Work</h2>
            
            @php
                // Get active media for each section (1-6) - passed from route or fetch here
                $sectionMediaData = $sectionMedia ?? [];
                if (empty($sectionMediaData)) {
                    for ($i = 1; $i <= 6; $i++) {
                        $sectionMediaData[$i] = \App\Models\Media::where('section', $i)
                            ->where('is_active', true)
                            ->latest()
                            ->first();
                    }
                }
                
                // Default images
                $defaultImages = [
                    1 => ['src' => '/img/2.JPG', 'alt' => 'Selahatin', 'type' => 'image'],
                    2 => ['src' => '/img/3.JPG', 'alt' => 'Image 3', 'type' => 'image'],
                    3 => ['src' => '/img/4.JPG', 'alt' => 'Image 4', 'type' => 'image'],
                    4 => ['src' => 'https://cdn.rickowens.eu/home_page_images/143997/RIQUADRO_BIANCO.png?1764758711', 'alt' => 'Riquadro bianco', 'type' => 'image'],
                    5 => [
                        'src' => 'https://cdn.rickowens.eu/home_page_images/144202/CANDLE_MOUSEOVER_1080_X_1350.png?1764758896',
                        'alt' => 'Candle mouseover',
                        'type' => 'video',
                        'video' => 'https://player.vimeo.com/progressive_redirect/playback/1135356788/rendition/720p/file.mp4?loc=external&signature=564a2c2795873ce08f61c28e6bd2fde8ba0cddff4742b61c7aef99b361a0370d'
                    ],
                    6 => ['src' => 'https://cdn.rickowens.eu/home_page_images/143997/RIQUADRO_BIANCO.png?1764758711', 'alt' => 'Riquadro bianco', 'type' => 'image'],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @for($i = 1; $i <= 6; $i++)
                    @php
                        $currentMedia = $sectionMediaData[$i] ?? null;
                        $item = $defaultImages[$i];
                        $imageUrl = $currentMedia ? $currentMedia->url : $item['src'];
                        $altText = $currentMedia ? ($currentMedia->alt_text ?? $currentMedia->original_filename) : $item['alt'];
                        $isVideo = $item['type'] === 'video' && !$currentMedia;
                    @endphp
                    
                    <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        @if($isVideo)
                            <div class="relative w-full" style="padding-bottom: 125%;">
                                <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover">
                                    <source src="{{ $item['video'] }}" type="video/mp4">
                                </video>
                                <img src="{{ $item['src'] }}" alt="{{ $altText }}" class="absolute top-0 left-0 w-full h-full object-cover">
                            </div>
                        @else
                            <div class="relative w-full overflow-hidden" style="padding-bottom: 125%;">
                                <img src="{{ $imageUrl }}" alt="{{ $altText }}" class="absolute top-0 left-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            </div>
                        @endif
                        
                        <!-- Overlay on hover -->
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-opacity duration-300 flex items-center justify-center">
                            <span class="text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                View Project
                            </span>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Vibe Hub Media</h3>
                    <p class="text-gray-400">Creative agency and content platform focused on helping brands and creators stand out in the digital world.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('portfolio') }}" class="hover:text-white transition">Portfolio</a></li>
                        <li><a href="#social" class="hover:text-white transition">Social Media</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Connect</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Instagram</a></li>
                        <li><a href="#" class="hover:text-white transition">Twitter</a></li>
                        <li><a href="#" class="hover:text-white transition">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Vibe Hub Media. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>

