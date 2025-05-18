<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منو - کافی شاپ مدرن</title>
    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Menu CSS -->
    <link rel="stylesheet" href="assets/css/menu.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<?php include 'back/header.php'; ?>

<div class="menu-section">
    <div class="container">
        <!-- Menu Title -->
        <div class="menu-title">
            <h2>منوی کافی شاپ</h2>
            <p>لذت طعم‌های منحصر به فرد را با ما تجربه کنید</p>
        </div>

        <!-- Menu Filter -->
        <div class="menu-filter">
            <button class="menu-category-btn active" data-category="all">همه</button>
            <button class="menu-category-btn" data-category="hot-drinks">نوشیدنی‌های گرم</button>
            <button class="menu-category-btn" data-category="cold-drinks">نوشیدنی‌های سرد</button>
            <button class="menu-category-btn" data-category="desserts">دسرها</button>
            <button class="menu-category-btn" data-category="snacks">اسنک‌ها</button>
        </div>

        <!-- Menu Grid -->
        <div class="menu-grid">
            <div class="row g-4">
                <!-- Hot Drinks -->
                <div class="col-lg-4 col-md-6 menu-item hot-drinks">
                    <div class="menu-card">
                        <img src="assets/images/Latte.jpg" class="card-img-top" alt="Latte">
                        <div class="card-body">
                            <h5 class="card-title">لاته</h5>
                            <p class="card-text">قهوه اسپرسو با شیر داغ و کف شیر</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>45,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 menu-item hot-drinks">
                    <div class="menu-card">
                        <img src="assets/images/cappuccino.jpg" class="card-img-top" alt="Cappuccino">
                        <div class="card-body">
                            <h5 class="card-title">کاپوچینو</h5>
                            <p class="card-text">اسپرسو با شیر داغ و کف شیر بیشتر</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>42,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 menu-item hot-drinks">
                    <div class="menu-card">
                        <img src="assets/images/mocha.jpg" class="card-img-top" alt="Mocha">
                        <div class="card-body">
                            <h5 class="card-title">موکا</h5>
                            <p class="card-text">اسپرسو با شیر داغ و شکلات</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>48,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 menu-item hot-drinks">
                    <div class="menu-card">
                        <img src="assets/images/ESPRESSO.jpg" class="card-img-top" alt="Espresso">
                        <div class="card-body">
                            <h5 class="card-title">اسپرسو</h5>
                            <p class="card-text">قهوه خالص و غلیظ</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>30,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Cold Drinks -->
                <div class="col-lg-4 col-md-6 menu-item cold-drinks">
                    <div class="menu-card">
                        <img src="assets/images/icelatte.jpg" class="card-img-top" alt="Iced Latte">
                        <div class="card-body">
                            <h5 class="card-title">آیس لته</h5>
                            <p class="card-text">اسپرسو با شیر سرد و یخ</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>48,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 menu-item cold-drinks">
                    <div class="menu-card">
                        <img src="assets/images/iceamericano.jpg" class="card-img-top" alt="Iced Americano">
                        <div class="card-body">
                            <h5 class="card-title">آیس آمریکانو</h5>
                            <p class="card-text">اسپرسو با آب سرد و یخ</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>38,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 menu-item cold-drinks">
                    <div class="menu-card">
                        <img src="assets/images/EISMOKA.jpg" class="card-img-top" alt="Iced Mocha">
                        <div class="card-body">
                            <h5 class="card-title">آیس موکا</h5>
                            <p class="card-text">موکا سرد با یخ</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>55,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Desserts -->
                <div class="col-lg-4 col-md-6 menu-item desserts">
                    <div class="menu-card">
                        <img src="assets/images/Tiramisu.jpg" class="card-img-top" alt="Tiramisu">
                        <div class="card-body">
                            <h5 class="card-title">تیرامیسو</h5>
                            <p class="card-text">دسر ایتالیایی با قهوه و ماسکارپونه</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>65,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 menu-item desserts">
                    <div class="menu-card">
                        <img src="assets/images/Brownies.jpg" class="card-img-top" alt="Brownies">
                        <div class="card-body">
                            <h5 class="card-title">براونی</h5>
                            <p class="card-text">کیک شکلاتی خوشمزه</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>55,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 menu-item desserts">
                    <div class="menu-card">
                        <img src="assets/images/Macaron.jpg" class="card-img-top" alt="Macaron">
                        <div class="card-body">
                            <h5 class="card-title">ماکارون</h5>
                            <p class="card-text">شیرینی فرانسوی با طعم‌های مختلف</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>45,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 menu-item desserts">
                    <div class="menu-card">
                        <img src="assets/images/CHEEKSCAKES.jpg" class="card-img-top" alt="Cheesecake">
                        <div class="card-body">
                            <h5 class="card-title">چیزکیک</h5>
                            <p class="card-text">کیک پنیری خامه‌ای</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>60,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Snacks -->
                <div class="col-lg-4 col-md-6 menu-item snacks">
                    <div class="menu-card">
                        <img src="assets/images/Sandwich-club.jpg" class="card-img-top" alt="Club Sandwich">
                        <div class="card-body">
                            <h5 class="card-title">ساندویچ کلاب</h5>
                            <p class="card-text">ساندویچ سه لایه با مرغ و سبزیجات</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>75,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 menu-item snacks">
                    <div class="menu-card">
                        <img src="assets/images/Caesar-salad.jpg" class="card-img-top" alt="Caesar Salad">
                        <div class="card-body">
                            <h5 class="card-title">سالاد سزار</h5>
                            <p class="card-text">سالاد با مرغ، نان تست و سس سزار</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>85,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 menu-item snacks">
                    <div class="menu-card">
                        <img src="assets/images/avocado-test.jpg" class="card-img-top" alt="Avocado Toast">
                        <div class="card-body">
                            <h5 class="card-title">تست آووکادو</h5>
                            <p class="card-text">نان تست با آووکادو و تخم مرغ</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>65,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 menu-item snacks">
                    <div class="menu-card">
                        <img src="assets/images/omelet.jpg" class="card-img-top" alt="Omelet">
                        <div class="card-body">
                            <h5 class="card-title">املت</h5>
                            <p class="card-text">املت با قارچ و پنیر</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>55,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 menu-item snacks">
                    <div class="menu-card">
                        <img src="assets/images/pancake.jpg" class="card-img-top" alt="Pancake">
                        <div class="card-body">
                            <h5 class="card-title">پنکیک</h5>
                            <p class="card-text">پنکیک با میوه و عسل</p>
                            <div class="price">
                                <i class="fas fa-coins"></i>
                                <span>65,000 تومان</span>
                            </div>
                            <button class="menu-btn">
                                <i class="fas fa-shopping-cart"></i>
                                افزودن به سبد خرید
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'back/footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.menu-category-btn');
    const menuItems = document.querySelectorAll('.menu-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');

            const category = button.getAttribute('data-category');

            menuItems.forEach(item => {
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