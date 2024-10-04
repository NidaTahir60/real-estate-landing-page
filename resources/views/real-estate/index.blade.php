@extends('real-estate.layouts.master')

@section('content')
    <section id="home" class="p-0 top-space-margin">
        <div class="swiper full-screen md-h-600px sm-h-500px swiper-number-pagination-style-01 magic-cursor drag-cursor"
            data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-number", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'
            data-number-pagination="1">
            <div class="swiper-wrapper">

                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('assets/real-estate/images/demo-real-estate-slider-01.png') }}');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-md-8 position-relative text-white"
                                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <span class="fs-20 d-block mb-15px">Valmont road, Boulder, CO 80301</span>
                                <div
                                    class="alt-font fs-110 lg-fs-90 lh-90 lg-lh-80 mb-45px sm-mb-25px w-80 xs-w-100 ls-minus-2px">
                                    Luxurious <span class="fw-700">mansion</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute col-xxl-5 col-lg-6 right-0px bottom-0px pt-50px pb-40px ps-40px pe-40px lg-p-35px d-none d-lg-inline-block bg-white border-radius-left-8px"
                        data-anime='{ "translateX": [50, 0], "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="row justify-content-center">
                            <div class="col-xl-7 lg-mb-25px">
                                <div class="row">
                                    <div class="col text-center border-end border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px"
                                            src={{ asset('assets/real-estate/images/demo-real-estate-icon-bed.svg') }}
                                            alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">4 Beds</span>
                                    </div>
                                    <div class="col text-center border-end border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px"
                                            src={{ asset('assets/real-estate/images/demo-real-estate-icon-bath.svg') }}
                                            alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">3 Baths</span>
                                    </div>
                                    <div class="col text-center border-end lg-border-end-0 border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px"
                                            src={{ asset('assets/real-estate/images/demo-real-estate-icon-car.svg') }}
                                            alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">4 Parking</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 ps-35px lg-ps-15px text-center text-xl-start">
                                <span class="fw-500 mb-5px d-block alt-font">For sell price</span>
                                <h4 class="text-dark-gray fw-700 alt-font mb-0 ls-minus-1px">$30,99,000</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('assets/real-estate/images/demo-real-estate-slider-02.png') }}');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-md-8 position-relative text-white"
                                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <span class="fs-20 d-block mb-15px">Valmont road, Boulder, CO 80301</span>
                                <div
                                    class="alt-font fs-110 lg-fs-90 lh-90 lg-lh-80 mb-45px sm-mb-25px w-80 xs-w-100 ls-minus-2px">
                                    Woodland <span class="fw-700">modern</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute col-xxl-5 col-lg-6 right-0px bottom-0px pt-50px pb-40px ps-40px pe-40px lg-p-35px d-none d-lg-inline-block bg-white border-radius-left-8px"
                        data-anime='{ "translateX": [50, 0], "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="row">
                            <div class="col-xl-7 lg-mb-25px">
                                <div class="row">
                                    <div class="col text-center border-end border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px"
                                            src={{ asset('assets/real-estate/images/demo-real-estate-icon-bed.svg') }}
                                            alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">4 Beds</span>
                                    </div>
                                    <div class="col text-center border-end border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px"
                                            src={{ asset('assets/real-estate/images/demo-real-estate-icon-bath.svg') }}
                                            alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">3 Baths</span>
                                    </div>
                                    <div class="col text-center border-end lg-border-end-0 border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px"
                                            src={{ asset('assets/real-estate/images/demo-real-estate-icon-car.svg') }}
                                            alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">3 Parking</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 ps-35px lg-ps-15px text-center text-xl-start">
                                <span class="fw-500 mb-5px d-block alt-font">For sell price</span>
                                <h4 class="text-dark-gray fw-700 alt-font mb-0 ls-minus-1px">$27,99,000</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('assets/real-estate/images/demo-real-estate-slider-03.png') }}');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-md-8 position-relative text-white"
                                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <span class="fs-20 d-block mb-15px">Valmont road, Boulder, CO 80301</span>
                                <div
                                    class="alt-font fs-110 lg-fs-90 lh-90 lg-lh-80 mb-45px sm-mb-25px w-70 xs-w-100 ls-minus-2px">
                                    Saturate <span class="fw-700">house</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute col-xxl-5 col-lg-6 right-0px bottom-0px pt-50px pb-40px ps-40px pe-40px lg-p-35px d-none d-lg-inline-block bg-white border-radius-left-8px"
                        data-anime='{ "translateX": [50, 0], "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="row">
                            <div class="col-xl-7 lg-mb-25px">
                                <div class="row">
                                    <div class="col text-center border-end border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px"
                                            src={{ asset('assets/real-estate/images/demo-real-estate-icon-bed.svg') }}
                                            alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">3 Beds</span>
                                    </div>
                                    <div class="col text-center border-end border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px"
                                            src={{ asset('assets/real-estate/images/demo-real-estate-icon-bath.svg') }}
                                            alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">3 Baths</span>
                                    </div>
                                    <div class="col text-center border-end lg-border-end-0 border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px"
                                            src={{ asset('assets/real-estate/images/demo-real-estate-icon-car.svg') }}
                                            alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">2 Parking</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 ps-35px lg-ps-15px text-center text-xl-start">
                                <span class="fw-500 mb-5px d-block alt-font">For sell price</span>
                                <h4 class="text-dark-gray fw-700 alt-font mb-0 ls-minus-1px">$23,99,000</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container">
                <div class="row g-0">
                    <div class="col-12 position-relative">

                        <div
                            class="swiper-pagination left-0 text-start swiper-pagination-clickable swiper-number fs-14 alt-font ls-05px">
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 md-mb-50px position-relative"
                    data-anime='{ "effect": "slide", "color": "#262b35", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                    <figure class="position-relative mb-0 overflow-hidden border-radius-6px">
                        <img src={{ asset('assets/real-estate/images/demo-real-estate-01.png') }} alt=""
                            class="w-100">
                        <figcaption
                            class="position-absolute border-radius-left-8px bg-base-color right-0px bottom-0px p-45px last-paragraph-no-margin">
                            <i class="feather icon-feather-home icon-medium text-white mb-15px d-block"></i>
                            <h4 class="alt-font fw-700 text-white mb-0 d-block">258,952+</h4>
                            <p class="text-white">Properties listed for sell</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6"
                    data-anime='{ "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-20 d-inline-block mb-15px text-base-color">Online property marketplace</span>
                    <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none sm-w-85"
                        data-shadow-animation="true" data-animation-delay="700">We help you find your <span
                            class="fw-700 text-highlight">new place.<span
                                class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2>
                    <p class="w-80 md-w-100">Online property marketplace to buy, sell, and rent residential and commercial
                        properties. Used by millions of renters to find property.</p>
                    <div class="mb-35px">

                        <div class="icon-with-text-style-08 mb-10px">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-base-color-transparent rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-base-color"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray">More than 10 years of experience.</span>
                                </div>
                            </div>
                        </div>


                        <div class="icon-with-text-style-08">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-base-color-transparent rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-base-color"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray">10,000+ people trusting our agency.</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="d-inline-block">
                        <a href="#contact" class="btn btn-dark-gray btn-medium btn-round-edge me-25px">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0 border-top border-color-extra-medium-gray">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-6 row-cols-md-3 row-cols-sm-2 justify-content-center g-0 bg-white"
                data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

                <div
                    class="col d-flex align-items-center text-center text-lg-start icon-with-text-style-04 border-end md-border-start md-border-bottom sm-border-start-0 xs-border-end-0 border-color-extra-medium-gray position-relative xs-pt-60px xs-pb-60px">
                    <span
                        class="fs-26 lh-30 d-inline-block alt-font text-dark-gray fw-600 mb-0 w-100 sm-w-85 mx-auto shadow-none"
                        data-shadow-animation="true" data-animation-delay="700">What are you <span
                            class="fw-600 text-highlight">looking<span
                                class="bg-base-color h-6px bottom-3px opacity-3 separator-animation"></span></span>
                        for?</span>
                </div>

                <div
                    class="col icon-with-text-style-04 border-end md-border-bottom sm-border-end-0 border-color-extra-medium-gray position-relative">
                    <div class="feature-box pt-45px pb-25px">
                        <div class="feature-box-icon mb-10px">
                            <div
                                class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">
                                20K</div>
                            <a href="#services" class="d-block">
                                <img src={{ asset('assets/real-estate/images/demo-real-estate-icon-apartment.png') }}
                                    alt="">
                            </a>
                        </div>
                        <div class="feature-box-content">
                            <a href="#services"
                                class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Apartment</a>
                        </div>
                    </div>
                </div>

                <div
                    class="col icon-with-text-style-04 border-end md-border-bottom xs-border-end-0 border-color-extra-medium-gray position-relative">
                    <div class="feature-box pt-45px pb-25px">
                        <div class="feature-box-icon mb-10px">
                            <div
                                class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">
                                18K</div>
                            <a href="#services" class="d-block">
                                <img src={{ asset('assets/real-estate/images/demo-real-estate-icon-condominiu.png') }}
                                    alt="">
                            </a>
                        </div>
                        <div class="feature-box-content">
                            <a href="#services"
                                class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Condominium</a>
                        </div>
                    </div>
                </div>

                <div
                    class="col icon-with-text-style-04 border-end md-border-start sm-border-end-0 sm-border-start-0 sm-border-bottom border-color-extra-medium-gray position-relative">
                    <div class="feature-box pt-45px pb-25px">
                        <div class="feature-box-icon mb-10px">
                            <div
                                class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">
                                22K</div>
                            <a href="#services" class="d-block">
                                <img src={{ asset('assets/real-estate/images/demo-real-estate-icon-home.png') }}
                                    alt="">
                            </a>
                        </div>
                        <div class="feature-box-content">
                            <a href="#services"
                                class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Home</a>
                        </div>
                    </div>
                </div>

                <div
                    class="col icon-with-text-style-04 border-end xs-border-end-0 xs-border-bottom border-color-extra-medium-gray position-relative">
                    <div class="feature-box pt-45px pb-25px">
                        <div class="feature-box-icon mb-10px">
                            <div
                                class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">
                                09K</div>
                            <a href="#services" class="d-block">
                                <img src={{ asset('assets/real-estate/images/demo-real-estate-icon-office.png') }}
                                    alt="">
                            </a>
                        </div>
                        <div class="feature-box-content">
                            <a href="#services"
                                class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Office</a>
                        </div>
                    </div>
                </div>

                <div
                    class="col icon-with-text-style-04 border-color-extra-medium-gray md-border-end sm-border-end-0 position-relative">
                    <div class="feature-box pt-45px pb-25px">
                        <div class="feature-box-icon mb-10px">
                            <div
                                class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">
                                20K</div>
                            <a href="#services" class="d-block">
                                <img src={{ asset('assets/real-estate/images/demo-real-estate-icon-shop.png') }}
                                    alt="">
                            </a>
                        </div>
                        <div class="feature-box-content">
                            <a href="#services"
                                class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Shop</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="services">
        <div class="container overlap-gap-section">
            <div class="row justify-content-center align-items-center mb-6 appear anime-child anime-complete"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 1], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;:200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="col-auto pe-25px border-2 border-end sm-border-end-0 sm-pe-15px"
                    style="border-color: #06af47 !important">
                    <span class="text-uppercase text-dark-gray fw-600 ls-1px">Real Estate</span>
                </div>
                <div class="col-12 col-md-auto ps-25px sm-ps-15px text-center" style="">
                    <h3 class="fw-600 text-dark-gray ls-minus-1px mb-0">Our Services</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 transition-inner-all justify-content-center appear anime-child anime-complete"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [20, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <!-- start fancy text box item -->
                <div class="col mb-20px" style="">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="#">
                                <img src={{ asset('assets/real-estate/images/demo-real-estate-service-01.png') }}
                                    alt="" data-no-retina="">
                                <div class="box-overlay bg-black-transparent-medium"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                        <div class="p-25px last-paragraph-no-margin text-center">
                            <span class="fs-20 text-dark-gray fw-600">Property Buying Services</span>
                            <p class="lh-26">Looking to purchase your dream home or invest in real estate? Our experienced
                                agents provide personalized guidance throughout the buying process. From identifying the
                                right property to negotiating the best deal, we ensure you make informed decisions that
                                align with your goals and budget.</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col mb-20px" style="">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="#">
                                <img src={{ asset('assets/real-estate/images/demo-real-estate-service-02.png') }}
                                    alt="" data-no-retina="">
                                <div class="box-overlay bg-black-transparent-medium"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                        <div class="p-25px last-paragraph-no-margin text-center">
                            <span class="fs-20 text-dark-gray fw-600">Property Selling Services</span>
                            <p class="lh-26">When it’s time to sell, you need a strategy that maximizes your property’s
                                value. We offer comprehensive listing services, including market analysis, home staging
                                advice, and professional photography, to attract the right buyers. Our marketing reach and
                                negotiation skills ensure you get the best return on your investment.</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col mb-20px" style="">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="#">
                                <img src={{ asset('assets/real-estate/images/demo-real-estate-service-03.png') }}
                                    alt="" data-no-retina="">
                                <div class="box-overlay bg-black-transparent-medium"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                        <div class="p-25px last-paragraph-no-margin text-center">
                            <span class="fs-20 text-dark-gray fw-600">Rental Services</span>
                            <p class="lh-26">Finding the perfect rental property can be challenging. Our team connects
                                renters with top-quality properties that fit their lifestyle and budget. We also work
                                closely with landlords to ensure their properties are occupied by responsible tenants,
                                handling everything from advertising to lease agreements.</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col md-mb-20px" style="">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="#">
                                <img src={{ asset('assets/real-estate/images/demo-real-estate-service-04.png') }}
                                    alt="" data-no-retina="">
                                <div class="box-overlay bg-black-transparent-medium"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                        <div class="p-25px last-paragraph-no-margin text-center">
                            <span class="fs-20 text-dark-gray fw-600">Property Management</span>
                            <p class="lh-26">If you own rental properties, our property management services can take the
                                hassle out of being a landlord. We handle tenant relations, maintenance, rent collection,
                                and inspections, allowing you to enjoy the benefits of property ownership without the
                                day-to-day stress.</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col sm-mb-20px" style="">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="#">
                                <img src={{ asset('assets/real-estate/images/demo-real-estate-service-05.png') }}
                                    alt="" data-no-retina="">
                                <div class="box-overlay bg-black-transparent-medium"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                        <div class="p-25px last-paragraph-no-margin text-center">
                            <span class="fs-20 text-dark-gray fw-600">Investment Consultation</span>
                            <p class="lh-26">Looking to grow your real estate portfolio? Our experts can help you identify
                                lucrative investment opportunities. Whether you're interested in residential or commercial
                                properties, we provide insights into market trends and assist you with every aspect of the
                                transaction, from due diligence to closing.</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col" style="">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="#">
                                <img src={{ asset('assets/real-estate/images/demo-real-estate-service-06.png') }}
                                    alt="" data-no-retina="">
                                <div class="box-overlay bg-black-transparent-medium"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                        <div class="p-25px last-paragraph-no-margin text-center">
                            <span class="fs-20 text-dark-gray fw-600">Legal & Financial Assistance</span>
                            <p class="lh-26">Navigating the legal and financial aspects of real estate can be complex. Our
                                team connects you with trusted legal professionals and financial advisors to ensure all
                                paperwork is handled correctly, and all transactions meet local regulations.</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
            </div>
        </div>
    </section>

    <section class="overflow-hidden bg-gradient-very-light-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5 md-mb-50px sm-mb-35px">
                    <span class="fs-20 d-inline-block mb-15px text-base-color">Find your dream house</span>
                    <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px w-90 xl-w-100 shadow-none"
                        data-shadow-animation="true" data-animation-delay="700">We are available in <span
                            class="fw-700 text-highlight d-inline-block">many countries<span
                                class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                    <p class="mb-30px w-90 md-w-100">We provide a wide selection of home types for you and your family and
                        are free to choose a home model.</p>
                    <div class="d-flex">

                        <div
                            class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-white box-shadow-large">
                            <i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i>
                        </div>
                        <div
                            class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-white box-shadow-large">
                            <i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i>
                        </div>

                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="outside-box-right-20 sm-outside-box-right-0"
                        data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="swiper magic-cursor slider-one-slide"
                            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "pagination": { "el": ".slider-three-slide-pagination", "clickable": true, "dynamicBullets": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <div class="col interactive-banner-style-05">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="#">
                                                <img src={{ asset('assets/real-estate/images/demo-real-estate-03.png') }}
                                                    class="w-100 border-radius-6px" alt="" />
                                                <div
                                                    class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent">
                                                </div>
                                                <div
                                                    class="position-absolute top-25px right-25px bg-orange border-radius-50px ps-5px pe-15px lh-28">
                                                    <div
                                                        class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-orange lh-18">
                                                        <i class="fa-solid fa-check fs-10"></i>
                                                    </div>
                                                    <span
                                                        class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Trusted</span>
                                                </div>
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                <img src={{ asset('assets/real-estate/images/demo-real-estate-icon-07.png') }}
                                                    class="mb-auto h-70px" alt="" />
                                                <a href="#" class="text-white alt-font fw-600 fs-26">Washington,
                                                    USA</a>
                                            </figcaption>
                                        </figure>
                                    </div>

                                </div>

                                <div class="swiper-slide">

                                    <div class="col interactive-banner-style-05">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="#">
                                                <img src={{ asset('assets/real-estate/images/demo-real-estate-04.png') }}
                                                    class="w-100 border-radius-6px" alt="" />
                                                <div
                                                    class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent">
                                                </div>
                                                <div
                                                    class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                    <div
                                                        class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                        <i class="fa-solid fa-check fs-10"></i>
                                                    </div>
                                                    <span
                                                        class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                </div>
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                <img src={{ asset('assets/real-estate/images/demo-real-estate-icon-09.png') }}
                                                    class="mb-auto h-70px" alt="" />
                                                <a href="#" class="text-white alt-font fw-600 fs-26">Paris,
                                                    France</a>
                                            </figcaption>
                                        </figure>
                                    </div>

                                </div>

                                <div class="swiper-slide">

                                    <div class="col interactive-banner-style-05">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="#">
                                                <img src={{ asset('assets/real-estate/images/demo-real-estate-05.png') }}
                                                    class="w-100 border-radius-6px" alt="" />
                                                <div
                                                    class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent">
                                                </div>
                                                <div
                                                    class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                    <div
                                                        class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                        <i class="fa-solid fa-check fs-10"></i>
                                                    </div>
                                                    <span
                                                        class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                </div>
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                <img src={{ asset('assets/real-estate/images/demo-real-estate-icon-08.png') }}
                                                    class="mb-auto h-70px" alt="" />
                                                <a href="#" class="text-white alt-font fw-600 fs-26">Chicago,
                                                    USA</a>
                                            </figcaption>
                                        </figure>
                                    </div>

                                </div>

                                <div class="swiper-slide">

                                    <div class="col interactive-banner-style-05">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="#">
                                                <img src={{ asset('assets/real-estate/images/demo-real-estate-06.png') }}
                                                    class="w-100 border-radius-6px" alt="" />
                                                <div
                                                    class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent">
                                                </div>
                                                <div
                                                    class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                    <div
                                                        class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                        <i class="fa-solid fa-check fs-10"></i>
                                                    </div>
                                                    <span
                                                        class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                </div>
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                <img src={{ asset('assets/real-estate/images/demo-real-estate-icon-10.png') }}
                                                    class="mb-auto h-70px" alt="" />
                                                <a href="#" class="text-white alt-font fw-600 fs-26">San francisco,
                                                    USA</a>
                                            </figcaption>
                                        </figure>
                                    </div>

                                </div>

                                <div class="swiper-slide">

                                    <div class="col interactive-banner-style-05">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="#">
                                                <img src={{ asset('assets/real-estate/images/demo-real-estate-04.png') }}
                                                    class="w-100 border-radius-6px" alt="" />
                                                <div
                                                    class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent">
                                                </div>
                                                <div
                                                    class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                    <div
                                                        class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                        <i class="fa-solid fa-check fs-10"></i>
                                                    </div>
                                                    <span
                                                        class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                </div>
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                <img src={{ asset('assets/real-estate/images/demo-real-estate-icon-09.png') }}
                                                    class="mb-auto h-70px" alt="" />
                                                <a href="#" class="text-white alt-font fw-600 fs-26">Paris,
                                                    France</a>
                                            </figcaption>
                                        </figure>
                                    </div>

                                </div>

                                <div class="swiper-slide">

                                    <div class="col interactive-banner-style-05">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="#">
                                                <img src={{ asset('assets/real-estate/images/demo-real-estate-05.png') }}
                                                    class="w-100 border-radius-6px" alt="" />
                                                <div
                                                    class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent">
                                                </div>
                                                <div
                                                    class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                    <div
                                                        class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                        <i class="fa-solid fa-check fs-10"></i>
                                                    </div>
                                                    <span
                                                        class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                </div>
                                            </a>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                <img src={{ asset('assets/real-estate/images/demo-real-estate-icon-08.png') }}
                                                    class="mb-auto h-70px" alt="" />
                                                <a href="#" class="text-white alt-font fw-600 fs-26">Chicago,
                                                    USA</a>
                                            </figcaption>
                                        </figure>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="ps-5 pe-5 lg-ps-2 lg-pe-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <ul class="image-gallery-style-02 gallery-wrapper grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large"
                        style="position: relative; height: 536px;">
                        <li class="grid-sizer"></li>
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 0%; top: 0px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/real-estate/images/demo-real-estate-gallery-01.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/real-estate/images/demo-real-estate-gallery-01.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 25.0001%; top: 0px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/real-estate/images/demo-real-estate-gallery-02.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/real-estate/images/demo-real-estate-gallery-02.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 50.0002%; top: 0px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/real-estate/images/demo-real-estate-gallery-03.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/real-estate/images/demo-real-estate-gallery-03.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 75.0003%; top: 0px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/real-estate/images/demo-real-estate-gallery-04.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/real-estate/images/demo-real-estate-gallery-04.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 0%; top: 268px;">
                            <div class="atropos-scale"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                                <div class="atropos-rotate"
                                    style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                    <div class="atropos-inner" data-atropos-offset="3"
                                        style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/real-estate/images/demo-real-estate-gallery-05.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/real-estate/images/demo-real-estate-gallery-05.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 25.0001%; top: 268px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/real-estate/images/demo-real-estate-gallery-06.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/real-estate/images/demo-real-estate-gallery-06.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px);"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1);"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 50.0002%; top: 268px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/real-estate/images/demo-real-estate-gallery-07.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/real-estate/images/demo-real-estate-gallery-07.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px);"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1);"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                        <!-- start gallery item -->
                        <li class="grid-item transition-inner-all atropos atropos-rotate-touch" data-atropos=""
                            data-atropos-perspective="1150" style="position: absolute; left: 75.0003%; top: 268px;">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner" data-atropos-offset="3">
                                        <div class="gallery-box">
                                            <a href={{ asset('assets/real-estate/images/demo-real-estate-gallery-08.png') }}
                                                data-group="lightbox-group-gallery-item-2"
                                                title="Lightbox gallery image title">
                                                <div class="position-relative gallery-image bg-slate-blue">
                                                    <img src={{ asset('assets/real-estate/images/demo-real-estate-gallery-08.png') }}
                                                        alt="" data-no-retina="">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                        <i class="bi bi-camera icon-medium text-white"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <span class="atropos-highlight"
                                            style="transform: translate3d(0px, 0px, 0px);"></span>
                                    </div>
                                    <span class="atropos-shadow"
                                        style="transform: translate3d(0px, 0px, -50px) scale(1);"></span>
                                </div>
                            </div>
                        </li>
                        <!-- end gallery item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative overflow-hidden">
        <img src={{ asset('assets/real-estate/images/demo-real-estate-07.png') }} alt=""
            class="position-absolute left-100px top-50px z-index-minus-1"
            data-bottom-top="transform: translate3d(80px, 0px, 0px);"
            data-top-bottom="transform: translate3d(-180px, 0px, 0px);" />
        <img src={{ asset('assets/real-estate/images/demo-real-estate-08.png') }} alt=""
            class="position-absolute right-100px top-100px z-index-minus-1"
            data-bottom-top="transform:scale(1.4, 1.4) translate3d(0px, 0px, 0px);"
            data-top-bottom="transform:scale(1, 1) translate3d(-400px, 0px, 0px);" />
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-end md-mb-50px"
                    data-anime='{ "effect": "slide", "color": "#262b35", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                    <figure class="position-relative m-0">
                        <img src={{ asset('assets/real-estate/images/demo-real-estate-09.png') }}
                            class="w-90 border-radius-6px" alt="">
                    </figure>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-10 text-center text-lg-start"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-20 d-inline-block mb-15px text-base-color">Clients feedback</span>
                    <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true"
                        data-animation-delay="700">Here is what our <span
                            class="fw-700 text-highlight d-inline-block">client's<span
                                class="bg-base-color h-10px bottom-4px opacity-3 separator-animation"></span></span> have
                        to say</h2>
                    <div class="swiper position-relative"
                        data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "fade" }'>
                        <div class="swiper-wrapper mb-40px">

                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">Love the theme, really neat and super easy to use. But the
                                    customer support is what makes this an even greater theme! ThemeZaa solved all the
                                    problems. I had with my custom settings.</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px"
                                        src={{ asset('assets/real-estate/images/avtar-24.png') }} alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Alexander</span>
                                            harvard</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">I've purchased several themes over the years and this
                                    theme, by far is absolutely amazing. It's built extremely well the back end was well
                                    thought out the design options are endless.</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px"
                                        src={{ asset('assets/real-estate/images/avtar-25.png') }} alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Shoko</span>
                                            mugikura</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">The theme is very valid and offers many possibilities of
                                    customization to adapt it to your needs, but the thing I got the most out of it was the
                                    relationship with the support team.</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px"
                                        src={{ asset('assets/real-estate/images/avtar-26.png') }} alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Leonel</span>
                                            mooney</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex justify-content-center justify-content-lg-start">

                            <div
                                class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-color-extra-medium-gray">
                                <i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i>
                            </div>
                            <div
                                class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-color-extra-medium-gray">
                                <i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="big-section bg-gradient-very-light-gray">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-lg-3 col-md-6 appear anime-complete"
                    data-anime="{ &quot;translateX&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                    style="">
                    <div class="h-100 sm-h-500px xs-h-400px cover-background"
                        style="background-image: url({{ asset('assets/real-estate/images/demo-business-contact-01.png') }}"></div>
                </div>
                <div class="col-lg-4 col-md-6 appear anime-complete"
                    data-anime="{ &quot;translateX&quot;: [15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                    style="">
                    <div class="p-18 lg-p-15 h-100" style="background-color: #06af47">
                        <span class="text-white text-decoration-line-bottom mb-10px d-inline-block">Keep in touch?</span>
                        <p class="text-white">9853 HAMLET LN S COTTAGE GROVE MN 55016 3898 USA</p>
                        <span class="text-white text-decoration-line-bottom mb-10px d-inline-block">Toll free customer
                            care?</span>
                        <p><a href="tel:+1-(307)-204-0086" class="text-white">+1-(307)-204-0086</a></p>
                        <span class="text-white text-decoration-line-bottom mb-10px d-inline-block">Need live
                            support?</span>
                        <a href="mailto:info@oveelabs.com" class="text-white d-block">info@oveelabs.com</a>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="pt-5 md-pt-45px contact-form-style-01 appear anime-complete"
                        data-anime="{ &quot;translateX&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                        style="">
                        <h4 class="d-inline-block fw-600 text-dark-gray ls-minus-1px mb-30px">How we can help?</h4>
                        <!-- start contact form -->
                        <form action="email-templates/contact-form.php" method="post">
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                <input type="text" name="name" class="form-control required"
                                    placeholder="Your name*">
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                <input type="email" name="email" class="form-control required"
                                    placeholder="Your email address*">
                            </div>
                            <div class="position-relative form-group form-textarea">
                                <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                <textarea placeholder="Your message" name="comment" class="form-control" rows="3"></textarea>
                                
                                <input type="hidden" name="redirect" value="">
                                <button
                                    class="btn btn-small btn-round-edge btn-dark-gray btn-box-shadow mt-20px m-auto submit"
                                    type="submit">Send message</button>
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </form>
                        <!-- end contact form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
