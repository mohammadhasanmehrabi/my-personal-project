<?php include 'back/header.php'; ?>
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
<div class="container py-5 mt-5">
    <h1 class="text-center mb-5">تماس با ما</h1>

    <div class="row">
        <!-- Contact Information -->
        <div class="col-md-4 mb-4">
            <div class="card contact-info-card h-100">
                <div class="card-body">
                    <h5 class="card-title mb-4">اطلاعات تماس</h5>
                    <div class="d-flex mb-3">
                        <i class="fas fa-map-marker-alt fa-2x me-3 text-primary"></i>
                        <div>
                            <h6>آدرس</h6>
                            <p class="mb-0">تهران، خیابان ولیعصر، پلاک 123</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fas fa-phone fa-2x me-3 text-primary"></i>
                        <div>
                            <h6>تلفن</h6>
                            <p class="mb-0">021-12345678</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fas fa-envelope fa-2x me-3 text-primary"></i>
                        <div>
                            <h6>ایمیل</h6>
                            <p class="mb-0">info@coffeeshop.com</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fas fa-clock fa-2x me-3 text-primary"></i>
                        <div>
                            <h6>ساعات کاری</h6>
                            <p class="mb-0">هر روز از 8 صبح تا 12 شب</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="col-md-8">
            <div class="card contact-form-card">
                <div class="card-body">
                    <h5 class="card-title mb-4">فرم تماس</h5>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">نام</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">ایمیل</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">موضوع</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">پیام</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">ارسال پیام</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'back/footer.php'; ?> 