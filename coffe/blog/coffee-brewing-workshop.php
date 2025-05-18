<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کارگاه آموزش قهوه: از دانه تا فنجان - کافی شاپ مدرن</title>
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
                            <img src="../assets/images/coffeebrewingworkshop.jpg" alt="کارگاه آموزش قهوه" class="img-fluid rounded-4">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> ۱۵ بهمن ۱۴۰۲</span>
                                <span><i class="far fa-user"></i> علی محمدی</span>
                                <span><i class="far fa-folder"></i> آموزش</span>
                            </div>
                            <h1 class="blog-title">کارگاه آموزش قهوه: از دانه تا فنجان</h1>
                            <div class="blog-content-text">
                                <p>در این کارگاه آموزشی، شما با تمام مراحل تهیه قهوه از انتخاب دانه تا دم کردن آن آشنا خواهید شد. این کارگاه برای علاقه‌مندان به قهوه و باریستاهای تازه‌کار طراحی شده است.</p>
                                
                                <h2>سرفصل‌های کارگاه:</h2>
                                <ul>
                                    <li>آشنایی با انواع دانه‌های قهوه</li>
                                    <li>روش‌های برشته‌کاری قهوه</li>
                                    <li>تکنیک‌های آسیاب کردن</li>
                                    <li>روش‌های مختلف دم کردن قهوه</li>
                                    <li>آموزش لاته آرت</li>
                                </ul>

                                <h2>مزایای شرکت در کارگاه:</h2>
                                <ul>
                                    <li>آموزش عملی و کارگاهی</li>
                                    <li>استفاده از تجهیزات حرفه‌ای</li>
                                    <li>گواهی نامه معتبر</li>
                                    <li>پشتیبانی بعد از دوره</li>
                                </ul>

                                <p>این کارگاه در تاریخ ۱۵ بهمن ۱۴۰۲ از ساعت ۱۰ صبح تا ۴ عصر در کافی‌شاپ ما برگزار خواهد شد. هزینه شرکت در کارگاه ۵۰۰ هزار تومان است که شامل مواد اولیه، ناهار و میان‌وعده می‌شود.</p>

                                <p>برای ثبت‌نام و کسب اطلاعات بیشتر می‌توانید با شماره ۰۲۱-۱۲۳۴۵۶۷۸ تماس بگیرید یا از طریق فرم زیر ثبت‌نام کنید.</p>
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