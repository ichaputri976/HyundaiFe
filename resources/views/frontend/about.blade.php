@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('assets/img/page-title-bg.webp') }});">
    <div class="container position-relative">
        <h1>About</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="current">About</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<section id="about-3" class="about-3 section">
    <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                <img src="{{ asset('assets/img/img_sq_1.jpg') }}" alt="Image" class="img-fluid">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
                    <span class="play"><i class="bi bi-play-fill"></i></span>
                </a>
            </div>
            <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h2 class="content-title mb-4">Plants Make Life Better</h2>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim necessitatibus placeat, atque qui voluptatem velit explicabo vitae repellendus architecto provident nisi ullam minus asperiores commodi!
                </p>
                <ul class="list-unstyled list-check">
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Velit explicabo vitae repellendu</li>
                    <li>Repellat aliquam nihil illo</li>
                </ul>

                <p><a href="#" class="btn-cta">Get in touch</a></p>
            </div>
        </div>
    </div>
</section><!-- /About 3 Section -->

<section class="team-15 team section" id="team">
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Team</h2>
        <p>Meet the people behind our company.</p>
    </div><!-- End Section Title -->

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="person">
                        <figure>
                            <img src="{{ asset('assets/img/team/team-1.jpg') }}" alt="Image" class="img-fluid">
                            <div class="social">
                                <a href="#"><span class="bi bi-facebook"></span></a>
                                <a href="#"><span class="bi bi-twitter-x"></span></a>
                                <a href="#"><span class="bi bi-linkedin"></span></a>
                            </div>
                        </figure>
                        <div class="person-contents">
                            <h3>Joshua Stefan</h3>
                            <span class="position">Farmer</span>
                        </div>
                    </div>
                </div>
                <!-- Add more team members as needed -->
            </div>
        </div>
    </div>
</section><!-- /Team Section -->
@endsection
