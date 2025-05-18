
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داستان قهوه - کافی شاپ مدرن</title>
    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/coffee-story.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <?php include 'back/header.php'; ?>
    <!-- Hero Section -->
    <section class="story-hero" style="background-image: url('assets/images/story.jpg');">
        <div class="hero-content">
            <h1 class="display-1 fw-bold" data-aos="fade-up">داستان قهوه</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">از کوه‌های اتیوپی تا فنجان شما</p>
        </div>
        <div class="scroll-indicator">
            <span>اسکرول کنید</span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- Discovery Section -->
    <section class="story-section discovery">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="story-image">
                        <img src="assets/images/discovery.jpg" alt="کشف قهوه">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="story-content">
                        <h2>کشف قهوه</h2>
                        <p class="lead">داستان از چوپانی در اتیوپی آغاز شد</p>
                        <p>در قرن نهم میلادی، چوپانی به نام کالدی متوجه شد که بزهایش پس از خوردن میوه‌های درختی خاص، انرژی بیشتری دارند. این کشف تصادفی، سرآغاز داستان قهوه بود.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Spread Section -->
    <section class="story-section spread">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                    <div class="story-image">
                        <img src="assets/images/spread.jpg" alt="گسترش قهوه">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                    <div class="story-content">
                        <h2>گسترش در جهان</h2>
                        <p class="lead">از خاورمیانه تا اروپا</p>
                        <p>قهوه ابتدا در یمن و سپس در سراسر خاورمیانه گسترش یافت. اولین قهوه‌خانه‌ها در مکه و قاهره تأسیس شدند. در قرن هفدهم، قهوه به اروپا راه یافت و فرهنگ قهوه‌نوشی را متحول کرد.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern Era Section -->
    <section class="story-section modern">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="story-image">
                        <img src="assets/images/modern.jpg" alt="عصر مدرن">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="story-content">
                        <h2>عصر مدرن</h2>
                        <p class="lead">قهوه در دنیای امروز</p>
                        <p>امروزه قهوه به یکی از محبوب‌ترین نوشیدنی‌های جهان تبدیل شده است. از روش‌های سنتی دم کردن تا دستگاه‌های مدرن اسپرسو، قهوه همچنان در حال تکامل است.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="timeline-section">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">خط زمانی قهوه</h2>
            <div class="timeline">
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-content">
                        <h3>قرن ۹ میلادی</h3>
                        <p>کشف قهوه در اتیوپی</p>
                    </div>
                </div>
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="timeline-content">
                        <h3>قرن ۱۵ میلادی</h3>
                        <p>گسترش قهوه در یمن</p>
                    </div>
                </div>
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-content">
                        <h3>قرن ۱۶ میلادی</h3>
                        <p>ورود قهوه به ترکیه و ایران</p>
                    </div>
                </div>
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-content">
                        <h3>قرن ۱۷ میلادی</h3>
                        <p>ورود قهوه به اروپا</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="coffee-story-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="story-card">
                        <img src="assets/images/modern.jpg" alt="Modern Coffee" class="img-fluid">
                        <h3>قهوه مدرن</h3>
                        <p>تجربه طعم‌های جدید و منحصر به فرد در دنیای قهوه</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="story-card">
                        <img src="assets/images/spread.jpg" alt="Coffee Spread" class="img-fluid">
                        <h3>گسترش فرهنگ قهوه</h3>
                        <p>آشنایی با فرهنگ‌های مختلف قهوه در سراسر جهان</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="story-card">
                        <img src="assets/images/discovery.jpg" alt="Coffee Discovery" class="img-fluid">
                        <h3>کشف طعم‌ها</h3>
                        <p>سفری به دنیای طعم‌های خاص و منحصر به فرد قهوه</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'back/footer.php'; ?>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/coffee-story.js"></script>
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