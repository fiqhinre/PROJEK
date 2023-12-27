@extends('layouts.app')

@section('content')



    <!-- Services Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Our Services</h4>
                <h1 class="display-4 m-0"><span class="text-primary">Premium</span> Pet Services</h1>
                <a class="btn btn-success mt-5" href="">Tambah Service</a>
            </div>
            <div class="row pb-3">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Day Care</h3>
                        <p>Penitipan dengan fasilitas lengkap dan terpercaya. Kenyamanan menjadi prioritas kami.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-food display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Sitter</h3>
                        <p>Hewan anda tidak suka menginap ditempat lain?? tak perlu khawatir, petugas kami siap menemani</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Grooming</h3>
                        <p>Perawatan dengan jasa profesional serta produk yang berkualitas bagi anabul tersayang.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-cat display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Per Training</h3>
                        <p>Ingin anabul anda terlatih agar dapat diajak bermain tricks? pilih trainer terpercaya anda disimi.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Testimonial Start -->
    <div class="container-fluid p-0 py-5">
        <div class="container p-0 pt-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Reviews</h4>
                <h1 class="display-4 m-0">Apa kata <span class="text-primary">Customers?</span></h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Mr. Budi</h5>
                        </div>
                    </div>
                    <p class="m-0">Sebagai orang yang tinggal sendiri, Pet sitter sangat membantu saya untuk menjaga anabul tercinta. Jadi saya tak perlu khawatir siapa yang akan menjaga anabul saya saat dinas.</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Mr. Santoso</h5>
                        </div>
                    </div>
                    <p class="m-0">Saya tak sempat membawa anabul saya pergi ke petshop untuk grooming, jadi saya butuh tenaga groomer untuk datang ke rumah saya. dan disini saya dapt menemukannya</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection