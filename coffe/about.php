<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درباره ما - کافی شاپ مدرن</title>
    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <?php include 'back/header.php'; ?>

    <!-- Hero Section -->
    <section class="about-hero" style="background-image: url('assets/images/about-hero.jpg');">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content text-center">
                <h1 class="display-1 fw-bold" data-aos="fade-up">درباره ما</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">داستان ما، عشق ما به قهوه</p>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="about-story py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="story-image">
                        <img src="assets/images/story.jpg" alt="داستان ما" class="img-fluid rounded-4">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="story-content">
                        <h2 class="section-title">داستان ما</h2>
                        <p class="lead">از عشق به قهوه تا ایجاد یک تجربه منحصر به فرد</p>
                        <p>کافی‌شاپ مدرن با هدف ارائه بهترین تجربه قهوه‌نوشی در سال ۱۴۰۰ تأسیس شد. ما با ترکیب سنت و مدرنیته، فضایی دنج و گرم را برای شما خلق کرده‌ایم.</p>
                        <div class="story-stats">
                            <div class="row">
                                <div class="col-6">
                                    <div class="stat-item">
                                        <i class="fas fa-coffee"></i>
                                        <h3>۵۰+</h3>
                                        <p>انواع قهوه</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="stat-item">
                                        <i class="fas fa-users"></i>
                                        <h3>۱۰۰۰+</h3>
                                        <p>مشتری راضی</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="about-values py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">ارزش‌های ما</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">آنچه ما را متمایز می‌کند</p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>عشق به کیفیت</h3>
                        <p>ما فقط از بهترین دانه‌های قهوه و مواد اولیه استفاده می‌کنیم تا تجربه‌ای بی‌نظیر را برای شما خلق کنیم.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3>تخصص و تجربه</h3>
                        <p>تیم ما از متخصصان حرفه‌ای تشکیل شده که سال‌ها تجربه در زمینه قهوه دارند.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>مشتری‌مداری</h3>
                        <p>رضایت مشتریان ما اولویت اصلی ماست و همیشه در تلاشیم تا بهترین خدمات را ارائه دهیم.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="about-team py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">تیم ما</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">با متخصصان ما آشنا شوید</p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="assets/images/team-1.jpg" alt="مدیر کافی‌شاپ" class="img-fluid">
                        </div>
                        <div class="team-content">
                            <h3>علی محمدی</h3>
                            <p class="position">مدیر کافی‌شاپ</p>
                            <p class="bio">با بیش از ۱۰ سال تجربه در صنعت قهوه، عشق و تخصص خود را در خدمت مشتریان قرار داده است.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="assets/images/team-2.jpg" alt="باریستا ارشد" class="img-fluid">
                        </div>
                        <div class="team-content">
                            <h3> محمد کریمی</h3>
                            <p class="position">باریستا ارشد</p>
                            <p class="bio">متخصص در تهیه انواع قهوه‌های ویژه و خلق طعم‌های منحصر به فرد.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="assets/images/team-3.jpg" alt="شیرینی‌پز" class="img-fluid">
                        </div>
                        <div class="team-content">
                            <h3>سارا احمدی  </h3>
                            <p class="position">شیرینی‌پز</p>
                            <p class="bio">استاد تهیه دسرهای خوشمزه و منحصر به فرد که با قهوه‌های ما ترکیب می‌شوند.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'back/footer.php'; ?>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html> 