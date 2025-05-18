<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/coffe/index.php">
                <img src="/coffe/assets/images/logo.png" alt=" کافه نُوار" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'index') ? 'active' : ''; ?>" href="/coffe/index.php">
                            <i class="fas fa-home"></i> خانه
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'menu') ? 'active' : ''; ?>" href="/coffe/menu.php">
                            <i class="fas fa-coffee"></i> منو
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'gallery') ? 'active' : ''; ?>" href="/coffe/gallery.php">
                            <i class="fas fa-images"></i> گالری
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'blog') ? 'active' : ''; ?>" href="/coffe/blog.php">
                            <i class="fas fa-blog"></i> وبلاگ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'coffee-story') ? 'active' : ''; ?>" href="/coffe/coffee-story.php">
                            <i class="fas fa-book-open"></i> داستان قهوه
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'about') ? 'active' : ''; ?>" href="/coffe/about.php">
                            <i class="fas fa-info-circle"></i> درباره ما
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'contact') ? 'active' : ''; ?>" href="/coffe/contact.php">
                            <i class="fas fa-envelope"></i> تماس با ما
                        </a>
                    </li>
                </ul>
                <div class="d-flex">
                    <div class="social-links">
                        <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-telegram"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header> 