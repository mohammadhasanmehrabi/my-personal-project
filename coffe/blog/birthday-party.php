<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>برگزاری جشن تولد در کافی‌شاپ - کافی شاپ مدرن</title>
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
                            <img src="../assets/images/birthdaypartyincafe.jpg" alt="جشن تولد در کافی‌شاپ" class="img-fluid rounded-4">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> ۱۰ بهمن ۱۴۰۲</span>
                                <span><i class="far fa-user"></i> سارا احمدی</span>
                                <span><i class="far fa-folder"></i> رویدادها</span>
                            </div>
                            <h1 class="blog-title">برگزاری جشن تولد در کافی‌شاپ</h1>
                            <div class="blog-content-text">
                                <p>فضای دنج و گرم کافی‌شاپ ما، محل مناسبی برای برگزاری جشن‌های تولد و دورهمی‌های دوستانه است. در این مقاله با امکانات و خدمات ویژه ما برای برگزاری جشن تولد آشنا می‌شوید.</p>

                                <h2>امکانات ویژه جشن تولد:</h2>
                                <ul>
                                    <li>دکوراسیون اختصاصی</li>
                                    <li>کیک تولد سفارشی</li>
                                    <li>منوی ویژه جشن</li>
                                    <li>عکاسی حرفه‌ای</li>
                                    <li>موسیقی زنده</li>
                                </ul>

                                <h2>پکیج‌های جشن تولد:</h2>
                                <ul>
                                    <li>پکیج پایه: شامل دکوراسیون و کیک تولد</li>
                                    <li>پکیج ویژه: شامل تمام امکانات به همراه منوی کامل</li>
                                    <li>پکیج لوکس: شامل تمام امکانات به همراه عکاسی و موسیقی زنده</li>
                                </ul>

                                <p>برای رزرو و کسب اطلاعات بیشتر می‌توانید با شماره ۰۲۱-۱۲۳۴۵۶۷۸ تماس بگیرید یا از طریق فرم زیر درخواست خود را ثبت کنید.</p>
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