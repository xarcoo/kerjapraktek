@extends('home-en')
@section('content')
    <section class="hero">
        <div class="hero-background">
            <img src="{{ asset('assets/images/lokasi-tambang/14.jpg') }}" alt="Hero Image">
        </div>
        </div>
        <div class="container text-center hero-content">
            <h1 id="nama-perusahaan">PT. Anugrah Tambang</h1>
            <p id="lokasi-perusahaan">Dusun Sumber Bende Desa Argotirto Kecamatan Sumbermanjing Wetan Kabupaten Malang</p>
            <a class="btn btn-peta" href="https://maps.app.goo.gl/XiUFq5sMUHrzVaFr9">See Our Location</a>
        </div>
    </section>

    <section class="tentang ">
        <div class="container-tentang">
            <div class="left">
                <div class="container-left">
                    <div class="tentang-anugrah-tambang d-flex">
                        <div class="container-judul-tentang d-flex">
                            <h5>About</h5>
                            <h2>Anugrah Tambang</h2>
                        </div>
                    </div>
                    <div class="sejarah-singkat d-flex">
                        <p class="content-tentang">CV. Anugerah Tambang began in 1982 when H. Moch. Imam (founder) entered
                            into a cooperative relationship by sending mining products in the form of Phyropilite stone to a
                            ceramic company. When this company was first established, it was named Anugrah Tambang with a
                            land area of 31,009 m<sup>2</sup>. Anugrah Tambang runs a stone mining operation in Sumber Bende
                            Hamlet,
                            Argotirto Village, Sumbermanjing Wetan District, Malang Regency.</p>
                        <p class="content-tentang">
                            Initially, mining operations were carried out manually, but over time, they started using heavy
                            equipment such as excavators and dump trucks. In 2011, CV. Anugerah Tambang was founded by H.
                            Moch. Imam as Director. The company continues to grow and in 2022, Tjahaya Group made an
                            investment. After improving mine conditions, in January 2024, the company is ready to start
                            production. They also invested in two Komatsu Excavator units in 2024 and will collaborate with
                            PT. Traser Mineral Indonesia to market their products.
                        </p>
                        <div class="btn-detail">
                            <a href="{{ url('/tentangkami') }}" class="btn btn-primary-outline px-3">
                                <b>See more detail</b>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right">
                <!-- <div class="cornerline"><img src="https://cdn.iconscout.com/icon/free/png-256/free-corner-2854496-2385106.png" alt="Corner Line" width="100em"></div> -->
                <div class="tahun-berdiri d-flex">
                    <div class="container-tahun-berdiri d-flex">
                        <h5>Since</h5>
                        <br>
                        <h5>1982</h5>
                    </div>
                </div>
                <div class="produk-utama d-flex">
                    <div class="container-produk-utama d-flex">
                        <h5>Mining <br> Product</h5>
                        <br>
                        <h5>Batu Phyropillite</h5>
                    </div>
                </div>
                <div class="anak-perusahaan d-flex">
                    <div class="container-anak-perusahaan d-flex">
                        <h5>Part of</h5>
                        <br>
                        <h5>Tjahaya <br> Group</h5>
                    </div>
                </div>
                <div class="luas-tanah d-flex">
                    <div class="container-luas-tanah d-flex">
                        <h5>Area</h5>
                        <br>
                        <h5>31.009 m2</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="produk">
        <div class="container-fluid">
            <h2 class="produk-title">Our Product</h2>
            <div class="d-flex justify-content-center align-items-center">
                <div class="row produk-gambar">
                    <div class="col-md-4">
                        <img data-src="{{ asset('assets/images/produk/Batu Pirofilit.jpg') }}" alt="Batu Pirofilit"
                            class="img-fluid lazyload">
                        <h4>Pyrophillite Stone</h4>
                    </div>
                    <div class="col-md-4">
                        <img data-src="{{ asset('assets/images/produk/Batu Pyrite.jpg') }}" alt="Batu Pyrite"
                            class="img-fluid lazyload">
                        <h4>Pyrite Stone</h4>
                    </div>
                    <div class="col-md-4">
                        <img data-src="{{ asset('assets/images/produk/Batu Rijang or Kerong.jpg') }}"
                            alt="Batu Rijang Kerong" class="img-fluid lazyload">
                        <h4>Rijang Stone</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video">
        <div class="container-fluid d-flex justify-content-center align-items-center video-item">
            <h2 class="video-title">Mining Process</h2>
            <div class="video-container">
                <video width="100%" controls>
                    <source src="{{ asset('videos/tambang.mp4') }}" type="video/mp4"
                        alt="Browser Anda tidak mendukung pemutaran video">
                </video>
            </div>
        </div>
    </section>

    <section class="galeri">
        <div class="container-fluid">
            <h2 class="galeri-title">Gallery of Mining Location</h2>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row pb-4">
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/1.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/2.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/3.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/4.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/5.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/6.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row pb-4">
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/7.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/8.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/9.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/10.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/11.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/12.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row pb-4">
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/13.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/14.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/15.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/16.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/17.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                            <div class="col-md-4">
                                <img data-src="{{ asset('assets/images/lokasi-tambang/18.jpg') }}"
                                    alt="Gambar Lokasi Tambang" class="img-fluid lazyload">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
@endsection
