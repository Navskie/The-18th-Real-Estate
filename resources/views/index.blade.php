@extends('website')
@section('main')
    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="height: 600px;">
        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="assets/img/bedroom.jpg" alt="Slide Image" style="z-index: -1;"></div>
            <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" style="z-index: -1;">
                <div class="container d-flex flex-column justify-content-center h-100">
                    <div class="row">
                        <div class="col-md-6 col-xl-4 offset-md-2">
                            <div style="max-width: 350px;">
                                <h1 class="text-uppercase fw-bold">Biben dum<br>fringi dictum, augue purus</h1>
                                <p class="my-3">Tincidunt laoreet leo, adipiscing taciti tempor. Primis senectus sapien, risus donec ad fusce augue interdum.</p><a class="btn btn-primary btn-lg me-2" role="button" href="#">Button</a><a class="btn btn-outline-primary btn-lg" role="button" href="#">Button</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" style="z-index: -1;">
                <div class="container d-flex flex-column justify-content-center h-100">
                    <div class="row">
                        <div class="col-md-6 col-xl-4 offset-md-2">
                            <div style="max-width: 350px;">
                                <h1 class="text-uppercase fw-bold">Biben dum<br>fringi dictum, augue purus</h1>
                                <p class="my-3">Tincidunt laoreet leo, adipiscing taciti tempor. Primis senectus sapien, risus donec ad fusce augue interdum.</p><a class="btn btn-primary btn-lg me-2" role="button" href="#">Button</a><a class="btn btn-outline-primary btn-lg" role="button" href="#">Button</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
        <div class="carousel-indicators"><button type="button" data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></button> <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="1"></button> <button type="button" data-bs-target="#carousel-1" data-bs-slide-to="2"></button></div>
    </div>
    <section class="photo-gallery py-4 py-xl-5">
        <div class="container py-4 py-xl-5" data-aos="zoom-in-up" data-aos-duration="500">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold mb-3 mt-2" style="font-family: Lora, serif;">Amenities</h2>
                    <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices .</p>
                </div>
            </div>
            <div class="row gy-4 mt-2">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/Backyardpool.jpg">
                        <div class="card-body p-4">
                            <h4 class="card-title" style="font-family: Lora, serif;">Pool &amp; RestoBar</h4>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/download%20(3).jpg">
                        <div class="card-body p-4">
                            <h4 class="card-title" style="font-family: Lora, serif;">High Speed Internet Network</h4>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/images.jpg">
                        <div class="card-body p-4">
                            <h4 class="card-title" style="font-family: Lora, serif;">Smart Lock System</h4>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/img/download%20(1).jpg">
                        <div class="card-body p-4">
                            <h4 class="card-title" style="font-family: Lora, serif;">Fitness Room</h4>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5 py-xl-5" data-aos="zoom-in-up" data-aos-duration="150" data-aos-delay="500">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold mb-3 mt-2" style="font-family: Lora, serif;">Units</h2>
                    <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <div class="col">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div class="card-body p-4">
                            <h4 class="card-title" style="font-family: Lora, serif;font-weight: bold;">Studio Type Unit</h4>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div class="card-body p-4">
                            <h4 class="card-title" style="font-family: Lora, serif;font-weight: bold;">Loft Unit</h4>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div class="card-body p-4">
                            <h4 class="card-title" style="font-family: Lora, serif;font-weight: bold;">2 Bedrooms with Balcony</h4>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="py-4 py-xl-5" style="background: rgb(232,232,232);">
            <div class="container" data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="150">
                <div class="row mb-2" data-aos="zoom-in-up" data-aos-duration="500">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2 class="fw-bold mb-3 mt-2" style="font-family: Lora, serif;">On Your Doorstep</h2>
                        <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
                    </div>
                </div>
                <div class="border rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-6" style="background: var(--bs-body-bg);">
                            <div class="p-4 p-md-5" style="background: #ffffff;">
                                <h2 class="fw-bold mb-3" style="color: var(--bs-emphasis-color);font-family: Lora, serif;">Food &amp; Dining</h2>
                                <p class="mb-4" style="color: #2d2d2d;"><br><span style="color: rgb(0, 0, 0);">Angeles City is the gastronomic center of the Philippines and the Kapampangan people are known around the country for their culinary delights. Angeles is full of food options at local restaurants and hotels so you will never run out of choices.</span><br><br></p>
                                <div class="my-3"></div>
                            </div>
                        </div>
                        <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><img class="w-100 h-100 fit-cover" src="assets/img/McDonalds%20(1).jpg"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-4 py-xl-5">
            <div class="container" data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="150">
                <div class="border rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-6"><img class="w-100 h-100 fit-cover" src="assets/img/download.jpg"></div>
                        <div class="col-md-6 order-first order-md-last" style="min-height: 250px;">
                            <div class="p-4 p-md-5">
                                <h2 class="fw-bold mb-3" style="color: var(--bs-emphasis-color);font-family: Lora, serif;">Shopping</h2>
                                <p class="mb-4" style="color: #2d2d2d;"><br><span style="color: rgb(0, 0, 0);">SM City Clark and Ayala’s Marquee Mall anchor the major shopping destinations in Angeles City. Downtown Angeles’ Nepo Mall, along with hundreds of local vendors, offers a cost-saving solution for budget shoppers.&nbsp;</span><br><br></p>
                                <div class="my-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-4 py-xl-5" style="background: rgb(232,232,232);">
            <div class="container" data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="150">
                <div class="border rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-6" style="background: var(--bs-body-bg);">
                            <div class="p-4 p-md-5" style="background: var(--bs-body-bg);">
                                <h2 class="fw-bold mb-3" style="color: var(--bs-emphasis-color);font-family: Lora, serif;">Subic Bay</h2>
                                <p class="mb-4" style="color: #2d2d2d;"><br><span style="color: rgb(0, 0, 0);">Angeles City is the gastronomic center of the Philippines and the Kapampangan people are known around the country for their culinary delights. Angeles is full of food options at local restaurants and hotels so you will never run out of choices.</span><br><br></p>
                                <div class="my-3"></div>
                            </div>
                        </div>
                        <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><img class="w-100 h-100 fit-cover" src="assets/img/subic_bay_freeport_zone_cover.jpg"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-4 py-xl-5">
            <div class="container" data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="150">
                <div class="border rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-6"><img class="w-100 h-100 fit-cover" src="assets/img/download.jpg"></div>
                        <div class="col-md-6 order-first order-md-last" style="min-height: 250px;">
                            <div class="p-4 p-md-5">
                                <h2 class="fw-bold mb-3" style="color: var(--bs-emphasis-color);font-family: Lora, serif;">Gaming</h2>
                                <p class="mb-4" style="color: #2d2d2d;"><br><span style="color: rgb(0, 0, 0);">There are a dozen casinos and pokers rooms within a 5-minute drive, including Royce, Widus, Mimosa, Fontana, Stotsenberg, Casino Filipino, and Wild Aces.</span><br><br></p>
                                <div class="my-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container py-4 py-xl-5" data-aos="zoom-in-up" data-aos-duration="150" data-aos-delay="500">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold mb-3 mt-2" style="font-family: Lora, serif;">Testimonials</h2>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-lg-3">
                <div class="col">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <p class="text-center"><span style="color: rgb(0, 0, 0);">Horizon Towers, 5 star review, best place in Angeles City, lap pool on top of roof, with view of Clark air base,</span></p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                            <div>
                                <p class="fw-bold text-primary mb-0">Dela Cruz, Juan</p>
                                <p class="text-muted mb-0">Erat netus</p>
                            </div>
                        </div>
                        <div class="card border-0 shadow-none">
                            <div class="card-body d-flex align-items-center p-0"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <p class="text-center"><span style="color: rgb(0, 0, 0);">Horizon Towers, 5 star review, best place in Angeles City, lap pool on top of roof, with view of Clark air base,</span></p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                            <div>
                                <p class="fw-bold text-primary mb-0">Smith, John</p>
                                <p class="text-muted mb-0">Erat netus</p>
                            </div>
                        </div>
                        <div class="card border-0 shadow-none">
                            <div class="card-body d-flex align-items-center p-0"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <p class="text-center"><span style="color: rgb(0, 0, 0);">Horizon Towers, 5 star review, best place in Angeles City, lap pool on top of roof, with view of Clark air base,</span></p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                            <div>
                                <p class="fw-bold text-primary mb-0">Stephen, Airbnb</p>
                                <p class="text-muted mb-0">Erat netus</p>
                            </div>
                        </div>
                        <div class="card border-0 shadow-none">
                            <div class="card-body d-flex align-items-center p-0"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
