<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $informasi->alamat }}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $informasi->no_telepon }}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $informasi->email }}</p>
                {{-- <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>RT.05/RW.02, Ciluar, Kec. Bogor Utara, Kota Bogor, Jawa Barat</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0821-8232-1144</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>admin@assalamvillage.com</p> --}}
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a class="btn btn-link text-white-50" href="">About Us</a>
                <a class="btn btn-link text-white-50" href="">Contact Us</a>
                <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-4">Ikuti Berita Kami</h5>
                <p>Ikuti update terbaru dari Perumahan Assalam Village</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    Copyright 2022 &copy; <a class="border-bottom" href="#">Assalam Village</a>, All Right Reserved. 
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End --> 