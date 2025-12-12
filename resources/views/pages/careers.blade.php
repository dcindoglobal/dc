@extends('layouts.app')

@section('title', 'Careers - DC Indo Global')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-[#0A2540] to-[#1E3A5F]">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Careers</h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Join our team and help build India's infrastructure future.
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-[#0A2540] mb-8">Build Your Career With Us</h2>
                <p class="text-gray-600 text-lg mb-8">
                    We're always looking for talented individuals who share our passion for excellence 
                    in construction and infrastructure development.
                </p>
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-[#0A2540] mb-4">Current Openings</h3>
                    <p class="text-gray-600">
                        We're currently updating our career opportunities. Please check back soon 
                        or send your resume to <a href="mailto:careers@dcindoglobal.com" class="text-[#D4AF37] hover:underline">careers@dcindoglobal.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection