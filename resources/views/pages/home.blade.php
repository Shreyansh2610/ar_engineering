@extends('layouts.master')
{{-- page title --}}
@section('title', 'Home')
{{--  --}}
@section('head-section')
@endsection
{{-- page styles --}}
@section('vendor-styles')
@endsection
@section('page-styles')
    <style>
        .transition-all {
            transition: all 0.3s ease-in-out;
        }

        .card:hover .opacity-0 {
            opacity: 0.85 !important;
            transform: translateY(0) !important;
        }
    </style>
@endsection
@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section accent-background">
            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-item active">
                    <img src="{{ asset('images/banner_1.png') }}" alt="" />
                    <div class="carousel-container">
                        <h2>CNC & VMC Work – Precision Engineering You Can Trust</h2>
                        <p>
                            At {{ env('APP_NAME') }}, we specialize in CNC and VMC machining to deliver components with
                            unmatched accuracy and durability. Our advanced facilities and skilled professionals ensure
                            every product meets the highest industrial standards. Whether it’s shafts, pulleys, or precision
                            hubs, we create solutions tailored to your exact requirements.
                        </p>
                        {{-- <a href="#featured-services" class="btn-get-started">Get Started</a> --}}
                    </div>
                </div>
                <!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="{{ asset('images/banner_2.png') }}" alt="" />
                    <div class="carousel-container">
                        <h2>Forging & Casting for Reliable Industrial Parts</h2>
                        <p>
                            With a production capacity of 1000 tons per month in casting and 10 tons per month in forging,
                            we provide robust solutions for industries across India. From raw forged parts to fully finished
                            goods, our expertise in forging and casting ensures strength, reliability, and
                            cost-effectiveness in every product we deliver.
                        </p>
                        {{-- <a href="#featured-services" class="btn-get-started">Get Started</a> --}}
                    </div>
                </div>
                <!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="{{ asset('images/banner_3.png') }}" alt="" />
                    <div class="carousel-container">
                        <h2>Automotive & Custom Components</h2>
                        <p>
                            Our product range includes a wide variety of automotive and custom-engineered parts such as
                            hubs, bushings, flanges, pulleys, and spacers. Designed with precision and manufactured to last,
                            these components are trusted by industries for their consistent performance, durability, and
                            adaptability to custom specifications.
                        </p>
                        {{-- <a href="#featured-services" class="btn-get-started">Get Started</a> --}}
                    </div>
                </div>
                <!-- End Carousel Item -->

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section light-background">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <svg fill="#7cb342" width="64px" height="64px" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M22,1H18a1,1,0,0,0-1,1V9H15V7a1,1,0,0,0-1.447-.895L9,8.382V7a1,1,0,0,0-1.447-.895l-6,3A1,1,0,0,0,1,10V22a1,1,0,0,0,1,1H22a1,1,0,0,0,1-1V2A1,1,0,0,0,22,1ZM21,3V5H19V3ZM3,21V10.618l4-2V10a1,1,0,0,0,1.447.895L13,8.618V10a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V7h2V21Zm2-8H8v2H5Zm5,0h4v2H10Zm6,0h3v2H16ZM5,17H8v2H5Zm5,0h4v2H10Zm6,0h3v2H16Z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <h4>
                                <a href="" class="stretched-link">Engineering Expertise</a>
                            </h4>
                            <p>
                                With advance CNC & VMC machining, forging and casting processes, {{ env('APP_NAME') }}
                                delivers precision parts across industries. Our technical expertise ensures reliable and
                                durable solutions for every requirements.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <svg width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    fill="#7cb342" stroke="#7cb342" stroke-width="0.36">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M23 1v18h-3v-1h2V2H2v16h8v1H1V1zm-7 2H8v1h8zm-2 3V5h-4v1zm-7 5H3v1h4zm0 2H3v1h4zm-4 3h2v-1H3zm14-3a2 2 0 1 1-2-2 2.002 2.002 0 0 1 2 2zm-1 0a1 1 0 1 0-1 1 1.001 1.001 0 0 0 1-1zm.002-4.293a.965.965 0 0 0 1.32.55 1.08 1.08 0 0 1 1.213.207 1.066 1.066 0 0 1 .21 1.21.966.966 0 0 0 .548 1.324 1.064 1.064 0 0 1 0 2.004.965.965 0 0 0-.549 1.323A1.05 1.05 0 0 1 18 16.816v7.046l-3-2.538-3 2.538v-7.046a1.05 1.05 0 0 1-.744-1.49.965.965 0 0 0-.549-1.324 1.064 1.064 0 0 1 0-2.004.966.966 0 0 0 .549-1.324 1.066 1.066 0 0 1 .209-1.21 1.08 1.08 0 0 1 1.212-.206.965.965 0 0 0 1.32-.551 1.064 1.064 0 0 1 2.005 0zm.998 13v-5.04a.93.93 0 0 0-.998.625 1.064 1.064 0 0 1-2.004 0 .93.93 0 0 0-.998-.625v5.039l2-1.692zm-1.94-4.749a1.967 1.967 0 0 1 1.853-1.308 2.12 2.12 0 0 1 .87.197l.058-.091a1.964 1.964 0 0 1 1.116-2.695v-.122a1.966 1.966 0 0 1-1.116-2.695l-.087-.084a1.965 1.965 0 0 1-2.694-1.117h-.12a1.965 1.965 0 0 1-2.694 1.117l-.087.084a1.966 1.966 0 0 1-1.116 2.695v.122a1.964 1.964 0 0 1 1.116 2.695l.058.09a2.12 2.12 0 0 1 .87-.196 1.967 1.967 0 0 1 1.853 1.308L15 17z">
                                        </path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                    </g>
                                </svg>
                            </div>
                            <h4>
                                <a href="" class="stretched-link">Quality Assurance</a>
                            </h4>
                            <p>
                                Every component undergoes 100% dimernsional and visual inspection as per drawings. Our
                                commitment to strict quality standards guarantees products that perform with consistency and
                                meet customer expectations.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <svg fill="#7cb342" height="64px" width="64px" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 512 512" xml:space="preserve">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                                <path
                                                    d="M454.313,249.708L512,206.991L462.136,38.939l-256.667,8.226l-24.727,38.398L92.839,64.42L0,256.087l42.289,36.399 l-22.328,34.553c-7.052,10.914-9.432,23.92-6.701,36.624c2.73,12.704,10.245,23.583,21.158,30.635 c7.963,5.146,17.042,7.804,26.304,7.804c2.438,0,4.887-0.193,7.333-0.565c3.097,11.013,10.047,20.988,20.388,27.67 c8.142,5.262,17.282,7.774,26.323,7.774c2.442,0,4.873-0.206,7.278-0.567c3.198,11.44,10.36,21.2,20.423,27.703 c8.143,5.262,17.282,7.774,26.323,7.774c15.973,0,31.639-7.845,40.934-22.231l6.634-10.268l38.853,25.758l0.162,0.107 c7.963,5.146,17.042,7.805,26.304,7.805c3.43,0,6.887-0.365,10.32-1.102c12.704-2.731,23.583-10.246,30.635-21.158 c4.963-7.681,7.476-16.249,7.745-24.785c2.489-0.146,4.985-0.478,7.47-1.012c12.704-2.731,23.583-10.246,30.635-21.158 c4.865-7.528,7.504-16.054,7.777-24.787c2.479-0.147,4.963-0.478,7.436-1.01c12.705-2.731,23.584-10.244,30.636-21.158 c4.968-7.688,7.481-16.267,7.745-24.811c14.973-0.869,29.358-8.609,38.102-22.144c7.052-10.914,9.432-23.92,6.703-36.624 C464.938,264.277,460.578,256.165,454.313,249.708z M223.819,79.562l213.947-6.856l36.06,121.529l-47.959,35.513L242.472,110.338 l-52.058,79.011l-0.08,0.123c-4.694,7.26-14.416,9.349-21.676,4.66c-7.26-4.691-9.35-14.415-4.645-21.697L223.819,79.562z M73.986,361.949c-4.694,7.261-14.418,9.35-21.675,4.66c-3.517-2.273-5.939-5.779-6.819-9.873 c-0.879-4.094-0.113-8.285,2.161-11.802l32.971-51.027c2.997-4.637,8.043-7.164,13.192-7.164c2.913,0,5.86,0.81,8.484,2.505 c3.517,2.273,5.938,5.778,6.818,9.872s0.113,8.286-2.159,11.803L73.986,361.949z M128.011,396.858 c-4.694,7.26-14.417,9.348-21.676,4.659c-7.26-4.691-9.35-14.415-4.658-21.675l32.972-51.027 c2.997-4.637,8.043-7.164,13.192-7.164c2.913,0,5.86,0.81,8.484,2.506c7.26,4.691,9.35,14.415,4.659,21.675L128.011,396.858z M215.006,380.74l-32.972,51.027c-4.691,7.262-14.415,9.349-21.674,4.659c-3.517-2.273-5.939-5.779-6.818-9.873 c-0.88-4.094-0.114-8.285,2.159-11.803l32.972-51.027c2.273-3.517,5.778-5.938,9.872-6.818c1.107-0.237,2.22-0.355,3.324-0.355 c2.985,0,5.911,0.857,8.477,2.516C217.607,363.757,219.697,373.48,215.006,380.74z M432.488,292.041 c-2.273,3.517-5.778,5.938-9.872,6.818c-4.094,0.881-8.286,0.113-11.802-2.159l-10.939-7.068l-0.001-0.001l-51.028-32.972 l-17.892,27.69l10.94,7.07l40.088,25.904c3.517,2.273,5.938,5.778,6.818,9.872s0.113,8.286-2.159,11.803s-5.779,5.939-9.872,6.819 c-4.095,0.879-8.285,0.113-11.803-2.159l-51.027-32.972l-17.892,27.69l40.087,25.902c7.26,4.691,9.35,14.414,4.659,21.675 c-2.273,3.517-5.779,5.939-9.872,6.819c-4.095,0.879-8.285,0.113-11.802-2.159l-43.558-28.145l-17.892,27.69l32.617,21.076 c7.26,4.693,9.351,14.415,4.659,21.676c-2.273,3.517-5.778,5.939-9.872,6.819c-4.068,0.874-8.232,0.122-11.735-2.117 l-39.081-25.909l8.443-13.068c14.557-22.529,8.072-52.702-14.457-67.258c-10.349-6.687-22.309-8.922-33.629-7.214 c-3.094-11.023-10.046-21.008-20.394-27.695c-10.342-6.682-22.292-8.919-33.605-7.217c-3.199-11.436-10.36-21.192-20.42-27.692 c-18.62-12.034-42.458-9.676-58.391,4.224l-21.076-18.14l70.215-144.958l50.897,12.241l-25.527,39.639 c-14.557,22.529-8.072,52.701,14.457,67.258c22.506,14.544,52.642,8.083,67.217-14.392l33.979-51.572l175.87,114.508 c3.516,2.273,5.938,5.778,6.818,9.872C435.528,284.332,434.761,288.523,432.488,292.041z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h4>
                                <a href="" class="stretched-link">Customer Focus</a>
                            </h4>
                            <p>
                                We manufacture parts in raw, finished or assembled condition as per customer demand. By
                                combing flexibility, customization and on-time delivery, we ensure maximum value for our
                                clients.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- /Featured Services Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About Us</h2>
                <p>
                    {{ env('APP_NAME') }} is a leading manufacturer of all types of mechanical parts in India.
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('images/home_page_aboutus.webp') }}" class="img-fluid" alt="" />
                        {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> --}}
                    </div>
                    <div class="col-lg-6 d-flex align-items-center content" data-aos="fade-up" data-aos-delay="200">
                        <span>
                            <h3>
                                Delivering Engineering Excellence with Precision & Reliablity
                            </h3>
                            <p class="fst-italic">
                                {{ env('APP_NAME') }} is a leading manufacturer of high-quality mechanical parts in India.
                                With
                                expertise in <b>forging, casting and precision machining</b>, we deliver components tailored
                                to diverse
                                industry needs. From raw materials to finished and assembled products, our experienced team
                                ensures <b>100% quality inspection, reliable performance and timely delivery</b>.
                            </p>
                            <p class="fst-italic">
                                We are committed to providing <b>superior value, customized solutions and durable
                                    engineering products</b> that meet global standards.
                            </p>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Services Section -->
        <section id="services" class="services section">
            <div class="container section-title text-center" data-aos="fade-up">
                <h2>Services</h2>
                <p>
                    At AR Engineering, we provide a wide range of precision engineering services including CNC and VMC
                    machining, forging, casting, and new product development. Our focus is on delivering high-quality,
                    reliable, and customized components that meet the unique needs of diverse industries. With advanced
                    technology, strict quality control, and a commitment to timely delivery, we ensure every product exceeds
                    customer expectations.
                </p>
            </div>
            <div class="container">
                <div class="row">
                    @for ($i = 1; $i <= 15; $i++)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 position-relative overflow-hidden">
                                <img src="{{ asset('images/services/services_' . sprintf('%02d', $i) . '.png') }}"
                                    class="card-img-top w-100 h-100" height="200px" alt="Sample Image">
                                {{-- <div class="card-body">
                                <h5 class="card-title">Hover Me!</h5>
                                <p class="card-text">This card has a fade-up overlay effect on hover.</p>
                            </div> --}}

                                <!-- Hover overlay that fades up -->
                                <div
                                    class="position-absolute top-0 start-0 w-100 h-100 bg-accent bg-opacity-90 d-flex align-items-center justify-content-center text-white text-center opacity-0 translate-y-100 transition-all">
                                    <div class="p-4">
                                        <h3 class="fw-bold"><strong>{{ $imageDescription[$i] }}</strong></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </section>
        <!-- /Services Section -->

        <section class="py-5 accent-background">
            <div class="container">
                <h2 class="display-6 fw-bold text-center mb-4">Product Capability</h2>

                <ul class="list-unstyled" data-aos="fade-up" data-aos-delay="150">
                    <li class="mb-3">
                        <span class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center me-3"
                            style="width: 8px; height: 8px; min-width: 8px; margin-top: 8px;"></span>
                        <span class="fw-semibold fs-6">Manufacturing process forging and casting method</span>
                    </li>

                    <li class="mb-3">
                        <span class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center me-3"
                            style="width: 8px; height: 8px; min-width: 8px; margin-top: 8px;"></span>
                        <span class="fw-semibold fs-6">Precision machining as per production process required</span>
                    </li>

                    <li class="mb-3">
                        <span class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center me-3"
                            style="width: 8px; height: 8px; min-width: 8px; margin-top: 8px;"></span>
                        <span class="fw-semibold fs-6">100% dimensions inspection as per drawing</span>
                    </li>

                    <li class="mb-3">
                        <span class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center me-3"
                            style="width: 8px; height: 8px; min-width: 8px; margin-top: 8px;"></span>
                        <span class="fw-semibold fs-6">100% visual inspection</span>
                    </li>

                    <li class="mb-3">
                        <span class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center me-3"
                            style="width: 8px; height: 8px; min-width: 8px; margin-top: 8px;"></span>
                        <span class="fw-semibold fs-6">Product assembly</span>
                    </li>

                    <li class="mb-0">
                        <span class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center me-3"
                            style="width: 8px; height: 8px; min-width: 8px; margin-top: 8px;"></span>
                        <span class="fw-semibold fs-6">Packaging</span>
                    </li>
                </ul>
            </div>
        </section>

        <section class="py-5 light-background">
            <div class="container">
                <h2 class="display-6 fw-bold text-center mb-4">Client Success Stories</h2>
                <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="carousel-indicators">
                        {{-- <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button> --}}
                    </div>
                    <div class="carousel-inner" style="min-height: 220px;">
                        <div class="carousel-item active w-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10 text-center">
                                    <i class="fas fa-quote-left fs-1 mb-4 opacity-50"></i>
                                    <blockquote class="blockquote">
                                        <p class="fs-5 mb-4">We have been sourcing CNC machined components from
                                            {{ env('APP_NAME') }} for over 3 years. Their precision, timely delivery and
                                            quality inspection process have been excellent. A trusted partner for our
                                            growth.</p>
                                    </blockquote>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="text-start">
                                            <h5 class="mb-1">Sandeep Patel</h5>
                                            <p class="mb-5 text-center opacity-75">CEO</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item w-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10 text-center">
                                    <i class="fas fa-quote-left fs-1 mb-4 opacity-50"></i>
                                    <blockquote class="blockquote">
                                        <p class="fs-5 mb-4">{{ env('APP_NAME') }} understands customized requirements
                                            very
                                            well. They provided forged and machined parts exactly as per our design within
                                            the deadline. Highly recommended for industrial parts.</p>
                                    </blockquote>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="text-start">
                                            <h5 class="mb-1">Sanjay Mehta</h5>
                                            <p class="mb-5 text-center opacity-75">Engineer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item w-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10 text-center">
                                    <i class="fas fa-quote-left fs-1 mb-4 opacity-50"></i>
                                    <blockquote class="blockquote">
                                        <p class="fs-5 mb-4">We shifted our supply of flanges and spacers to
                                            {{ env('APP_NAME') }} last year, and since then, our rejection rates have
                                            dropped drastically. Their 100% inspection commitment really shows.</p>
                                    </blockquote>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="text-start">
                                            <h5 class="mb-1">Dharmesh Vora</h5>
                                            <p class="mb-5 text-center opacity-75">Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev bg-accent" type="button" data-bs-target="#carouselIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next bg-accent" type="button" data-bs-target="#carouselIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
    </main>
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
@endsection
{{-- page scripts --}}
@section('page-scripts')
    <script></script>
@endsection
