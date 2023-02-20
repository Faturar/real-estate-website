<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="/" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="{{ Storage::url($informasi->logo) }}" alt="Icon" style="width: 30px; height: 30px;">
            </div>
            <h1 class="m-0 ms-2 fs-5 text-primary">{{ $informasi->title }}</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="/#home" class="nav-item nav-link">Home</a>
                <a href="/#category" class="nav-item nav-link">Tipe Rumah</a>
                <a href="/#about" class="nav-item nav-link">Tentang</a>
                <a href="/#property" class="nav-item nav-link">Rumah Dijual</a>
                <a href="/#testimonial" class="nav-item nav-link">Testimonial</a>
            </div>
            <a href="/contact" class="btn btn-primary px-3 d-none d-lg-flex">Contact</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->