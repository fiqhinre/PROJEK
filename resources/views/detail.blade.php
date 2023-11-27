 
 @extends('layouts.app')

 @section('content')
 
 <!-- Detail Start -->
  <div class="container py-5">
    <div class="row pt-5">
        <div class="col-lg-8">
            <div class="d-flex flex-column text-left mb-4">
                <h4 class="text-secondary mb-3">Blog Detail</h4>
                <h1 class="mb-3">Tajamnya indra penciuman kucing</h1>
                <div class="d-index-flex mb-2">
                    <span class="mr-3"><i class="fa fa-user text-muted"></i> Admin</span>
                    <span class="mr-3"><i class="fa fa-folder text-muted"></i> Web Design</span>
                    <span class="mr-3"><i class="fa fa-comments text-muted"></i> 15</span>
                </div>
            </div>

            <div class="mb-5">
                <img class="img-fluid w-100 mb-4" src="img/carousel-1.jpg" alt="Image">
                <p>Kucing memiliki indera penciuman yang berfungsi dengan sangat kuat. Apabila reseptor penciuman manusia hanya 5 juta, kucing memiliki reseptor sebanyak 80 juta. Kucing dapat mengendus aroma yang beragam, mulai dari wangi makanan daging yang sangat menggiurkan baginya hingga aroma pemiliknya.</p>
                <h2 class="mb-4">Pentingnya Steril Pada Kucing.</h2>
                <img class="img-fluid w-50 float-left mr-4 mb-3" src="img/blog-1.jpg" alt="Image">
                <p>Mengurangi Risiko Kehamilan
                    Bagi kamu yang merasa sudah cukup memiliki anabul, sterilisasi kucing akan mengurangi/meniadakan risiko kehamilan. Pada kucing betina akan dilakukan prosedur pengangkatan ovarium, sementara pada kucing jantan dilakukan prosedur pengangkatan testis, sehingga kucing tidak lagi bereproduksi.</p>
                <h3 class="mb-4">Melatih doggy yang benar</h3>
                <img class="img-fluid w-50 float-right ml-4 mb-3" src="img/blog-2.jpg" alt="Image">
                <p>Cara melatih anjing supaya nurut
                    Berikut ini tips melatih anjing agar patuh, yang bisa dicoba:
                   <br> 1.Pahami Cara Anjing Belajar.</br>
                    <br> 2. Beri Hadiah Kecil Jika Menyukai Perilakunya.</br>
                   <br> 3.Kontrol Respon secara Konsisten.</br>
                   <br> 4.Jadilah Pemimpin yang Baik.</br>
            </div>
            
            <div class="media bg-light mb-5 p-4 p-md-5">
                <img src="img/user.jpg" alt="Image" class="img-fluid mr-4 mt-1" style="width: 80px;">
                <div class="media-body">
                    <h5 class="mb-3">Sugeng</h5>
                    <p class="m-0">Kemarin saya sudah coba ke kucing, ternyata agak susah ya. apalagi kucing oren.</p>
                </div>
            </div>

            <div class="mb-5">
                <h3 class="mb-4">3 Comments</h3>
                <div class="media mb-4">
                    <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                    <div class="media-body">
                        <h6>Ismail <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                        <p>Kan kucing pak bukan anjing hahaha, ini kan untuk anjing :) </p>
                        <button class="btn btn-sm btn-light">Reply</button>
                    </div>
                </div>
                <div class="media mb-4">
                    <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                    <div class="media-body">
                        <h6>Sugeng <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                        <p>iya saya iseng mas, pingin pinter juga kucing saya, ya saya coba hahahaha</p>
                        <button class="btn btn-sm btn-light">Reply</button>
                        <div class="media mt-4">
                            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6>Ismail <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                <p>Ada-ada saja pak hahha</p>
                                <button class="btn btn-sm btn-light">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="padding: 30px; background: #f6f6f6;">
                <h3 class="mb-4">Leave a comment</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="url" class="form-control" id="website">
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-0">
                        <input type="submit" value="Leave Comment" class="btn btn-primary px-3">
                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-4 mt-5 mt-lg-0">
            <div class="mb-5">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary"><i
                                    class="fa fa-search"></i></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="mb-5">
                <h3 class="mb-4">Categories</h3>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Web Design
                        <span class="badge badge-primary badge-pill">150</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Web Development
                        <span class="badge badge-primary badge-pill">131</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Online Marketing
                        <span class="badge badge-primary badge-pill">78</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Keyword Research
                        <span class="badge badge-primary badge-pill">56</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Email Marketing
                        <span class="badge badge-primary badge-pill">98</span>
                    </li>
                </ul>
            </div>
            <div class="mb-5">
                <img src="img/blog-1.jpg" alt="" class="img-fluid">
            </div>
            <div class="mb-5">
                <h3 class="mb-4">Recent Post</h3>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Pentingnya steril bagi kucing</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="img/blog-2.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Cara mendidik Dogy</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="img/blog-3.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Berkomunikasi dengan anabul anda ternyata penting</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Pentingnya steril bagi kucing</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="img/blog-2.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Cara mendidik Dogy</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="img/blog-3.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Berkomunikasi dengan anabul anda ternyata penting</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="mb-5">
                
            <br></br>
                <h3 class="mb-4">Tag Cloud</h3>
                <div class="d-flex flex-wrap m-n1">
                    <a href="" class="btn btn-outline-primary m-1">Design</a>
                    <a href="" class="btn btn-outline-primary m-1">Development</a>
                    <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                    <a href="" class="btn btn-outline-primary m-1">SEO</a>
                    <a href="" class="btn btn-outline-primary m-1">Writing</a>
                    <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                </div>
            </div>
            
<!-- Detail End -->

@endsection