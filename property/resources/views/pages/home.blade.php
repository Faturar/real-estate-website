@extends('layouts.app')

@section('title')
    {{ $informasi->title }}
@endsection

@section('content')
  <!-- Header Start -->
  <div id="home" class="container-fluid header bg-white p-0">
      <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
          <div class="col-md-6 p-5 mt-lg-5">
              <h1 class="display-5 animated fadeIn mb-4 text-primary">{{ $informasi->title }}</h1>
              <p class="animated fadeIn mb-4 pb-2 pe-4">{{ $informasi->short_description }}</p>
              <a href="/contact" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Contact</a>
          </div>
          <div class="col-md-6 animated fadeIn">
              <div class="owl-carousel header-carousel">
                  <div class="owl-carousel-item">
                      <img class="img-fluid" src="{{ url('frontend/img/carousel2.jpg') }}" alt="">
                  </div>
                  <div class="owl-carousel-item">
                      <img class="img-fluid" src="{{ url('frontend/img/carousel.jpg') }}" alt="">
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Header End -->


  <!-- Category Start -->
  <div id="category" class="container-xxl py-5 mt-5">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <h1 class="mb-3">Tipe Rumah</h1>
          </div>
          <div class="row g-4">
            @forelse ($tipe_rumahs as $tipe_rumah)
              <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="cat-item d-block bg-light text-center rounded p-3" href="">
                      <div class="rounded px-4 py-5">
                          <div class="icon mb-3">
                              <img class="p-2" width="80" src="{{ Storage::url($tipe_rumah->icon) }}" alt="{{ $tipe_rumah->name }}">
                          </div>
                          <h4>{{ $tipe_rumah->name }}</h4>

                          <span>{{ $tipe_rumah->deskripsi }}</span>
                      </div>
                  </div>
              </div>
            @empty
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cat-item d-block bg-light text-center rounded p-3">
                        <div class="rounded px-4 py-5">
                            <h4>Tidak ada tipe rumah</h4>
                        </div>
                    </div>
                </div>
            @endforelse
          </div>
      </div>
  </div>
  <!-- Category End -->


  <!-- About Start -->
  <div id="about" class="container-xxl py-5 mt-5">
      <div class="container">
          <div class="row g-5 align-items-center">
              <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                  <div class="about-img position-relative overflow-hidden p-5 pe-0">
                      <img class="img-fluid w-100" src="{{ url('frontend/img/aboutt.jpg') }}">
                  </div>
              </div>
              <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                  <h1 class="mb-4">Tetang Assalam Village</h1>
                  <p class="mb-4">Dengan konsep cluster, Perumahan Assalam Village yang berlokasi di Bogor, Jawa Barat. Dengan beberapa kelebihan yang ditawarkan, yaitu:</p>
                  <p><i class="fa fa-check text-primary me-3"></i>Terdapat masjid dalam komplek</p>
                  <p><i class="fa fa-check text-primary me-3"></i>Dekat dengan akses tol</p>
                  <p><i class="fa fa-check text-primary me-3"></i>Dekat dengan Akademi Analis Kimia</p>
                  <p><i class="fa fa-check text-primary me-3"></i>Dekat dengan pasar tradisional Ciluar</p>
                  <p><i class="fa fa-check text-primary me-3"></i>Hunian nyaman bernuansa islami</p>
                  <a class="btn btn-primary py-3 px-5 mt-3" href="/contact">Contact</a>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->


  <!-- Property List Start -->
  <div id="property" class="container-xxl py-5">
      <div class="container">
          <div class="row g-0 gx-5 align-items-end">
              <div class="col-lg-6">
                  <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                      <h1 class="mb-3">Rumah yang dijual</h1>
                      <p>Daftar rumah yang masih belum dimiliki di Perumahan Assalam Village</p>
                  </div>
              </div>
          </div>
          <div class="tab-content">
              <div id="tab-1" class="tab-pane fade show p-0 active">
                  <div class="row g-4">
                    @forelse ($rumah_dijuals as $rumah_dijual)
                      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                          <div class="property-item rounded overflow-hidden">
                              <div class="position-relative overflow-hidden">
                                  <a href="{{ route('detail', $rumah_dijual->id) }}">
                                    <img class="img-fluid" src="{{ Storage::url($rumah_dijual->image) }}" alt="">
                                  </a>
                                  <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                    {{ $rumah_dijual->status }}
                                  </div>
                                  <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                    {{ $rumah_dijual->tipe }}
                                  </div>
                              </div>
                              <div class="p-4 pb-0">
                                  <h5 class="text-primary mb-3">{{ $rumah_dijual->harga_cash }} JT</h5>
                                  <a class="d-block h5 mb-2" href="{{ route('detail', $rumah_dijual->id) }}">{{ $rumah_dijual->name }}</a>
                                  <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $rumah_dijual->lokasi }}</p>
                              </div>
                              <div class="d-flex border-top">
                                  <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-ruler-combined text-primary me-2"></i>
                                    {{ $rumah_dijual->ukuran_tanah }} M
                                  </small>
                                  <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-bed text-primary me-2"></i>
                                    {{ $rumah_dijual->kamar_tidur }} Kasur
                                  </small>
                                  <small class="flex-fill text-center py-2">
                                    <i class="fa fa-bath text-primary me-2"></i>
                                    {{ $rumah_dijual->kamar_mandi }} Kamar Mandi
                                  </small>
                              </div>
                          </div>
                      </div>
                    @empty
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">$12,345</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                    @endforelse
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Property List End -->


  <!-- Call to Action Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="bg-light rounded p-3">
              <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                  <div class="row g-5 align-items-center">
                      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                          <img class="img-fluid rounded w-100" src="{{ url('frontend/img/call-to-action.jpg') }}" alt="">
                      </div>
                      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                          <div class="mb-4">
                              <h1 class="mb-3">Hubungi kami segera untuk info lebih lanjut</h1>
                              <p>Tim Assalam Village akan menjelaskan dan menjawab pertanyaan Anda hubungi kami segera!</p>
                          </div>
                          <a href="tel:{{ $informasi->no_telepon }}" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Telepon</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Call to Action End -->


  <!-- Testimonial Start -->
  <div id="testimonial" class="container-xxl py-5">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <h1 class="mb-3">Kata Mereka</h1>
              <p>Kata mereka yang sudah membeli rumah di perumahan Assalam Village dan tinggal di perumahan Assalam Village</p>
          </div>
          <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @forelse ($testimonials as $testimonial)
              <div class="testimonial-item bg-light rounded p-3">
                  <div class="bg-white border rounded p-4">
                      <p>{{ $testimonial->deskripsi }}</p>
                      <div class="d-flex align-items-center">
                          <img class="img-fluid flex-shrink-0 rounded" src="{{ Storage::url($testimonial->profile) }}" style="width: 45px; height: 45px;">
                          <div class="ps-3">
                              <h6 class="fw-bold mb-1">{{ $testimonial->name }}</h6>
                              <small>{{ $testimonial->profesi }}</small>
                          </div>
                      </div>
                  </div>
              </div>
            @empty
                <div class="testimonial-item bg-light rounded p-3">
                    <h4>Tidak ada testimonial</h4>
                </div>
            @endforelse
          </div>
      </div>
  </div>
  <!-- Testimonial End -->

  <!-- Contact Start -->
  <div id="contact" class="container-xxl py-5">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <h1 class="mb-3">Contact Us</h1>
              <p>Jika anda mempunyai pertanyaan mengenai rumah yang kami jual anda bisa menghubungi kami melalui kontak dibawah.</p>
          </div>
          <div class="row g-4">
              <div class="col-12">
                  <div class="row gy-4">
                      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                          <div class="bg-light rounded p-3">
                              <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                  <div class="icon me-3" style="width: 45px; height: 45px;">
                                      <i class="fa fa-map-marker-alt text-primary"></i>
                                  </div>
                                  <span>{{ $informasi->alamat }}</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                          <div class="bg-light rounded p-3">
                              <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                  <div class="icon me-3" style="width: 45px; height: 45px;">
                                      <i class="fa fa-envelope-open text-primary"></i>
                                  </div>
                                  <span>{{ $informasi->email }}</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                          <div class="bg-light rounded p-3">
                              <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                  <div class="icon me-3" style="width: 45px; height: 45px;">
                                      <i class="fa fa-phone-alt text-primary"></i>
                                  </div>
                                  <span>{{ $informasi->no_telepon }}</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=assalam village&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://mcpedls.com/">minecraft download</a></div><style>.mapouter{position:relative;text-align:right;width:100% !important;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100% !important;height:400px;}.gmap_iframe {width:100% !important;height:400px!important;}</style></div>
              </div>
              <div class="col-md-6">
                  <div class="wow fadeInUp" data-wow-delay="0.5s">
                      <h4>Write A Message</h4>
                      <form action="{{ route('message.store') }}" method="POST">
                        @csrf

                          <div class="row g-3">
                              <div class="col-md-6">
                                  <div class="form-floating">
                                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                      <label for="name">Your Name</label>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-floating">
                                      <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                                      <label for="email">Your Email</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-floating">
                                      <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
                                      <label for="subject">Subject</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-floating">
                                      <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 150px" required></textarea>
                                      <label for="message">Message</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Contact End -->
  
@endsection