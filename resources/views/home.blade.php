<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Zayn Wedding - Wedding Organizer</title>
  <meta name="title" content="Zayn Wedding - Wedding Organizer">
  <meta name="description" content="This is a Restaurant html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="{{ asset('images/hero-slider-1.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('images/hero-slider-2.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('images/hero-slider-3.jpg') }}">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Zayn Wedding</p>
  </div>





  <!-- 
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
        Jl. Ruko Puri Gardena Blok A2 No 14, Kalideres, Jakarta Barat
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Daily, except Tues : 10.00 am to 19.00 pm</span>
      </div>

      <a href="tel:+6281298889045" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+6281298889045</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:zaynwedding@gmail.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">zaynwedding@gmail.com</span>
      </a>

    </div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="{{ asset('images/logo.png') }}" width="250" height="50" alt="Zayn - Home">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="{{ asset('images/logo.png') }}" width="160" height="50" alt="Zayn - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Beranda</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#menu" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Pricelist</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Tentang Kami</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#chef" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Direksi Kami</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Kontak</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Kunjungi Kami</p>

          <address class="body-4">
            Jl. Ruko Puri Gardena Blok A2 No 14, Kalideres,
            Jakarta Barat, DKI Jakarta 11840
          </address>

          <p class="body-4 navbar-text">Open: 10.00 am - 19.00 pm</p>

          <a href="mailto:zaynwedding@gmail.com" class="body-4 sidebar-link">zaynwedding@gmail.com</a>

          <div class="separator"></div>

          <p class="contact-label">Booking Request</p>

          <a href="tel:+81298889045" class="body-1 contact-number hover-underline">
            +6281298889045
          </a>
        </div>

      </nav>

      <a href="#" class="btn btn-secondary">
        <span class="text text-1">Find A Date</span>

        <span class="text text-2" aria-hidden="true">Find A Date</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="{{ asset('images/hero-slider-1.jpg') }}" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Pernikahan abadi, dirancang kreatif untuk momen tak terlupakan.</p>

            <h1 class="display-1 hero-title slider-reveal">
              Crafting Timeless Unions
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Gather your loved ones and savor the magic <br> of our expertly crafted weddings.
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Pricelist</span>

              <span class="text text-2" aria-hidden="true">View Our Pricelist</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="{{ asset('images/hero-slider-2.jpg') }}" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Pernikahan berkelas, sesuai dengan keinginan Anda.</p>

            <h1 class="display-1 hero-title slider-reveal">
              Elegant Bliss Awaits
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Gather your loved ones and savor the magic <br> of our expertly crafted weddings.
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Pricelist</span>

              <span class="text text-2" aria-hidden="true">View Our Pricelist</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="{{ asset('images/hero-slider-3.jpg') }}" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Pernikahan impianmu, siap diwujudkan.</p>

            <h1 class="display-1 hero-title slider-reveal">
              Our Dream, Our Expertise
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Gather your loved ones and savor the magic <br> of our expertly crafted weddings.
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Pricelist</span>

              <span class="text text-2" aria-hidden="true">View Our Pricelist</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="#" class="hero-btn has-after">
          <br>
          <span class="label-2 text-center span">Free Consult</span>
        </a>

      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service bg-black-10 text-center" aria-label="service">
        <div class="container">

          <p class="section-subtitle label-2">Sentuhan Keistimewaan untuk Pernikahan Anda yang Elegan.</p>

          <h2 class="headline-1 section-title">We Offer Top Notch</h2>

          <p class="section-text">
          Kami menawarkan yang terbaik untuk menjadikan momen istimewa anda tak terlupakan. <br> Dengan penuh komitmen, 
          kami hadirkan keanggunan dan layanan berkualitas tinggi dalam setiap detail. Percayakan pernikahan anda 
          kepada kami, di mana keistimewaan akan bertemu dengan keindahan.
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="{{ asset('images/service-1.jpg') }}" width="285" height="336" loading="lazy" alt="Dekorasi"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h4 class="title-4 card-title">
                    <a href="#">Dekorasi Pernikahan</a>
                  </h4>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="{{ asset('images/service-2.jpg') }}" width="285" height="336" loading="lazy" alt="Foto&Video"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h4 class="title-4 card-title">
                    <a href="#">Foto & Videografi</a>
                  </h4>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="{{ asset('images/service-3.jpg') }}" width="285" height="336" loading="lazy" alt="Makeup"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h4 class="title-4 card-title">
                    <a href="#">Profesional MakeUp</a>
                  </h4>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Our Story</p>

            <h2 class="headline-1 section-title">It's all about the day</h2>

            <p class="section-text">
              Zayn Wedding merupakan jasa yang berfungsi untuk membantu calon pengantin dan keluarga dalam tahap
              perencanaan dan pelaksanaan rangkaian acara pesta pernikahan sesuai konsep, jadwal dan budget yang
              telah ditentukan. <br> Zayn Wedding juga berfungsi sebagai konsultan dalam membantu client mencari dan
              menghubungi gedung, catering, dekorasi pelaminan, video, foto, undangan, souvenir dan lain-lain yang 
              dibutuhkan oleh client dalam acara pesta pernikahan dengan pilihan paket yang telah disediakan dan 
              dapet disesuaikan dengan keinginan para customer.
            </p>

            <div class="contact-label">Book Through Call</div>

            <a href="tel:+6281298889045" class="body-1 contact-number hover-underline">+62 812-9888-9045</a>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">Read More</span>

              <span class="text text-2" aria-hidden="true">Read More</span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="{{ asset('images/about-banner.jpg') }}" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="{{ asset('images/about-abs-image.jpg') }}" width="285" height="285" loading="lazy" alt=""
                class="w-100">
            </div>

            <div class="abs-img abs-img-2 has-before">
              <img src="{{ asset('images/badge-2.png') }}" width="133" height="134" loading="lazy" alt="">
            </div>

          </figure>

        </div>
      </section>





      <!-- 
        - #SPECIAL PROMO
      -->

      <section class="special-dish text-center" aria-labelledby="dish-label">

        <div class="special-dish-banner">
          <img src="{{ asset('images/special-dish-banner.jpg') }}" width="940" height="900" loading="lazy" alt="special dish"
            class="img-cover">
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">

            <img src="{{ asset('images/badge-1.png') }}" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

            <p class="section-subtitle label-2">Special Promo</p>

            <h2 class="headline-1 section-title">Nama Promo</h2>

            <p class="section-text">
              Detail Promo
            </p>

            <div class="wrapper">
              <del class="del body-3">Rp. Harga Awal</del>

              <span class="span body-1">Rp. Harga Promo</span>
            </div>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">View All Promo</span>

              <span class="text text-2" aria-hidden="true">View All Promo</span>
            </a>

          </div>
        </div>
      </section>





      <!-- 
        - #MENU
      -->

      <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">

          <p class="section-subtitle text-center label-2">Special Selection</p>

          <h2 class="headline-1 section-title text-center">The Best Pricelist</h2>

          <ul class="grid-list">

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('images/pricelist-1.png') }}" width="100" height="100" loading="lazy" alt="Poster PL"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Nama Pricelist</a>
                    </h3>

                    <span class="badge label-1">Best Seller</span>

                    <span class="span title-2">Rp. Harga</span>
                  </div>

                  <p class="card-text label-1">
                    Detail Pricelist
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('images/pricelist-2.png') }}" width="100" height="100" loading="lazy" alt="Poster PL"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Nama Pricelist</a>
                    </h3>

                    <span class="span title-2">Rp. Harga</span>
                  </div>

                  <p class="card-text label-1">
                    Detail Pricelist
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('images/pricelist-3.png') }}" width="100" height="100" loading="lazy" alt="Poster PL"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Nama Pricelist</a>
                    </h3>

                    <span class="span title-2">Rp. Pricelist</span>
                  </div>

                  <p class="card-text label-1">
                    Detail Pricelist
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('images/pricelist-4.png') }}" width="100" height="100" loading="lazy" alt="Poster PL"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Nama Pricelist</a>
                    </h3>

                    <span class="badge label-1">New</span>

                    <span class="span title-2">Rp. Pricelist</span>
                  </div>

                  <p class="card-text label-1">
                    Detail Pricelist
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('images/pricelist-5.png') }}" width="100" height="100" loading="lazy" alt="Postr PL"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Nama Pricelist</a>
                    </h3>

                    <span class="span title-2">Rp. Pricelist</span>
                  </div>

                  <p class="card-text label-1">
                    Detail Pricelist
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('images/pricelist-6.png') }}" width="100" height="100" loading="lazy" alt="Poster PL"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">Nama Pricelist</a>
                    </h3>

                    <span class="span title-2">Rp. Pricelist</span>
                  </div>

                  <p class="card-text label-1">
                    Detail Pricelist
                  </p>

                </div>

              </div>
            </li>

          </ul>

          <p class="menu-text text-center">
            Open daily from <span class="span">9:00 am</span> to <span class="span">18:00 pm</span>
          </p>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">View All Pricelist</span>

            <span class="text text-2" aria-hidden="true">View All Pricelist</span>
          </a>

        </div>
      </section>





      <!-- 
        - #TESTIMONIALS
      -->

      <section class="section testi text-center has-bg-image"
        style="background-image: url('images/testimonial-bg.jpg')" aria-label="testimonials">
        <div class="container">

          <div class="quote">”</div>

          <p class="headline-2 testi-text">
            Kalimat Testimonial
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <div class="profile">
            <img src="{{ asset('images/testi-avatar.jpg') }}" width="100" height="100" loading="lazy" alt="testi"
              class="img">

            <p class="label-2 profile-name">Doer & Danielle</p>
          </div>

        </div>
      </section>





      <!-- 
        - #RESERVATION
      -->

      <section class="reservation">
        <div class="container">

          <div class="form reservation-form bg-black-10">

            <form action="" class="form-left">

              <h2 class="headline-1 text-center">Online Reservation</h2>

              <p class="form-text text-center">
                Booking request <a href="tel:+6281298889045" class="link">+62 812-9888-9045</a>
                or fill out the list form below
              </p>

              <div class="input-wrapper">
                <input type="text" name="name" placeholder="Your Name" autocomplete="off" class="input-field">

                <input type="tel" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field">
              </div>

              <div class="input-wrapper">

                <div class="icon-wrapper">
                  <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                  <select name="person" class="input-field">
                    <option value="1-person">1 Person</option>
                    <option value="2-person">2 Person</option>
                    <option value="3-person">3 Person</option>
                    <option value="4-person">4 Person</option>
                    <option value="5-person">5 Person</option>
                    <option value="6-person">6 Person</option>
                    <option value="7-person">7 Person</option>
                    <option value="8-person">8 Person</option>
                  </select>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

                <div class="icon-wrapper">
                  <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

                  <input type="date" name="reservation-date" class="input-field">

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

                <div class="icon-wrapper">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <select name="person" class="input-field">
                    <option value="09:00am">09 : 00 am</option>
                    <option value="010:00am">10 : 00 am</option>
                    <option value="011:00am">11 : 00 am</option>
                    <option value="012:00am">12 : 00 am</option>
                    <option value="01:00pm">13 : 00 pm</option>
                    <option value="02:00pm">14 : 00 pm</option>
                    <option value="03:00pm">15 : 00 pm</option>
                    <option value="04:00pm">16 : 00 pm</option>
                    <option value="05:00pm">17 : 00 pm</option>
                    <option value="06:00pm">18 : 00 pm</option>
                  </select>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

              </div>

              <textarea name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>

              <button type="submit" class="btn btn-secondary">
                <span class="text text-1">Book A Date</span>

                <span class="text text-2" aria-hidden="true">Book A Date</span>
              </button>

            </form>

            <div class="form-right text-center" style="background-image: url('images/form-pattern.png')">

              <h2 class="headline-1 text-center">Contact</h2>

              <p class="contact-label">Booking Request</p>

              <a href="tel:+6281298889045" class="body-1 contact-number hover-underline">+6281298889045</a>

              <div class="separator"></div>

              <p class="contact-label">Location</p>

              <address class="body-4">
                Jl. Ruko Puri Gardena Blok A2 No.14, <br>
                Kalideres, Jakarta Barat
              </address>

              <p class="contact-label">Open Time</p>

              <p class="body-4">
                Wedneday to Monday <br>
                09.00 am - 18.00 pm
              </p>

              <p class="contact-label">Closed Time</p>

              <p class="body-4">
                Thursday <br>
                CLOSED
              </p>

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #FEATURES
      -->

      <section class="section features text-center" aria-label="features">
        <div class="container">

          <p class="section-subtitle label-2">Why Choose Us</p>

          <h2 class="headline-1 section-title">Our Strength</h2>

          <ul class="grid-list">

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="{{ asset('images/features-icon-1.png') }}" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Desain dan Dekorasi Eksklusif</h3>

                <p class="label-1 card-text">Kami menghadirkan kekuatan dalam desain dan dekorasi pernikahan yang eksklusif. <br> 
                  Setiap detail dirancang untuk menciptakan atmosfer yang memukau dan mencerminkan gaya pribadi pasangan.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="{{ asset('images/features-icon-2.png') }}" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Pelayanan Personalisasi</h3>

                <p class="label-1 card-text">Kami berkomitmen untuk mengakomodasi setiap keinginan dan kebutuhan unik Anda, sehingga setiap 
                  pernikahan menjadi sebuah pengalaman yang sangat khusus.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="{{ asset('images/features-icon-3.png') }}" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Fleksibilitas dalam Budget</h3>

                <p class="label-1 card-text">Kami sangat mengerti dan memahami pentingnya menghadirkan pernikahan impian tanpa mengorbankan kualitas, dan 
                  kami bersedia beradaptasi sesuai dengan keuangan Anda.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="{{ asset('images/features-icon-4.png') }}" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Koordinasi Acara yang Efisien</h3>

                <p class="label-1 card-text">Dengan tim profesional kami yang berpengalaman dalam mengatur acara, kami memastikan setiap elemen berjalan mulus, memberikan anda ketenangan pikiran 
                  untuk menikmati setiap momen indah.</p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #EVENT
      -->

      <section class="section event bg-black-10" aria-label="event">
        <div class="container">

          <p class="section-subtitle label-2 text-center">Recent Updates</p>

          <h2 class="section-title headline-1 text-center">Upcoming Events</h2>

          <ul class="grid-list">

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="{{ asset('') }}" width="350" height="450" loading="lazy"
                    alt="gambar pernikahan" class="img-cover">

                  <time class="publish-date label-2" datetime="tanggal">Tanggal Event</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Nama Groom dan Bride</p>

                  <h3 class="card-title title-2 text-center">
                    Lokasi Pernikahan
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="{{ asset('') }}" width="350" height="450" loading="lazy"
                    alt="gambar pernikahan" class="img-cover">

                  <time class="publish-date label-2" datetime="tanggal">Tanggal Event</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Nama Groom dan Bride</p>

                  <h3 class="card-title title-2 text-center">
                    Lokasi Pernikahan
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="{{ asset('') }}" width="350" height="450" loading="lazy"
                    alt="gambar pernikahan" class="img-cover">

                  <time class="publish-date label-2" datetime="tanggal">Tanggal Event</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Nama Groom dan Bride</p>

                  <h3 class="card-title title-2 text-center">
                    Lokasi Pernikahan
                  </h3>
                </div>

              </div>
            </li>

          </ul>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">Lihat Events Lainnya</span>

            <span class="text text-2" aria-hidden="true">Lihat Events Lainnya</span>
          </a>

        </div>
      </section>
    </article>
  </main>

 

  <!-- 
    - #FOOTER
  -->
  <div class="main-container">
    <section class="image top">
      <div class="content grid">
        <div class="box">
          <div class="img">
            <img src="{{ asset('images/a1.jpg') }}" alt="">
          </div>
          <div class="icon">
            <i class="fas fa-search-plus"></i>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="{{ asset('images/a2.jpg') }}" alt="">
          </div>
          <div class="icon">
            <i class="fas fa-search-plus"></i>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="{{ asset('images/a3.jpg') }}" alt="">
          </div>
          <div class="icon">
            <i class="fas fa-search-plus"></i>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="{{ asset('images/a4.jpg') }}" alt="">
          </div>
          <div class="icon">
            <i class="fas fa-search-plus"></i>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="{{ asset('images/a5.jpg') }}" alt="">
          </div>
          <div class="icon">
            <i class="fas fa-search-plus"></i>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="{{ asset('images/a6.jpg') }}" alt="">
          </div>
          <div class="icon">
            <i class="fas fa-search-plus"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer section has-bg-image text-center"
    style="background-image: url('images/footer-bg.jpg')">
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="#" class="logo">
            <img src="{{ asset('images/logo.png') }}" width="300" height="50" loading="lazy" alt="grilli home">
          </a>

          <address class="body-4">
            Jl. Ruko Puri Gardena Blok A2 No 14, Kalideres,
            Jakarta Barat, DKI Jakarta 11840
          </address>

          <a href="mailto:zaynwedding@gmail.com" class="body-4 contact-link">zaynwedding@gmail.com</a>

          <a href="tel:+6281298889045" class="body-4 contact-link">Booking Request : +62 812-9888-9045</a>

          <p class="body-4">
            Open : 10:00 am - 19:00 pm
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

        </div>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Beranda</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Pricelist</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Tentang Kami</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Redaksi Kami</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Kontak</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
          </li>

          <li>
            <a href="https://www.instagram.com/zaynwedding?igsh=MzRlODBiNWFlZA==" class="label-2 footer-link hover-underline">Instagram</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Youtube</a>
          </li>

          <li>
            <a href="https://maps.app.goo.gl/96HydhU1xU5TEzA7A" class="label-2 footer-link hover-underline">Google Map</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy; 2024 PT. Kreatif Muda Bahagia. All Rights Reserved | Crafted by <text>Baddoer</text>
        </p>

      </div>

    </div>
  </footer>
</div>

  





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="{{ asset('js/script.js') }}"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>