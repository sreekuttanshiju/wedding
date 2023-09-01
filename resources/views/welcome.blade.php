<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

{{-- @section('content') --}}
<div class="hero">
    <video autoplay loop muted playsinline class="background-video">
        <source src="{{ asset('videos/wedding-background.mp4.mp4') }}" type="video/mp4">
        <!-- Add additional video formats if necessary (e.g., WebM, Ogg) -->
    </video>
    <div class="container">
        <h1>One Click Weddings</h1>
        <p>Plan your dream wedding with us!</p>
        <a href="{{ route('login') }}" class="btn btn-primary">login</a>
    </div>
</div>
{{-- @endsection --}}
