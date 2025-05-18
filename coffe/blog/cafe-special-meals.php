<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>غذای ویژه هفته: پنکیک بلوبری - کافی شاپ مدرن</title>
    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/coffe/assets/css/style.css">
    <link rel="stylesheet" href="/coffe/assets/css/blog.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <?php 
    $current_page = 'blog';
    include $_SERVER['DOCUMENT_ROOT'] . '/coffe/back/header.php'; 
    ?>

    <!-- Blog Post Content -->
    <section class="blog-post py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="../assets/images/cafespecialmeals.jpg" alt="غذای ویژه کافی‌شاپ" class="img-fluid rounded-4">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> ۵ بهمن ۱۴۰۲</span>
                                <span><i class="far fa-user"></i> محمد کریمی</span>
                                <span><i class="far fa-folder"></i> منو</span>
                            </div>
                            <h1 class="blog-title">غذای ویژه هفته: پنکیک بلوبری</h1>
                            <div class="blog-content-text">
                                <p>این هفته با پنکیک بلوبری تازه و خوشمزه، صبحانه‌ای متفاوت را تجربه کنید. در این مقاله با جزئیات این غذای ویژه و مواد تشکیل‌دهنده آن آشنا می‌شوید.</p>

                                <h2>مواد تشکیل‌دهنده:</h2>
                                <ul>
                                    <li>آرد گندم کامل</li>
                                    <li>بلوبری تازه</li>
                                    <li>شیر محلی</li>
                                    <li>تخم مرغ محلی</li>
                                    <li>عسل طبیعی</li>
                                    <li>وانیل</li>
                                </ul>

                                <h2>مزایای این پنکیک:</h2>
                                <ul>
                                    <li>استفاده از مواد اولیه تازه و طبیعی</li>
                                    <li>کالری مناسب</li>
                                    <li>مناسب برای گیاهخواران</li>
                                    <li>حاوی آنتی‌اکسیدان‌های بلوبری</li>
                                </ul>

                                <p>این پنکیک به همراه قهوه تازه و میوه‌های فصل سرو می‌شود. قیمت: ۸۵ هزار تومان</p>

                                <p>برای رزرو می‌توانید با شماره ۰۲۱-۱۲۳۴۵۶۷۸ تماس بگیرید یا از طریق اپلیکیشن ما سفارش خود را ثبت کنید.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../back/footer.php'; ?>

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