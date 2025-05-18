<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بلاگ - کافی شاپ مدرن</title>
    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/blog.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <?php include 'back/header.php'; ?>

    <!-- Hero Section -->
    <section class="blog-hero" style="background-image: url('assets/images/hero1.jpg');">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content text-center">
                <h1 class="display-1 fw-bold" data-aos="fade-up">بلاگ ما</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">آخرین اخبار و مقالات درباره قهوه و کافی‌شاپ</p>
            </div>
        </div>
    </section>

    <!-- Blog Posts Section -->
    <section class="blog-posts py-5">
        <div class="container">
            <div class="row">
                <!-- Main Post -->
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="blog-card main-post">
                        <div class="blog-image">
                            <img src="assets/images/coffeebrewingworkshop.jpg" alt="کارگاه آموزش قهوه" class="img-fluid rounded-4">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> ۱۵ بهمن ۱۴۰۲</span>
                                <span><i class="far fa-user"></i> علی محمدی</span>
                                <span><i class="far fa-folder"></i> آموزش</span>
                            </div>
                            <h2 class="blog-title">کارگاه آموزش قهوه: از دانه تا فنجان</h2>
                            <p class="blog-excerpt">در این کارگاه آموزشی، شما با تمام مراحل تهیه قهوه از انتخاب دانه تا دم کردن آن آشنا خواهید شد. این کارگاه برای علاقه‌مندان به قهوه و باریستاهای تازه‌کار طراحی شده است.</p>
                            <a href="blog/coffee-brewing-workshop.php" class="btn btn-primary">ادامه مطلب</a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <!-- Search Widget -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">جستجو</h3>
                        <form class="search-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="جستجو...">
                                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>

                    <!-- Categories Widget -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">دسته‌بندی‌ها</h3>
                        <ul class="category-list">
                            <li><a href="#">آموزش قهوه <span>(5)</span></a></li>
                            <li><a href="#">اخبار کافی‌شاپ <span>(3)</span></a></li>
                            <li><a href="#">دسرها <span>(4)</span></a></li>
                            <li><a href="#">رویدادها <span>(2)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Recent Posts -->
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="section-title text-center mb-4" data-aos="fade-up">آخرین مقالات</h2>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="assets/images/birthdaypartyincafe.jpg" alt="جشن تولد در کافی‌شاپ" class="img-fluid rounded-4">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> ۱۰ بهمن ۱۴۰۲</span>
                                <span><i class="far fa-user"></i> سارا احمدی</span>
                            </div>
                            <h3 class="blog-title">برگزاری جشن تولد در کافی‌شاپ</h3>
                            <p class="blog-excerpt">فضای دنج و گرم کافی‌شاپ ما، محل مناسبی برای برگزاری جشن‌های تولد و دورهمی‌های دوستانه است.</p>
                            <a href="blog/birthday-party.php" class="btn btn-outline-primary">ادامه مطلب</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="assets/images/cafespecialmeals.jpg" alt="غذای ویژه کافی‌شاپ" class="img-fluid rounded-4">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> ۵ بهمن ۱۴۰۲</span>
                                <span><i class="far fa-user"></i> محمد کریمی</span>
                            </div>
                            <h3 class="blog-title">غذای ویژه هفته: پنکیک بلوبری</h3>
                            <p class="blog-excerpt">این هفته با پنکیک بلوبری تازه و خوشمزه، صبحانه‌ای متفاوت را تجربه کنید.</p>
                            <a href="blog/cafe-special-meals.php" class="btn btn-outline-primary">ادامه مطلب</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="assets/images/cozymeetingspacecafe.jpg" alt="فضای کاری کافی‌شاپ" class="img-fluid rounded-4">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> ۱ بهمن ۱۴۰۲</span>
                                <span><i class="far fa-user"></i> علی محمدی</span>
                            </div>
                            <h3 class="blog-title">فضای کاری در کافی‌شاپ</h3>
                            <p class="blog-excerpt">فضای آرام و دنج کافی‌شاپ ما، محل مناسبی برای کار و مطالعه است.</p>
                            <a href="blog/cozy-meeting-space.php" class="btn btn-outline-primary">ادامه مطلب</a>
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