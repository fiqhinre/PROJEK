@extends('layouts.app')

@section('content')
  <!-- Services Start -->
  <div class="container-fluid bg-light pt-5">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Our Services</h4>
            <h1 class="display-4 m-0"><span class="text-primary">Premium</span> Pet Services</h1>
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
<br></br>
<!-- Booking Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="bg-primary py-5 px-4 px-sm-5">
                    <form class="py-5">
                        <div class="form-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                        </div>
                        <div class="form-group">
                            <div class="date" id="date" data-target-input="nearest">
                                <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Reservation Date" data-target="#date" data-toggle="datetimepicker"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="time" id="time" data-target-input="nearest">
                                <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Reservation Time" data-target="#time" data-toggle="datetimepicker"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="custom-select border-0 px-4" style="height: 47px;">
                                <option selected>Select A Service</option>
                                <option value="1">Pet Day Care</option>
                                <option value="2">Pet Grooming</option>
                                <option value="3">Pet Sitter</option>
                                <option value="4">Pet Trainning</option>
                            </select>
                        </div>
                        <div>
                            <button class="btn btn-dark btn-block border-0 py-3" type="submit">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Going for a vacation?</h4>
                <h1 class="display-4 mb-4">Book For <span class="text-primary">Your Pet</span></h1>
                <p>Kesulitan merawat anabul saat anda akan bepergian? </p>
                <p>Bingung mencari penjaga anabul selama anda bekerja?</p>
                <br> </br>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <h1 class="flaticon-house font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Pet Day Care</h5>
                            </div>
                            <p>Penitipan anabul dengan fasilitas lengkap dan terpercaya.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <h1 class="flaticon-food font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Pet Sitter</h5>
                            </div>
                            <p>Hewan anda tidak suka menginap ditempat lain?? tak perlu khawatir, petugas kami akan menemani anabul anda di rumah anda</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <h1 class="flaticon-grooming font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Pet Grooming</h5>
                            </div>
                            <p class="m-0">Perawatan dengan jasa profesional bagi anabul tersayang</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <h1 class="flaticon-toy font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Pet Tranning</h5>
                            </div>
                            <p class="m-0">Ingin hewan anda melakukan trik?? jangan khawatir, kami memiliki jasa profesional
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking Start -->

<br></br>
<!-- Pricing Plan Start -->
<div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Going for a vacation?</h4>
                <h1 class="display-4 mb-4">Book For <span class="text-primary">Your Pet</span></h1>
                <p>Kesulitan merawat anabul saat anda akan bepergian? </p>
                <p>Bingung mencari penjaga anabul selama anda bekerja?</p>
                <br> </br>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <h1 class="flaticon-house font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Pet Day Care</h5>
                            </div>
                            <p>Penitipan anabul dengan fasilitas lengkap dan terpercaya.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <h1 class="flaticon-food font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Pet Sitter</h5>
                            </div>
                            <p>Hewan anda tidak suka menginap ditempat lain?? tak perlu khawatir, petugas kami akan menemani anabul anda di rumah anda</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <h1 class="flaticon-grooming font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Pet Grooming</h5>
                            </div>
                            <p class="m-0">Perawatan dengan jasa profesional bagi anabul tersayang</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <h1 class="flaticon-toy font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Pet Tranning</h5>
                            </div>
                            <p class="m-0">Ingin hewan anda melakukan trik?? jangan khawatir, kami memiliki jasa profesional
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br></br>

<!-- Pricing Plan End -->
@endsection