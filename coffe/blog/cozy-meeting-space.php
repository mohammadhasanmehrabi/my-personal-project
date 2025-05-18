<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فضای کاری در کافی‌شاپ - کافی شاپ مدرن</title>
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
                            <img src="../assets/images/cozymeetingspacecafe.jpg" alt="فضای کاری کافی‌شاپ" class="img-fluid rounded-4">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> ۱ بهمن ۱۴۰۲</span>
                                <span><i class="far fa-user"></i> علی محمدی</span>
                                <span><i class="far fa-folder"></i> امکانات</span>
                            </div>
                            <h1 class="blog-title">فضای کاری در کافی‌شاپ</h1>
                            <div class="blog-content-text">
                                <p>فضای آرام و دنج کافی‌شاپ ما، محل مناسبی برای کار و مطالعه است. در این مقاله با امکانات ویژه ما برای کار و مطالعه آشنا می‌شوید.</p>

                                <h2>امکانات ویژه:</h2>
                                <ul>
                                    <li>وای‌فای پرسرعت</li>
                                    <li>پریز برق در تمام میزها</li>
                                    <li>چراغ مطالعه</li>
                                    <li>اتاق‌های جلسه خصوصی</li>
                                    <li>فضای سکوت</li>
                                </ul>

                                <h2>ساعات کاری:</h2>
                                <ul>
                                    <li>شنبه تا چهارشنبه: ۸ صبح تا ۱۰ شب</li>
                                    <li>پنجشنبه: ۸ صبح تا ۱۱ شب</li>
                                    <li>جمعه: ۹ صبح تا ۱۰ شب</li>
                                </ul>

                                <h2>تعرفه‌های فضای کاری:</h2>
                                <ul>
                                    <li>استفاده از فضای عمومی: رایگان با خرید حداقل یک نوشیدنی</li>
                                    <li>اتاق جلسه کوچک (تا ۴ نفر): ساعتی ۵۰ هزار تومان</li>
                                    <li>اتاق جلسه بزرگ (تا ۸ نفر): ساعتی ۱۰۰ هزار تومان</li>
                                </ul>

                                <p>برای رزرو اتاق جلسه می‌توانید با شماره ۰۲۱-۱۲۳۴۵۶۷۸ تماس بگیرید یا از طریق فرم زیر درخواست خود را ثبت کنید.</p>
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