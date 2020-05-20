<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('Frontend/template/head'); ?>
</head>

<body class="aa-price-range">
    <!-- Pre Loader -->
    <div id="aa-preloader-area">
        <div class="pulse"></div>
    </div>
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header section -->
    <?php $this->load->view('Frontend/template/header');
    ?>
    <!-- End header section -->

    <!-- Start menu section Navbar -->
    <?php $this->load->view('Frontend/template/navbar'); ?>
    <!-- End menu section -->

    <!-- Start slider  -->
    <section id="aa-slider">
        <div class="aa-slider-area">
            <!-- Top slider -->
            <div class="aa-top-slider">
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="<?php echo base_url() ?>assets/Frontend/img/slider/q2.jpg" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Lebih Dari</span>
                        <h2 class="aa-top-slider-title">1999+ Properti</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>Jember, Indonesia (ID)</p>
                        <span class="aa-top-slider-off">Discount 30% OFF</span>
                        <p class="aa-top-slider-price">Rp.500.000</p>
                        <a href="#" class="aa-top-slider-btn">Selengkapnya <span class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="<?php echo base_url() ?>assets/Frontend/img/slider/q.jpg" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Duplex</span>
                        <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                        <span class="aa-top-slider-off">30% OFF</span>
                        <p class="aa-top-slider-price">$460,000</p>
                        <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="img/slider/1.jpg" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Duplex</span>
                        <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                        <span class="aa-top-slider-off">30% OFF</span>
                        <p class="aa-top-slider-price">$460,000</p>
                        <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="img/slider/5.jpg" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Duplex</span>
                        <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                        <span class="aa-top-slider-off">30% OFF</span>
                        <p class="aa-top-slider-price">$460,000</p>
                        <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="img/slider/4.jpg" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Duplex</span>
                        <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                        <span class="aa-top-slider-off">30% OFF</span>
                        <p class="aa-top-slider-price">$460,000</p>
                        <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="img/slider/6.jpg" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Duplex</span>
                        <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                        <span class="aa-top-slider-off">30% OFF</span>
                        <p class="aa-top-slider-price">$460,000</p>
                        <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
            </div>
        </div>
    </section>
    <!-- End slider  -->

    <!-- Advance Search -->
    <section id="aa-advance-search">
        <div class="container">
            <div class="aa-advance-search-area">
                <div class="form">
                    <div class="aa-advance-search-top">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="aa-single-advance-search">
                                    <input type="text" placeholder="Type Your Location">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="aa-single-advance-search">
                                    <select>
                                        <option value="0" selected>Category</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="aa-single-advance-search">
                                    <select>
                                        <option value="0" selected>Type</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="aa-single-advance-search">
                                    <select>
                                        <option value="0" selected>Type</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="aa-single-advance-search">
                                    <input class="aa-search-btn" type="submit" value="Search">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aa-advance-search-bottom">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="aa-single-filter-search">
                                    <span>AREA (SQ)</span>
                                    <span>FROM</span>
                                    <span id="skip-value-lower" class="example-val">30.00</span>
                                    <span>TO</span>
                                    <span id="skip-value-upper" class="example-val">100.00</span>
                                    <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="aa-single-filter-search">
                                    <span>PRICE ($)</span>
                                    <span>FROM</span>
                                    <span id="skip-value-lower2" class="example-val">30.00</span>
                                    <span>TO</span>
                                    <span id="skip-value-upper2" class="example-val">100.00</span>
                                    <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Advance Search -->

    <!-- About us -->
    <section id="aa-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-about-us-area">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="aa-about-us-left">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/about-us.png" alt="image">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="aa-about-us-right">
                                    <div class="aa-title">
                                        <h2>Tentang Kami</h2>
                                        <span></span>
                                    </div>
                                    <p>PAKTI (Lapak Properti) adalah sebuah situs yang berbasis website dan mobile yang bertujuan untuk membantu mempertemukan pemilik properti dengan penyewa. Keunggulan kami antara lain:</p>
                                    <ul>
                                        <li>Penyewa akan dipertemukan langsung dengan pemilik properti itu sendiri.</li>
                                        <li>Pemilik properti pada situs kami sudah terverifikasi</li>
                                        <li>Kami bekerjasama dengan berbagai pengusaha properti ternama</li>
                                        <li>Situs kami dapat diakses di berbagai perangkat</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / About us -->

    <!-- Latest property -->
    <section id="aa-latest-property">
        <div class="container">
            <div class="aa-latest-property-area">
                <div class="aa-title">
                    <h2>Properti Disewakan Termurah</h2>
                    <span></span>
                    <p>Berbagai Properti Disewakan Ada disini </p>
                </div>
                <div class="aa-latest-properties-content">
                    <div class="row">
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/item/1.jpg" alt="img">
                                </a>
                                <div class="aa-tag for-sale">
                                    Tersedia
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            $35000
                                        </span>
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/item/2.jpg" alt="img">
                                </a>
                                <div class="aa-tag for-sale">
                                    Tersedia
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            $11000
                                        </span>
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/item/3.jpg" alt="img">
                                </a>
                                <div class="aa-tag sold-out">
                                    Tidak Tersedia
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            $15000
                                        </span>
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/item/4.jpg" alt="img">
                                </a>
                                <div class="aa-tag for-sale">
                                    Tersedia
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            $35000
                                        </span>
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/item/5.jpg" alt="img">
                                </a>
                                <div class="aa-tag sold-out">
                                    Tidak Tersedia
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            $11000
                                        </span>
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/item/6.jpg" alt="img">
                                </a>
                                <div class="aa-tag for-sale">
                                    Tersedia
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            $15000
                                        </span>
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Latest property -->

    <!-- Service section -->
    <section id="aa-service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-service-area">
                        <div class="aa-title">
                            <h2>Kenapa Harus Pilih Kami</h2>
                            <span></span>
                            <p>Kami Akan Mempertemukan Anda Langsung Dengan Pemilik Tanpa Prantara</p>
                        </div>
                        <!-- service content -->
                        <div class="aa-service-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-home"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Berbagai Properti</a></h4>
                                            <p>Kami Bekerjasama Dengan Berbagai Pengusaha Ternama</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Pemilik Terverifikasi</a></h4>
                                            <p>Pemilik Properti Sudah Kami Verifikasi Keaslian Data Diri</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-crosshairs"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Berbagai Lokasi</a></h4>
                                            <p>Labih dari 101 properti dari berbagai daerah</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-bar-chart-o"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Harga Termurah</a></h4>
                                            <p>Kami Tidak Menggunakan Prantara Anda dapat menghemat pengeluaran</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Service section -->

    <!-- Promo Banner Section -->
    <section id="aa-promo-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-banner-area">
                        <h3>Cari Properti Sesuai Keinginanmu</h3>
                        <p>Anda Belum Memiliki Dana Lebih Untuk Membeli Properti ? Sewa dulu aja agar kamu bisa menikmati properti tanpa kamu memilikinya.</p>
                        <a href="#" class="aa-view-btn">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Promo Banner Section -->

    <!-- Our Agent Section-->
    <section id="aa-agents">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-agents-area">
                        <div class="aa-title">
                            <h2>Partner Kami</h2>
                            <span></span>
                            <p>Meraka Adalah Salah Satu Pengguna Jasa Layanan Kami. Sekarang Giliran Anda</p>
                        </div>
                        <!-- agents content -->
                        <div class="aa-agents-content">
                            <ul class="aa-agents-slider">
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="<?php echo base_url() ?>assets/Frontend/img/agents/agent-1.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">Philip Smith</a></h4>
                                            <span>Top Agent</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="<?php echo base_url() ?>assets/Frontend/img/agents/agent-5.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">Adam Barney</a></h4>
                                            <span>Expert Agent</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="<?php echo base_url() ?>assets/Frontend/img/agents/agent-3.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">Paul Walker</a></h4>
                                            <span>Director</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="<?php echo base_url() ?>assets/Frontend/img/agents/agent-4.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">John Smith</a></h4>
                                            <span>Jr. Agent</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="<?php echo base_url() ?>assets/Frontend/img/agents/agent-1.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">Philip Smith</a></h4>
                                            <span>Top Agent</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="<?php echo base_url() ?>assets/Frontend/img/agents/agent-5.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">Adam Barney</a></h4>
                                            <span>Expert Agent</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="<?php echo base_url() ?>assets/Frontend/img/agents/agent-3.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">Paul Walker</a></h4>
                                            <span>Director</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="<?php echo base_url() ?>assets/Frontend/img/agents/agent-4.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">John Smith</a></h4>
                                            <span>Jr. Agent</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Our Agent Section-->

    <!-- Client Testimonial -->
    <section id="aa-client-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-client-testimonial-area">
                        <div class="aa-title">
                            <h2>Apa Kata Mereka Tentang Kami</h2>
                            <span></span>
                            <p>Apakah Masih Belum Cukup Testimoni Mereka Tentang Kami ?</p>
                        </div>
                        <!-- testimonial content -->
                        <div class="aa-testimonial-content">
                            <!-- testimonial slider -->
                            <ul class="aa-testimonial-slider">
                                <li>
                                    <div class="aa-testimonial-single">
                                        <div class="aa-testimonial-img">
                                            <img src="<?php echo base_url() ?>assets/Frontend/img/testimonial-1.png" alt="testimonial img">
                                        </div>
                                        <div class="aa-testimonial-info">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                        </div>
                                        <div class="aa-testimonial-bio">
                                            <p>David Muller</p>
                                            <span>Web Designer</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-testimonial-single">
                                        <div class="aa-testimonial-img">
                                            <img src="<?php echo base_url() ?>assets/Frontend/img/testimonial-3.png" alt="testimonial img">
                                        </div>
                                        <div class="aa-testimonial-info">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                        </div>
                                        <div class="aa-testimonial-bio">
                                            <p>David Muller</p>
                                            <span>Web Designer</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-testimonial-single">
                                        <div class="aa-testimonial-img">
                                            <img src="<?php echo base_url() ?>assets/Frontend/img/testimonial-2.png" alt="testimonial img">
                                        </div>
                                        <div class="aa-testimonial-info">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                        </div>
                                        <div class="aa-testimonial-bio">
                                            <p>David Muller</p>
                                            <span>Web Designer</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Testimonial -->

    <!-- Client brand -->
    <section id="aa-client-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-client-brand-area">
                        <ul class="aa-client-brand-slider">
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-1.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-2.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-3.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-5.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-4.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-1.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-2.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-3.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-5.png" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="<?php echo base_url() ?>assets/Frontend/img/client-brand-4.png" alt="brand image">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Client brand -->

    <!-- Latest blog -->
    <section id="aa-latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-latest-blog-area">
                        <div class="aa-title">
                            <h2>Latest News</h2>
                            <span></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe magni, est harum repellendus. Accusantium, nostrum!</p>
                        </div>
                        <div class="aa-latest-blog-content">
                            <div class="row">
                                <!-- start single blog -->
                                <div class="col-md-4">
                                    <article class="aa-blog-single">
                                        <figure class="aa-blog-img">
                                            <a href="#"><img src="<?php echo base_url() ?>assets/Frontend/img/blog-img-1.jpg" alt="img"></a>
                                            <span class="aa-date-tag">15 April, 16</span>
                                        </figure>
                                        <div class="aa-blog-single-content">
                                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                            <div class="aa-blog-single-bottom">
                                                <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                                <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                            </div>
                                        </div>

                                    </article>
                                </div>
                                <!-- start single blog -->
                                <div class="col-md-4">
                                    <article class="aa-blog-single">
                                        <figure class="aa-blog-img">
                                            <a href="#"><img src="<?php echo base_url() ?>assets/Frontend/img/blog-img-2.jpg" alt="img"></a>
                                            <span class="aa-date-tag">15 April, 16</span>
                                        </figure>
                                        <div class="aa-blog-single-content">
                                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                            <div class="aa-blog-single-bottom">
                                                <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                                <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- start single blog -->
                                <div class="col-md-4">
                                    <article class="aa-blog-single">
                                        <figure class="aa-blog-img">
                                            <a href="#"><img src="<?php echo base_url() ?>assets/Frontend/img/blog-img-3.jpg" alt="img"></a>
                                            <span class="aa-date-tag">15 April, 16</span>
                                        </figure>
                                        <div class="aa-blog-single-content">
                                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                            <div class="aa-blog-single-bottom">
                                                <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                                                <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Latest blog -->

    <!-- Footer -->
    <?php $this->load->view('Frontend/template/footer'); ?>
    <!-- / Footer -->



    <!-- jQuery library -->
    <?php $this->load->view('Frontend/template/js'); ?>
</body>

</html>