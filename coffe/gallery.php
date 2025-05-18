<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گالری تصاویر - کافی شاپ مدرن</title>
    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<?php include 'back/header.php'; ?>

<div class="container py-5 mt-5">
    <h1 class="text-center mb-5">گالری تصاویر</h1>

    <!-- Gallery Filter -->
    <div class="gallery-filter text-center mb-5">
        <button class="gallery-category-btn active" data-category="all">همه</button>
        <button class="gallery-category-btn" data-category="interior">فضای داخلی</button>
        <button class="gallery-category-btn" data-category="food">غذا و نوشیدنی</button>
        <button class="gallery-category-btn" data-category="events">رویدادها</button>
    </div>

    <!-- Gallery Grid -->
    <div class="row g-4">
        <!-- Interior Category -->
        <div class="col-md-4 gallery-item interior">
            <div class="gallery-card">
                <div class="gallery-overlay">
                    <h3>محیط داخلی کافی‌شاپ</h3>
                    <p>فضایی دنج برای مطالعه و کار</p>
                </div>
                <img src="assets/images/interior1.jpg" alt="Interior" class="img-fluid">
            </div>
        </div>

        <!-- Food Category -->
        <div class="col-md-4 gallery-item food">
            <div class="gallery-card">
                <div class="gallery-overlay">
                    <h3>دسرهای ویژه</h3>
                    <p>انواع دسرهای خانگی</p>
                </div>
                <img src="assets/images/food1.jpg" alt="Special Desserts" class="img-fluid">
            </div>
        </div>

        <div class="col-md-4 gallery-item food">
            <div class="gallery-card">
                <div class="gallery-overlay">
                    <h3>قهوه‌های تخصصی</h3>
                    <p>انواع قهوه با روش‌های مختلف دم‌آوری</p>
                </div>
                <img src="assets/images/food2.jpg" alt="Specialty Coffees" class="img-fluid">
            </div>
        </div>

        <!-- Events Category -->
        <div class="col-md-4 gallery-item events">
            <div class="gallery-card">
                <div class="gallery-overlay">
                    <h3>رویدادهای موسیقی</h3>
                    <p>اجرای موسیقی زنده در آخر هفته‌ها</p>
                </div>
                <img src="assets/images/event1.jpg" alt="Music Events" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<?php include 'back/footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.gallery-category-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');

            const category = button.getAttribute('data-category');

            galleryItems.forEach(item => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
</body>
</html> 