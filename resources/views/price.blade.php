@extends('layouts.app')

@section('content')
 
 <!-- Pricing Plan Start -->
 <div class="container-fluid bg-light pt-5 pb-4">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">

            <h1 class="display-4 m-0">Pilih  <span class="text-primary">Harga Terbaik</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top" src="img/price-1.jpg" alt="">
                        <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                            <h3 class="text-primary mb-3">Pet Day care</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp-</small>150,000<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Day</small>
                            </h1>
                        </div>
                    </div>
                    <div class="card-body text-center p-0">
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Feeding</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Grooming</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Pick Up</li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 p-0">
                        <a href="" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Booking now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top" src="img/price-2.jpg" alt="">
                        <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                            <h3 class="text-secondary mb-3">Grooming</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp-</small>100,000<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Pet</small>
                            </h1>
                        </div>
                    </div>
                    <div class="card-body text-center p-0">
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Grooming</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Hair Cut</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Feeding</li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 p-0">
                        <a href="" class="btn btn-secondary btn-block p-3" style="border-radius: 0;">Booking Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top" src="img/price-3.jpg" alt="">
                        <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                            <h3 class="text-primary mb-3">Pet Sitter</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp-</small>20,000<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ hour</small>
                            </h1>
                        </div>
                    </div>
                    <div class="card-body text-center p-0">
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Feeding</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Looking after the pet</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Grooming</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Training</li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 p-0">
                        <a href="" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Booking Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Pricing Plan End -->

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
<br>

<!-- Booking Start -->

@endsection