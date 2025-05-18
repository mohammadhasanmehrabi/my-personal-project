<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کافی شاپ مدرن - خانه</title>
    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <?php include 'back/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-slide" style="background-image: url('assets/images/hero1.jpg');">
            <div class="hero-overlay"></div>
            <div class="container position-relative">
              
            </div>
            <!-- Coffee Character -->
            <div class="coffee-character">
                <div class="coffee-cup">
                    <div class="steam"></div>
                    <div class="face">
                        <div class="eyes">
                            <div class="eye"></div>
                            <div class="eye"></div>
                        </div>
                        <div class="mouth"></div>
                    </div>
                    <div class="arms">
                        <div class="arm left"></div>
                        <div class="arm right"></div>
                    </div>
                    <div class="legs">
                        <div class="leg left"></div>
                        <div class="leg right"></div>
                    </div>
                </div>
            </div>
            <!-- Baker Character -->
            <div class="baker-character">
                <div class="baker">
                    <div class="chef-hat"></div>
                    <div class="baker-face">
                        <div class="baker-eyes">
                            <div class="baker-eye"></div>
                            <div class="baker-eye"></div>
                        </div>
                        <div class="baker-mouth"></div>
                    </div>
                    <div class="baker-apron"></div>
                    <div class="baker-arms">
                        <div class="baker-arm left"></div>
                        <div class="baker-arm right"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-coffee"></i>
                        </div>
                        <h3>قهوه‌های تخصصی</h3>
                        <p>انواع قهوه با بهترین دانه‌های جهان</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3>دسرهای خانگی</h3>
                        <p>انواع دسرهای خوشمزه و تازه</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-music"></i>
                        </div>
                        <h3>موسیقی زنده</h3>
                        <p>اجرای موسیقی زنده در آخر هفته‌ها</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Products -->
    <section class="popular-products py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5" data-aos="fade-up">محصولات پرفروش</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/Latte.jpg" alt="لاته" class="img-fluid">
                            <div class="product-overlay">
                                <a href="menu.php" class="btn btn-primary">مشاهده منو</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>لاته</h3>
                            <p>ترکیبی از اسپرسو و شیر کف‌دار</p>
                            <div class="product-price">۴۵,۰۰۰ تومان</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/cappuccino.jpg" alt="کاپوچینو" class="img-fluid">
                            <div class="product-overlay">
                                <a href="menu.php" class="btn btn-primary">مشاهده منو</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>کاپوچینو</h3>
                            <p>اسپرسو با شیر و کف شیر</p>
                            <div class="product-price">۴۲,۰۰۰ تومان</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/mocha.jpg" alt="موکا" class="img-fluid">
                            <div class="product-overlay">
                                <a href="menu.php" class="btn btn-primary">مشاهده منو</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>موکا</h3>
                            <p>ترکیبی از اسپرسو، شیر و شکلات</p>
                            <div class="product-price">۴۸,۰۰۰ تومان</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-image">
                        <img src="assets/images/about.jpg" alt="درباره ما" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-content">
                        <h2 class="section-title">درباره کافی‌شاپ مدرن</h2>
                        <p class="lead">ما با افتخار بهترین قهوه‌های جهان را برای شما سرو می‌کنیم.</p>
                        <p>کافی‌شاپ مدرن با بیش از ۱۰ سال تجربه در زمینه قهوه، محیطی دنج و آرام را برای شما فراهم کرده است. ما با استفاده از بهترین دانه‌های قهوه و تجهیزات مدرن، طعم بی‌نظیر قهوه را برای شما به ارمغان می‌آوریم.</p>
                        <div class="about-features">
                            <div class="row g-4">
                                <div class="col-6">
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>قهوه‌های تخصصی</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>دسرهای خانگی</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>محیط آرام</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>خدمات حرفه‌ای</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="about.php" class="btn btn-primary mt-4">بیشتر بدانید</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5" data-aos="fade-up">نظرات مشتریان</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <i class="fas fa-quote-right"></i>
                            <p>بهترین قهوه‌ای که تا به حال خوردم! محیط فوق‌العاده آرام و دلنشین.</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="assets/images/user1.jpg" alt="کاربر" class="rounded-circle">
                            <div class="author-info">
                                <h4>علی محمدی</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <i class="fas fa-quote-right"></i>
                            <p>دسرهای خوشمزه و قهوه‌های عالی. حتماً دوباره می‌آیم!</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="assets/images/user2.jpg" alt="کاربر" class="rounded-circle">
                            <div class="author-info">
                                <h4>سارا احمدی</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <i class="fas fa-quote-right"></i>
                            <p>خدمات عالی و پرسنل حرفه‌ای. محیطی بسیار آرام برای کار و مطالعه.</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="assets/images/user3.jpg" alt="کاربر" class="rounded-circle">
                            <div class="author-info">
                                <h4>رضا کریمی</h4>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5" data-aos="fade-up">گالری تصاویر</h2>
            <div class="row g-3">
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="gallery-card">
                        <div class="gallery-overlay">
                            <h3>محیط داخلی</h3>
                            <p>فضایی دنج برای مطالعه و کار</p>
                        </div>
                        <img src="assets/images/interior1.jpg" alt="Interior" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="gallery-card">
                        <div class="gallery-overlay">
                            <h3>دسرهای ویژه</h3>
                            <p>انواع دسرهای خانگی</p>
                        </div>
                        <img src="assets/images/food1.jpg" alt="Desserts" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="gallery-card">
                        <div class="gallery-overlay">
                            <h3>رویدادهای موسیقی</h3>
                            <p>اجرای موسیقی زنده</p>
                        </div>
                        <img src="assets/images/event1.jpg" alt="Music Events" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="gallery-card">
                        <div class="gallery-overlay">
                            <h3>قهوه‌های تخصصی</h3>
                            <p>انواع قهوه با روش‌های مختلف</p>
                        </div>
                        <img src="assets/images/food2.jpg" alt="Specialty Coffees" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'back/footer.php'; ?>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
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