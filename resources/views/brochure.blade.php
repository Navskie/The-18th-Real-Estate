@extends('website')
@section('main')
    <section class="py-4 py-xl-5">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <h2 class="text-uppercase fw-bold mb-3" style="font-family: Lora, serif;">BROCHURE</h2>
                        <p class="mb-4">Etiam a rutrum, mauris lectus aptent convallis. Fusce vulputate aliquam, sagittis odio metus. Nulla porttitor vivamus viverra laoreet, aliquam netus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="photo-gallery py-4 py-xl-5">
        <div class="brochure">
            <!-- previous Button -->
            <button id="prev-btn" class="prev-btn">
                Prev
            </button>


            <div class="book" id="book">
                <!-- page1 -->
                <div id="page1" class="paper">
                    <div class="frontpage">
                        <div id="f1" class="front-content">
                            <h1>Front 1</h1>
                        </div>
                    </div>
                    <div class="backpage">
                        <div class="back-content" id="b1">
                            <h2>Back 1</h2>
                        </div>
                    </div>
                </div>

                <!-- page2 -->
                <div id="page2" class="paper">
                    <div class="frontpage">
                        <div id="f2" class="front-content">
                            <h1>Front 2</h1>
                        </div>
                    </div>
                    <div class="backpage">
                        <div class="back-content" id="b2">
                            <h2>Back 2</h2>
                        </div>
                    </div>
                </div>

                <!-- page3 -->
                <div id="page3" class="paper">
                    <div class="frontpage">
                        <div id="f3" class="front-content">
                            <h1>Front 3</h1>
                        </div>
                    </div>
                    <div class="backpage">
                        <div class="back-content" id="b3">
                            <h2>Back 3</h2>
                        </div>
                    </div>
                </div>
            </div>


            <!-- next Button -->
            <button id="next-btn" class="next-btn">
                Next
            </button>
        </div>
    </section>
@endsection
