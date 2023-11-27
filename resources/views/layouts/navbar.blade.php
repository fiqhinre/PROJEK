    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="/" class="navbar-brand d-none d-lg-block">
                <h1 href="/" class="m-0 display-5 text-capitalize"><span class="text-primary">Pet</span><span style="color: white;">CareHub</span></h1>
            </a>            
            <a href="/" class="navbar-brand d-block d-lg-none">
                <h1 href="/" class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Pet</span>CareHub</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="/" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
                    <a href="about" class="nav-item nav-link {{ (request()->is('about')) ? 'active' : '' }}">About</a>
                    <a href="service" class="nav-item nav-link {{ (request()->is('service')) ? 'active' : '' }}">Service</a>
                    <a href="price" class="nav-item nav-link {{ (request()->is('price')) ? 'active' : '' }}">Price</a>
                    <a href="booking" class="nav-item nav-link {{ (request()->is('booking')) ? 'active' : '' }}">Booking</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ (request()->is('#')) ? 'active' : '' }}" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="grid" class="dropdown-item">Blog Grid</a>
                            <a href="detail" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="contact" class="nav-item nav-link {{ (request()->is('contact')) ? 'active' : '' }}">Contact</a>
                </div>
                <a href="login" class="btn btn-lg btn-primary px-3 d-none d-lg-block" style="margin-right: 10px;">Login</a>
                <a href="register" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Register</a>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->