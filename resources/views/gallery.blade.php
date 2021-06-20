@extends('layout')

@section('title')
    <title>Activitar | Template</title>
@endsection

@section('style')
    
@endsection

@section('content')
    <x-header class="header-normal" />

    <!-- Breadcrumb Section Begin -->
    <x-breadcrumb title="Our Gallery" page="Gallery" />
    <!-- Breadcrumb End -->

    <!-- Gallery Section Begin -->
    <section class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-controls">
                        <ul>
                            <li class="active" data-filter="*">All GALLERY</li>
                            <li data-filter=".crossfit">Crossfit</li>
                            <li data-filter=".workout">Workout</li>
                            <li data-filter=".gym">GYM</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row gallery-filter">
                <div class="col-lg-4 col-sm-6 mix crossfit workout">
                    <div class="gallery-item">
                        <img src="img/gallery/gallery-1.jpg"" alt="">
                        <div class="gi-hover-warp">
                            <div class="gi-hover">
                                <a href="img/gallery/gallery-1.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
                                <a href="#"><i class="fa fa-chain"></i></a>
                                <h6>Time to Try a Bodyweight Workout <span>Run, Walk, Swimming</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mix workout gym">
                    <div class="gallery-item">
                        <img src="img/gallery/gallery-2.jpg"" alt="">
                        <div class="gi-hover-warp">
                            <div class="gi-hover">
                                <a href="img/gallery/gallery-2.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
                                <a href="#"><i class="fa fa-chain"></i></a>
                                <h6>Time to Try a Bodyweight Workout <span>Run, Walk, Swimming</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mix workout">
                    <div class="gallery-item">
                        <img src="img/gallery/gallery-3.jpg"" alt="">
                        <div class="gi-hover-warp">
                            <div class="gi-hover">
                                <a href="img/gallery/gallery-3.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
                                <a href="#"><i class="fa fa-chain"></i></a>
                                <h6>Time to Try a Bodyweight Workout <span>Run, Walk, Swimming</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mix gym">
                    <div class="gallery-item">
                        <img src="img/gallery/gallery-4.jpg"" alt="">
                        <div class="gi-hover-warp">
                            <div class="gi-hover">
                                <a href="img/gallery/gallery-4.jpg" class="image-popup"><i
                                        class="fa fa-search-plus"></i></a>
                                <a href="#"><i class="fa fa-chain"></i></a>
                                <h6>Time to Try a Bodyweight Workout <span>Run, Walk, Swimming</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mix crossfit">
                    <div class="gallery-item">
                        <img src="img/gallery/gallery-5.jpg"" alt="">
                        <div class="gi-hover-warp">
                            <div class="gi-hover">
                                <a href="img/gallery/gallery-5.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
                                <a href="#"><i class="fa fa-chain"></i></a>
                                <h6>Time to Try a Bodyweight Workout <span>Run, Walk, Swimming</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mix gym crossfit">
                    <div class="gallery-item">
                        <img src="img/gallery/gallery-6.jpg"" alt="">
                        <div class="gi-hover-warp">
                            <div class="gi-hover">
                                <a href="img/gallery/gallery-6.jpg" class="image-popup"><i
                                        class="fa fa-search-plus"></i></a>
                                <a href="#"><i class="fa fa-chain"></i></a>
                                <h6>Time to Try a Bodyweight Workout <span>Run, Walk, Swimming</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mix workout">
                    <div class="gallery-item">
                        <img src="img/gallery/gallery-7.jpg"" alt="">
                        <div class="gi-hover-warp">
                            <div class="gi-hover">
                                <a href="img/gallery/gallery-7.jpg" class="image-popup"><i
                                        class="fa fa-search-plus"></i></a>
                                <a href="#"><i class="fa fa-chain"></i></a>
                                <h6>Time to Try a Bodyweight Workout <span>Run, Walk, Swimming</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mix crossfit gym">
                    <div class="gallery-item">
                        <img src="img/gallery/gallery-8.jpg"" alt="">
                        <div class="gi-hover-warp">
                            <div class="gi-hover">
                                <a href="img/gallery/gallery-8.jpg" class="image-popup"><i
                                        class="fa fa-search-plus"></i></a>
                                <a href="#"><i class="fa fa-chain"></i></a>
                                <h6>Time to Try a Bodyweight Workout <span>Run, Walk, Swimming</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mix crossfit gym workout">
                    <div class="gallery-item">
                        <img src="img/gallery/gallery-9.jpg"" alt="">
                        <div class="gi-hover-warp">
                            <div class="gi-hover">
                                <a href="img/gallery/gallery-9.jpg" class="image-popup"><i
                                        class="fa fa-search-plus"></i></a>
                                <a href="#"><i class="fa fa-chain"></i></a>
                                <h6>Time to Try a Bodyweight Workout <span>Run, Walk, Swimming</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Cta Section Begin -->
    @include('includes._cta')
    <!-- Cta Section End -->
@endsection

@section('javascript')
    
@endsection