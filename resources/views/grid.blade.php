@extends('layouts.app')

@section('content')

<!-- Blog Start -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5 pt-5">
        <h4 class="text-secondary mb-3">Pet Blog</h4>
        <h1 class="display-4 m-0"><span class="text-primary">Updates</span> From Blog</h1>
    </div>
    <div class="row pb-3">
        <div class="col-lg-4 mb-4">
            <div class="card border-0 mb-2">
                <img class="card-img-top" src="img/blog-1.jpg" alt="">
                <div class="card-body bg-light p-4">
                    <h4 class="card-title text-truncate">Manfaat Steril kucing</h4>
                    <div class="d-flex mb-3">
                        <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                        <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                        <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                    </div>
                    <p>steril kucing anda demi kesehatan kucing...............</p>
                    <a class="font-weight-bold" href="">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 mb-2">
                <img class="card-img-top" src="img/blog-2.jpg" alt="">
                <div class="card-body bg-light p-4">
                    <h4 class="card-title text-truncate">Melatih doggy yang benar</h4>
                    <div class="d-flex mb-3">
                        <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                        <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                        <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                    </div>
                    <p>Tips and trick bagi anda yang ingin melatih anabul anda dari nol.</p>
                    <a class="font-weight-bold" href="">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 mb-2">
                <img class="card-img-top" src="img/blog-3.jpg" alt="">
                <div class="card-body bg-light p-4">
                    <h4 class="card-title text-truncate">Pentingnya komunikasi dengan anabul tersayang</h4>
                    <div class="d-flex mb-3">
                        <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                        <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                        <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                    </div>
                    <p>Ternyata mengajak berbicara anabul kalian sangat penting loh moms, karena anabul akan merasa di perhatikan dan merasa memiliki teman.</p>
                    <a class="font-weight-bold" href="">Read More</a>
                </div>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img/blog-1.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Manfaat Steril kucing</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                        <p>steril kucing anda demi kesehatan kucing...............</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img/blog-2.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Melatih doggy yang benar</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                        <p>Tips and trick bagi anda yang ingin melatih anabul anda dari nol.</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img/blog-3.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Pentingnya komunikasi dengan anabul tersayang</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                        <p>Ternyata mengajak berbicara anabul kalian sangat penting loh moms, karena anabul akan merasa di perhatikan dan merasa memiliki teman.</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
        <div class="col-lg-12">
            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center mb-4">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo; Previous</span>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">Next &raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection