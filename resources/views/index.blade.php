@extends('layouts.app')

@section('content')
@include('partials.header')
@include('partials.banner')
@include('partials.navigation')

<div id='shop-men'></div>
<section class='home-page-wall men_section desktop' style='background: none !important; background-image: none !important;'>
<style>
  .wall-section-men .canvas-height {
    padding-bottom: 187%; }
    @media only screen and (max-width: 760px) {
      .wall-section-men .canvas-height {
        padding-bottom: 0; } }
</style>
<style>
  @media only screen and (min-width: 760px) {
    .wall-section-men #item-men-0 {
      position: absolute;
      padding-top: 40% !important;
      left: 0% !important;
      width: 100% !important; }
      .wall-section-men #item-men-0 h2 {
        position: relative;
        margin-left: 1% !important; } }
  @media only screen and (max-width: 760px) {
    .wall-section-men #item-men-0 h2 {
      margin-left: 1% !important; } }
</style>
<style>
  @media only screen and (min-width: 760px) {
    .wall-section-men #item-men-1 {
      position: absolute;
      padding-top: 4% !important;
      left: 3% !important;
      width: 46% !important; }
      .wall-section-men #item-men-1 h2 {
        position: relative;
        margin-left: 0% !important; } }
  @media only screen and (max-width: 760px) {
    .wall-section-men #item-men-1 h2 {
      margin-left: 0% !important; } }
</style>
<style>
  @media only screen and (min-width: 760px) {
    .wall-section-men #item-men-2 {
      position: absolute;
      padding-top: 4% !important;
      left: 52% !important;
      width: 46% !important; }
      .wall-section-men #item-men-2 h2 {
        position: relative;
        margin-left: 0% !important; } }
  @media only screen and (max-width: 760px) {
    .wall-section-men #item-men-2 h2 {
      margin-left: 0% !important; } }
</style>
<style>
  @media only screen and (min-width: 760px) {
    .wall-section-men #item-men-3 {
      position: absolute;
      padding-top: 66% !important;
      left: 3% !important;
      width: 46% !important; }
      .wall-section-men #item-men-3 h2 {
        position: relative;
        margin-left: 0% !important; } }
  @media only screen and (max-width: 760px) {
    .wall-section-men #item-men-3 h2 {
      margin-left: 0% !important; } }
</style>
<style>
  @media only screen and (min-width: 760px) {
    .wall-section-men #item-men-4 {
      position: absolute;
      padding-top: 66% !important;
      left: 52% !important;
      width: 46% !important; }
      .wall-section-men #item-men-4 h2 {
        position: relative;
        margin-left: 0% !important; } }
  @media only screen and (max-width: 760px) {
    .wall-section-men #item-men-4 h2 {
      margin-left: 0% !important; } }
</style>
<style>
  @media only screen and (min-width: 760px) {
    .wall-section-men #item-men-5 {
      position: absolute;
      padding-top: 66% !important;
      left: 52% !important;
      width: 46% !important; }
      .wall-section-men #item-men-5 h2 {
        position: relative;
        margin-left: 0% !important; } }
  @media only screen and (max-width: 760px) {
    .wall-section-men #item-men-5 h2 {
      margin-left: 0% !important; } }
</style>
<style>
  @media only screen and (min-width: 760px) {
    .wall-section-men #item-men-6 {
      position: absolute;
      padding-top: 170% !important;
      left: 0% !important;
      width: 100% !important; }
      .wall-section-men #item-men-6 h2 {
        position: relative;
        margin-left: 1% !important; } }
  @media only screen and (max-width: 760px) {
    .wall-section-men #item-men-6 h2 {
      margin-left: 1% !important; } }
</style>
<style>
  @media only screen and (min-width: 760px) {
    .wall-section-men #item-men-7 {
      position: absolute;
      padding-top: 128% !important;
      left: 3% !important;
      width: 46% !important; }
      .wall-section-men #item-men-7 h2 {
        position: relative;
        margin-left: 0% !important; } }
  @media only screen and (max-width: 760px) {
    .wall-section-men #item-men-7 h2 {
      margin-left: 0% !important; } }
</style>
<style>
  @media only screen and (min-width: 760px) {
    .wall-section-men #item-men-8 {
      position: absolute;
      padding-top: 128% !important;
      left: 52% !important;
      width: 46% !important; }
      .wall-section-men #item-men-8 h2 {
        position: relative;
        margin-left: 0% !important; } }
  @media only screen and (max-width: 760px) {
    .wall-section-men #item-men-8 h2 {
      margin-left: 0% !important; } }
</style>
<article>
<aside>
<ul>
<li class=''>
<a href="{{ route('portfolio') }}">Portfolio</a>
</li>
<li class=''>
<a href="https://instagram.com/vibehub.media" target="_blank">Social media</a>
</li>
<li class=''>
<a href="{{ route('contact') }}">Contact</a>
</li>
<li class=''>
<a href="{{ route('about') }}">About us</a>
</li>
<li class=''>
<a href="{{ route('collab') }}">Collabs</a>
</li>
</ul>
</aside>
<div class='custom-page desktop shop wall-section-men' style='background: none !important; background-image: none !important;'>
<article class='custom-page-content container-center'>
<div class='canvas-height' style='background: none !important; background-image: none !important;'></div>
<figure class='images'>
<div class='container-images'>
@php
    $defaultImages = [
        1 => ['src' => '/img/2.JPG', 'alt' => 'Selahatin'],
        2 => ['src' => '/img/3.JPG', 'alt' => 'Image 3'],
        3 => ['src' => '/img/4.JPG', 'alt' => 'Image 4'],
        4 => ['src' => 'https://cdn.rickowens.eu/home_page_images/143997/RIQUADRO_BIANCO.png?1764758711', 'alt' => 'Riquadro bianco'],
        5 => ['src' => 'https://cdn.rickowens.eu/home_page_images/144202/CANDLE_MOUSEOVER_1080_X_1350.png?1764758896', 'alt' => 'Candle mouseover 1080 x 1350', 'video' => 'https://player.vimeo.com/progressive_redirect/playback/1135356788/rendition/720p/file.mp4 (720p).mp4?loc=external&signature=564a2c2795873ce08f61c28e6bd2fde8ba0cddff4742b61c7aef99b361a0370d'],
        6 => ['src' => 'https://cdn.rickowens.eu/home_page_images/143997/RIQUADRO_BIANCO.png?1764758711', 'alt' => 'Riquadro bianco'],
    ];
@endphp
{{-- Section 1 --}}
<div class='image' id='item-men-1'>
<a href="#"><figure style='position: relative; width: 100%; padding-bottom: 125%; overflow: hidden;'>
@php
    $section1Media = $sectionMedia[1] ?? null;
    $section1Src = $section1Media ? $section1Media->url : $defaultImages[1]['src'];
    $section1Alt = $section1Media ? ($section1Media->alt_text ?? $section1Media->original_filename) : $defaultImages[1]['alt'];
@endphp
<img class="first-img" src="{{ $section1Src }}" alt="{{ $section1Alt }}" style='position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;' />
<h2></h2>
</figure>
</a></div>
{{-- Section 2 --}}
<div class='image' id='item-men-2'>
<a href="#"><figure style='position: relative; width: 100%; padding-bottom: 125%; overflow: hidden;'>
@php
    $section2Media = $sectionMedia[2] ?? null;
    $section2Src = $section2Media ? $section2Media->url : $defaultImages[2]['src'];
    $section2Alt = $section2Media ? ($section2Media->alt_text ?? $section2Media->original_filename) : $defaultImages[2]['alt'];
@endphp
<img class="first-img" src="{{ $section2Src }}" alt="{{ $section2Alt }}" style='position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;' />
<h2></h2>
</figure>
</a></div>
{{-- Section 3 --}}
<div class='image' id='item-men-3'>
<a href="#"><figure style='position: relative; width: 100%; padding-bottom: 125%; overflow: hidden;'>
@php
    $section3Media = $sectionMedia[3] ?? null;
    $section3Src = $section3Media ? $section3Media->url : $defaultImages[3]['src'];
    $section3Alt = $section3Media ? ($section3Media->alt_text ?? $section3Media->original_filename) : $defaultImages[3]['alt'];
@endphp
<img class="first-img" src="{{ $section3Src }}" alt="{{ $section3Alt }}" style='position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;' />
<h2></h2>
</figure>
</a></div>
{{-- Section 4 --}}
<div class='image' id='item-men-4' style='display: none;'></div>
{{-- Section 5 --}}
<div class='image' id='item-men-5'>
<a href="#"><figure>
@php
    $section5Media = $sectionMedia[5] ?? null;
    $section5Src = $section5Media ? $section5Media->url : $defaultImages[5]['src'];
    $section5Alt = $section5Media ? ($section5Media->alt_text ?? $section5Media->original_filename) : $defaultImages[5]['alt'];
@endphp
@if($section5Media)
    {{-- Custom uploaded image replaces video --}}
    <img class="first-img" src="{{ $section5Src }}" alt="{{ $section5Alt }}" style='width: 100%; height: auto' />
@else
    {{-- Default video --}}
    <video autoplay loop muted playsinline poster='{{ $defaultImages[5]['src'] }}' src='{{ $defaultImages[5]['video'] }}' style='width: 100%; height: auto' webkit-playsinline></video>
    <img class="secondary-img" src="{{ $defaultImages[5]['src'] }}" alt="{{ $defaultImages[5]['alt'] }}" />
@endif
<h2></h2>
</figure>
</a></div>
{{-- Section 6 --}}
<div class='image' id='item-men-6'>
<a href="#"><figure style='position: relative; width: 100%; padding-bottom: 125%; overflow: hidden;'>
@php
    $section6Media = $sectionMedia[6] ?? null;
    $section6Src = $section6Media ? $section6Media->url : $defaultImages[6]['src'];
    $section6Alt = $section6Media ? ($section6Media->alt_text ?? $section6Media->original_filename) : $defaultImages[6]['alt'];
@endphp
<img class="first-img" src="{{ $section6Src }}" alt="{{ $section6Alt }}" style='position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;' />
<h2></h2>
</figure>
</a></div>
<div class='image' id='item-men-7'>
<a href="#"><figure>
<video autoplay loop muted playsinline poster='https://cdn.rickowens.eu/home_page_images/144042/EXCLUSIVE_MOUSEOVER_1080_X_1350_copia.png?1764758741' src='https://player.vimeo.com/progressive_redirect/playback/1120065239/rendition/1080p/file.mp4?loc=external&amp;signature=464b740cdefe8d7274f16248773cffb8fee9517a17250249239be2f72b187560' style='width: 100%; height: auto' webkit-playsinline></video>
<img class="secondary-img" src="https://cdn.rickowens.eu/home_page_images/144042/EXCLUSIVE_MOUSEOVER_1080_X_1350_copia.png?1764758741" alt="Exclusive mouseover 1080 x 1350 copia" />
<h2></h2>
</figure>
</a></div>
<div class='image' id='item-men-8'>
<a href="#"><figure>
<video autoplay loop muted playsinline poster='https://cdn.rickowens.eu/home_page_images/144677/27.06.24_MOUSE_BAGS_1080X1350.png?1764773150' src='https://player.vimeo.com/progressive_redirect/playback/1143097296/rendition/1080p/file.mp4?loc=external&amp;signature=98166a180aed79f154c443d28240e2b2e041d2960400aa368082a819116256b5' style='width: 100%; height: auto' webkit-playsinline></video>
<img class="secondary-img" src="https://cdn.rickowens.eu/home_page_images/144677/27.06.24_MOUSE_BAGS_1080X1350.png?1764773150" alt="27.06.24 mouse bags 1080x1350" />
<h2></h2>
</figure>
</a></div>
</div>
</figure>
</article>
</div>
</article>

</section>
<style>
  .home-page-wall.men_section.mobile .mobile > div:first-child figure {
    height: 100%;
    display: flex;
    align-items: stretch;
  }
  .home-page-wall.men_section.mobile .mobile > div:first-child img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .home-page-wall.men_section.mobile .mobile > div:first-child a {
    display: flex;
    align-items: stretch;
  }
</style>
<section class='home-page-wall men_section mobile' style='background: none !important; background-image: none !important;'>
<article class='mobile'>
@php
    $mobileDefaults = [
        1 => ['src' => '/img/2.JPG', 'alt' => 'Selahatin'],
        2 => ['src' => '/img/3.JPG', 'alt' => 'Image 3'],
        3 => ['src' => '/img/4.JPG', 'alt' => 'Image 4'],
        4 => ['src' => 'https://cdn.rickowens.eu/home_page_images/143997/RIQUADRO_BIANCO.png?1764758711', 'alt' => 'Riquadro bianco'],
        5 => ['src' => 'https://cdn.rickowens.eu/home_page_images/144203/18.11.25_CANDLE_MOBILE_HP.png?1764758897', 'alt' => '18.11.25 candle mobile hp'],
        6 => ['src' => 'https://cdn.rickowens.eu/home_page_images/144041/22.09.25_HP_MOBILE_EXCLUSIVE.jpg?1764758741', 'alt' => '22.09.25 hp mobile exclusive'],
    ];
@endphp
<div style='display: flex; align-items: stretch;'>
@php
    $mobile1Media = $sectionMedia[1] ?? null;
    $mobile1Src = $mobile1Media ? $mobile1Media->url : $mobileDefaults[1]['src'];
    $mobile1Alt = $mobile1Media ? ($mobile1Media->alt_text ?? $mobile1Media->original_filename) : $mobileDefaults[1]['alt'];
    $mobile2Media = $sectionMedia[2] ?? null;
    $mobile2Src = $mobile2Media ? $mobile2Media->url : $mobileDefaults[2]['src'];
    $mobile2Alt = $mobile2Media ? ($mobile2Media->alt_text ?? $mobile2Media->original_filename) : $mobileDefaults[2]['alt'];
@endphp
<a style="flex: 0 1 50%" href="#"><figure style='padding: 20px 10px 30px 10px; margin: 0; height: 100%; display: flex; align-items: stretch;'>
<img src="{{ $mobile1Src }}" alt="{{ $mobile1Alt }}" style='width: 100%; height: 100%; object-fit: cover;' />
</figure>
</a><a style="flex: 0 1 50%" href="#"><figure style='padding: 20px 10px 30px 10px; margin: 0; height: 100%; display: flex; align-items: stretch;'>
<img src="{{ $mobile2Src }}" alt="{{ $mobile2Alt }}" style='width: 100%; height: 100%; object-fit: cover;' />
</figure>
</a></div>
<div style='display: flex;'>
@php
    $mobile3Media = $sectionMedia[3] ?? null;
    $mobile3Src = $mobile3Media ? $mobile3Media->url : $mobileDefaults[3]['src'];
    $mobile3Alt = $mobile3Media ? ($mobile3Media->alt_text ?? $mobile3Media->original_filename) : $mobileDefaults[3]['alt'];
    $mobile4Media = $sectionMedia[4] ?? null;
    $mobile4Src = $mobile4Media ? $mobile4Media->url : $mobileDefaults[4]['src'];
    $mobile4Alt = $mobile4Media ? ($mobile4Media->alt_text ?? $mobile4Media->original_filename) : $mobileDefaults[4]['alt'];
@endphp
<a style="flex: 0 1 50%" href="#"><figure style='padding: 20px 10px 30px 10px'>
<img src="{{ $mobile3Src }}" alt="{{ $mobile3Alt }}" />
</figure>
</a><a style="flex: 0 1 50%" href="#"><figure style='padding: 20px 10px 30px 10px'>
<img src="{{ $mobile4Src }}" alt="{{ $mobile4Alt }}" />
</figure>
</a></div>
<div style='display: flex;'>
@php
    $mobile5Media = $sectionMedia[5] ?? null;
    $mobile5Src = $mobile5Media ? $mobile5Media->url : $mobileDefaults[5]['src'];
    $mobile5Alt = $mobile5Media ? ($mobile5Media->alt_text ?? $mobile5Media->original_filename) : $mobileDefaults[5]['alt'];
    $mobile6Media = $sectionMedia[6] ?? null;
    $mobile6Src = $mobile6Media ? $mobile6Media->url : $mobileDefaults[6]['src'];
    $mobile6Alt = $mobile6Media ? ($mobile6Media->alt_text ?? $mobile6Media->original_filename) : $mobileDefaults[6]['alt'];
@endphp
<a style="flex: 0 1 50%" href="#"><figure style='padding: 20px 10px 30px 10px'>
<img src="{{ $mobile5Src }}" alt="{{ $mobile5Alt }}" />
</figure>
</a><a style="flex: 0 1 50%" href="#"><figure style='padding: 20px 10px 30px 10px'>
<img src="{{ $mobile6Src }}" alt="{{ $mobile6Alt }}" />
</figure>
</a></div>
</article>

</section>
<div id='shop-women'></div>
<section class='home-page-wall women_section desktop' style='background: none !important; background-image: none !important;'>
<style>
  .wall-section-women .canvas-height {
    padding-bottom: 0%; }
    @media only screen and (max-width: 760px) {
      .wall-section-women .canvas-height {
        padding-bottom: 0; } }
</style>
<article>
<aside>
<ul>
</ul>
</aside>
<div class='custom-page desktop shop wall-section-women'>
<article class='custom-page-content container-center'>
<div class='canvas-height' style='background: none !important; background-image: none !important;'></div>
<figure class='images'>
<div class='container-images'>
</div>
</figure>
</article>
</div>
</article>

</section>
<section class='home-page-wall women_section mobile' style='background: none !important; background-image: none !important;'>
<article class='mobile'>
</article>

</section>

</section>
</section>

</section>
</section>
<aside id='slide-cart'>
<a href="ZA/cart.html">Bag</a>
</aside>
@endsection

@push('scripts')
@endpush
